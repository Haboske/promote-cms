<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="content/CSS/styleguide.css">
    <title>Paiement accepter</title>
    <?php require 'api/css.php' ?>
</head>

<?php
date_default_timezone_set('Europe/Paris');
require 'stripe/vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_51Og4vpCjUYekZZuEJ9439JGSwhr416iwInxaGe0G9bzrDFF5XoLKXolinqOzBfcLGc3fc0vrwFuQWfzyhHWf0g2h00aXXW6pH9');

$response = ["payement" => "error", "amount" => 0];

if(isset($_POST['stripeToken'], $_POST['amount'], $_POST['first-name'], $_POST['last-name'], $_POST['last-name'])){
    $token = $_POST['stripeToken'];
    $amount = $_POST['amount'];
    $firstname = $_POST['first-name'];
    $lastname = $_POST['last-name'];
    $date = date('d/m/y');
    $amount = $amount*100;

    try{
        $charge = \Stripe\charge::create([
           'amount' => $amount,
           'currency' => 'eur',
           'description' => 'Paiment test',
           'source' => $token,
            'metadata' => [
                'first-name' => $firstname,
                'last-name' => $lastname,
                'date' => $date,
                'id' => $token
            ]
        ]);
        
        $response['payement'] = 'success';
        $response['message'] = 'success';
        $response['amount'] = $amount/100;

        echo "Le paiement est réussi !";

        $amount = $amount/100;

        //Database connection
        $server = "mysql-pataud.alwaysdata.net";
        $user = "pataud";
        $password = "rvp270175";
        $database = "pataud_thomas";

        $connection = new mysqli($server, $user, $password, $database);

        //Connection Check
        if ($connection->connect_error) {
            die("La connexion a échoué : " . $connection->connect_error);
        }

        //Data insertion request
        $sql = "INSERT INTO metadata (`first-name`, `last-name`, `date`, `amount`, `id_purchase`) VALUES ('$firstname','$lastname','$date','$amount','$token')";
        
        if ($connection->query($sql) === TRUE) {
            echo "";
        } else {
            echo "Erreur : " . $sql . "<br>" . $connection->error;
        }

        $connection->close();

    } catch(\Stripe\Exception\CardException $e){
        $response['message'] = $e->getMessage();
    
    } catch(Exception $e){
        $response['message'] = $e->getMessage();
    }
}

?>

<section class="section-spacing">
    <a class="button black" href="index.php">Retour à l'accueil</a>
</section>