<?php

/**
 * Automatic Mercadopago payment system gateway.
 *
 * @name      pix-myaac-mercadopago
 * @author    Rafhael Oliveira <rafhaelxd@gmail.com>
 * @website   github.com/thetibiaking/ttk-myaac-plugins
 * @website   github.com/underewarrr/
 * @version   1.0.0
 */

require_once(SYSTEM . 'functions.php');
require_once(SYSTEM . 'init.php');
require_once(PLUGINS . 'mercadopago/pix/config.php');

if(!isset($config['mercadopago']) || !count($config['mercadopago']) || !count($config['mercadopago']['options'])) {
 	echo "MercadoPago is disabled. If you're an admin please configure this script in config.local.php.";
 	return;
 }

if (empty($current_session)) {
    header("Location: " . $noSessionUrl);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se os dados foram enviados via POST
    // Caminho relativo para o arquivo config.php

    $quantidadeSelecionada = (int)$_POST['quantidade'];
    $cpf = $_POST['cpf'];

    // Validate CPF
    if (!validateCPF($cpf)) {
        echo '<p>CPF inválido. Por favor, verifique e tente novamente.</p>';
        exit; 
    }

    $totalValue = $quantidadeSelecionada * $priceByPoints;
    $pontosGanhos = $quantidadeSelecionada * $pointsByDonate;

    $curl = curl_init();
    $dados["transaction_amount"] = $totalValue;
    $dados["description"] = $_POST['description'] ?: 'Value and Coins'; 
    $dados["external_reference"] = "2";
    $dados["payment_method_id"] = "pix";
    $dados["notification_url"] = $notificationUrl;
    $dados["payer"]["email"] = $_POST['email_cob'];
    $dados["payer"]["first_name"] = "Nilza";
    $dados["payer"]["last_name"] = "Guimaraes";
    $dados["payer"]["identification"]["type"] = "CPF";
    $dados["payer"]["identification"]["number"] = $cpf;

    $dados["payer"]["address"]["zip_code"] = "76240000";
    $dados["payer"]["address"]["street_name"] = "Av. Carlos Gomes";
    $dados["payer"]["address"]["street_number"] = "411";
    $dados["payer"]["address"]["neighborhood"] = "Bela Vista";
    $dados["payer"]["address"]["city"] = "Aragarcas";
    $dados["payer"]["address"]["federal_unit"] = "GO";

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.mercadopago.com/v1/payments',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => json_encode($dados),
        CURLOPT_HTTPHEADER => array(
            'accept: application/json',
            'content-type: application/json',
            'Authorization: Bearer ' . $authorizationToken,
        ),
    ));
    $response = curl_exec($curl);
    $resultado = json_decode($response);
    $collector_id = isset($resultado->id) ? $resultado->id : null;
    curl_close($curl);

    // Display full response for debugging if debug is enabled
    if ($debug) {
        echo '<pre>';
        var_dump($resultado);
        echo '</pre>';
    }

    // Check if collector_id is present
    if (!$collector_id) {
        echo '<p>Error: Collector ID not found in the response.</p>';
        exit;
    }

    echo 'Collector ID: ' . $collector_id;

    // Verifica se a resposta foi bem-sucedida antes de exibir o QR Code
    if ($resultado->status === 'pending') {
        // Exibe o QR Code e o código apenas se o debug estiver desativado
        if (!$debug) {
            echo '<img style="display:block; width:300px;height:300px;" id="base64image" src="data:image/jpeg;base64, ' . $resultado->point_of_interaction->transaction_data->qr_code_base64 . '" />';
            echo '<b>Copie:</b> ' . $resultado->point_of_interaction->transaction_data->qr_code;
        }

        // Exibe os pontos ganhos
        echo '<p>Você gerou um pix no valor de ' .$totalValue. 'R$ e ' . $pontosGanhos . ' pontos!</p>';
        echo '<p>Ao Pagar você recebera seus pontos automaticamente</p>';
        echo '<p>Status: ' . $resultado->status . '</p>';
        echo '<button onclick="location.href=\'' . $pixStatusUrl . '\'" type="button">Conferir Status do Pedido</button> <br>';
        // Ação no banco de dados (se necessário)
        $current_session = getSession('account');

        $sql = "INSERT INTO status(status, codigo, account, points) VALUES(?, ?, ?, ?)";
        $stmt = mysqli_prepare($conexao, $sql);
        
        // Check if the statement was prepared successfully
        if ($stmt) {
            // Assuming $current_session and $pontosGanhos are defined elsewhere in your code
            // Bind parameters with data types
            mysqli_stmt_bind_param($stmt, "sssi", $resultado->status, $collector_id, $current_session, $pontosGanhos);
        
            // Execute the statement
            mysqli_stmt_execute($stmt);
        
            // Check for successful execution
            if (mysqli_stmt_affected_rows($stmt) > 0) {
                echo "Record inserted successfully";
            } else {
                echo "Error inserting record";
            }
        
            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            echo "Error preparing statement: " . mysqli_error($conexao);
        }
    } else {
        echo '<p>Erro ao processar o pagamento. Tente novamente.</p>';

        // Display error message, if available
        if (isset($resultado->message)) {
            echo '<p>Error Message: ' . $resultado->message . '</p>';
        }

        // Display status for further analysis
        echo '<p>Status: ' . $resultado->status . '</p>';
    }
} else {
    // Formulário para preenchimento dos dados
    echo '
        <form method="POST">
            <label for="quantidade">Quantidade de Doações:</label>
            <select name="quantidade" id="quantidade" required>
                <option value="1">1 - R$25,00 (60 pontos)</option>
                <option value="2">2 - R$50,00 (120 pontos)</option>
                <option value="3">3 - R$75,00 (180 pontos)</option>
                <!-- Adicione mais opções conforme necessário -->
            </select>
            <br>
            <label for="description">Descrição:</label>
            <input type="text" name="description" id="description" placeholder="Write any description" required>
            <br>
            <label for="email_cob">Email do Pagador:</label>
            <input type="email" name="email_cob" id="email_cob" required>
            <br>
            <label for="cpf">CPF do Pagador:</label>
            <input type="text" name="cpf" id="cpf" required>
            <br>
            <button type="submit">Gerar Pix</button>
        </form>
    ';
}

// Simple CPF validation function
function validateCPF($cpf) {
    // Remove any non-numeric characters
    $cpf = preg_replace('/[^0-9]/', '', $cpf);

    // Check if CPF has 11 digits
    if (strlen($cpf) != 11) {
        return false;
    }

    // Validate CPF using basic algorithm
    $sum = 0;
    for ($i = 0; $i < 9; $i++) {
        $sum += (int)$cpf[$i] * (10 - $i);
    }

    $remainder = $sum % 11;
    $digit = ($remainder < 2) ? 0 : 11 - $remainder;

    if ((int)$cpf[9] != $digit) {
        return false;
    }

    $sum = 0;
    for ($i = 0; $i < 10; $i++) {
        $sum += (int)$cpf[$i] * (11 - $i);
    }

    $remainder = $sum % 11;
    $digit = ($remainder < 2) ? 0 : 11 - $remainder;

    if ((int)$cpf[10] != $digit) {
        return false;
    }

    return true;
}
?>
