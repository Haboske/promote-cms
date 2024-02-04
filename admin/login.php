<?php
session_start();
if(isset($_POST['soumettre'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo_par_defaut = "admin";
        $mdp_par_defaut = "1234";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut){
            $_SESSION['mdp'] = $mdp_saisi; //securite pour eviter de pouvoir se connecter a la page directement via le lien
            header('Location: admin.php');
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
            <input type="text" name="pseudo" autocomplete="off">
            <br>
            <input type="password" name="mdp">
            <br><br>
            <input type="submit" name="soumettre">
        </form>
        <a href="forgot.php"><button>Mot de passe oublie</button></a>
    </body>
</html>