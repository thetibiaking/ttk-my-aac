<?php

/**
 * Automatic Mercadopago payment system gateway.
 *
 * @name      pix-myaac-mercadopago
 * @author    Rafhael Oliveira <rafhaelxd@gmail.com>
 * @website   github.com/thetibiaking/ttk-myaac
 * @website   github.com/underewarrr/
 * @version   1.0.0
 */

 $pointsByDonate = 250; //  coins
 $priceByPoints = 10.00; //  value
 $conversionRate = $pointsByDonate / $priceByPoints; 
 $debug = false;
 $notificationUrl = 'https://meusite.com/?mpnotification';
 $noSessionUrl = 'https://meusite.com/?account/manage';
 $donationType = 'coins_transferable'; // coins or premium_points
 $doublePoints = false; // not added yet
 $authorizationToken = '';

// Conexao com banco de dados
$servername     = "localhost"; // NO NEED TO USE THIS
$username       = "root";
$password       = "";
$db_name        = "";

$conexao = mysqli_connect($servername, $username, $password, $db_name);

if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

?>










