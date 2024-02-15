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

// Set debug mode based on the query parameter // use debug true in url to get more infos
$debug = isset($_REQUEST['debug']) && $_REQUEST['debug'] === 'true';

// Verify if the collector_id is present in the request
if (isset($_REQUEST['id'])) {
    $collector_id = $_REQUEST['id'];

    // Initialize cURL
    $curl = curl_init();

    // Set cURL options
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.mercadopago.com/v1/payments/' . $collector_id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'accept: application/json',
            'content-type: application/json',
            'Authorization: Bearer ' . $authorizationToken,
        ),
    ));

    // Execute cURL request
    $response = curl_exec($curl);

    // Check if cURL request was successful
    if ($response === false) {
        // Handle cURL error
        echo 'Error fetching payment details from Mercado Pago API.';
        if ($debug) {
            echo '<br>Debug Mode: ON';
            echo '<br>Status from Mercado Pago API: ' . $resultado->status;
            echo 'Total Paid Amount or Transaction Amount: ' . $resultado->transaction_amount * $conversionRate;
            echo '<br>Status from Mercado Pago API: <pre>' . print_r($resultado, true) . '</pre>';
            echo '<br>CURL Error: ' . curl_error($curl);
        }
    } else {
        // Decode the JSON response
        $resultado = json_decode($response);

        // Check if the payment status is 'approved' or 'paid'
        // Check if the payment status is approved or paid
// Check if the payment status is approved or paid
if ($resultado->status === 'approved' || $resultado->status === 'paid') {
    // Check if the payment has already been processed
    $check_processed = "SELECT processed FROM status WHERE codigo = ?";
    $stmt_check = mysqli_prepare($conexao, $check_processed);
    mysqli_stmt_bind_param($stmt_check, "i", $collector_id);
    mysqli_stmt_execute($stmt_check);
    mysqli_stmt_bind_result($stmt_check, $processed);
    mysqli_stmt_fetch($stmt_check);
    mysqli_stmt_close($stmt_check);

    if ($processed === 0 || $processed === null) { // Payment not processed yet
        // Mark the payment as processed
        $update_processed = "UPDATE status SET processed = 1 WHERE codigo = ?";
        $stmt_processed = mysqli_prepare($conexao, $update_processed);
        mysqli_stmt_bind_param($stmt_processed, "i", $collector_id);
        mysqli_stmt_execute($stmt_processed);
        mysqli_stmt_close($stmt_processed);
		$new_status_value = 'delivered';
		// Here's the additional update query for the status column in the status table
		$update_status = "UPDATE status SET status = ? WHERE codigo = ?";
		$stmt_status = mysqli_prepare($conexao, $update_status);
		mysqli_stmt_bind_param($stmt_status, "si", $new_status_value, $collector_id); // Replace $new_status_value with the appropriate value
		mysqli_stmt_execute($stmt_status);
		mysqli_stmt_close($stmt_status);

        // Calculate premium points based on total_paid_amount and conversion rate
        $conversionValue = $resultado->transaction_amount * $conversionRate;

        // Get the current session account
        $current_session = getSession('account');

        // Update the accounts table with premium points using prepared statement
        $update_accounts = "UPDATE accounts SET $donationType = $donationType + ? WHERE id = ?";
        $stmt_accounts = mysqli_prepare($conexao, $update_accounts);
        
        // Check if the statement for accounts table was prepared successfully
        if ($stmt_accounts) {
            // Bind parameters with data types for accounts table
            mysqli_stmt_bind_param($stmt_accounts, "di", $conversionValue, $current_session);
    
            // Execute the statement for accounts table
            mysqli_stmt_execute($stmt_accounts);
    
            // Check for successful execution for accounts table
            if (mysqli_stmt_affected_rows($stmt_accounts) > 0) {
                echo "Premium points updated successfully in accounts table";
            } else {
                echo "Error updating premium points in accounts table";
            }
    
            // Close the statement for accounts table
            mysqli_stmt_close($stmt_accounts);
        } else {
            echo "Error preparing statement for accounts table: " . mysqli_error($conexao);
        }
    } else {
        echo 'Payment already processed.';
    }
} else {
    echo 'Payment status is not "approved" or "paid". No database update performed.';
}


        if ($debug) {
        
            echo '<br>Debug Mode: ON';
            echo '<br>Status from Mercado Pago API: ' . $resultado->status;
            echo 'Total Paid Amount or Transaction Amount: ' . $resultado->transaction_amount * $conversionRate;
            echo '<br>Status from Mercado Pago API: <pre>' . print_r($resultado, true) . '</pre>';
            echo '<br>CURL Error: ' . curl_error($curl);
            
            
        }
    }

    // Close cURL
    curl_close($curl);
} else {
    echo 'Invalid or missing collector_id in the request.';
    if ($debug) {
        echo '<br>Debug Mode: ON';
        // Add more debug information as needed
    }
}
?>
