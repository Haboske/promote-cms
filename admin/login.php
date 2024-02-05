<?php
session_start();
if(isset($_POST['soumettre'])){
    if(!empty($_POST['username']) AND !empty($_POST['pwd'])){
        $pseudo_par_defaut = "admin";
        $mdp_par_defaut = "1234";

        $pseudo_saisi = htmlspecialchars($_POST['username']);
        $mdp_saisi = htmlspecialchars($_POST['pwd']);

        if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
            $_SESSION['pwd'] = $mdp_saisi; //securite pour eviter de pouvoir se connecter a la page directement via le lien
            header('Location: adminAPI.php');
        }else {
            echo "Champs incorrects";
        }
    }
    else {
        echo "Veuillez completer tous les champs";
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="POST" action="">
            <input type="text" name="username" autocomplete="off" placeholder="Bob">
            <br>
            <input type="password" name="pwd" placeholder="password">
            <br><br>
            <input type="submit" name="soumettre">
        </form>
        <a href="forgot.php"><button>Mot de passe oublie</button></a>
    </body>
</html>