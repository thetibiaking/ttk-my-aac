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

 $pointsByDonate = 60; //  coins
 $priceByPoints = 25.00; //  value
 $conversionRate = $pointsByDonate / $priceByPoints; 
 $debug = false;
 $notificationUrl = 'https://mywebsite.online/?mpnotification';
 $noSessionUrl = 'https://mywebsite.online/?account/manage';
 $pixStatusUrl = "https://mywebsite.online/?p=mpnotification&id=' . $collector_id . '&debug=' . ($debug ? 'true' : 'false')"

 $donationType = 'premium_points'; // coins or premium_points
 $doublePoints = false; // not added yet
 $authorizationToken = 'APP_USR-YOURTOKEN';

$servername     = "localhost"; 
$username       = "root";
$password       = "";
$db_name        = "";

$conexao = mysqli_connect($servername, $username, $password, $db_name);

if (!$conexao) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

?>










