<?php

$servername = "localhost";
$username = "root";
$password = "";

try{
    $bdd = new PDO("mysql:host=".$servername.";dbname=users;charset=utf8", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie !";
}

catch(PDOException $e){
    echo "Erreur : ".$e->getMessage();
}

if(isset($_POST['ok'])){
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['pass'];
    $email = $_POST['email'];

    $requete = $bdd->prepare("INSERT INTO users VALUES (0, :pseudo, :lastname, :firstname, MD5(:mdp), :email)");
    $requete->execute(
        array(
            "pseudo" => $pseudo,
            "lastname" => $lastname,
            "firstname" => $firstname,
            "mdp" => $mdp,
            "email" => $email

        )
    );
    $check = $requete->fetchAll(PDO::FETCH_ASSOC);
    var_dump($check);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Afficher Email</title>
        <meta charset="utf-8">
        <style>
            echo{
                display: flex;
            }
        </style>
    </head>
    <body>
        <?php
        $recupEmail = $bdd->query('SELECT * FROM users ORDER BY id ASC');            
        while ($id = $recupEmail->fetch()) {
        echo $id['id'] . ' ' . $id['email'] . PHP_EOL . "<br/>", "<br/>";
        }
        ?>

    </body>
</html>