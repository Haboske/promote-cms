<?php
session_start();
if(!$_SESSION['mdp']){
    header('Location: index.php');
}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <meta charset="utf-8">
    </head>
    <body>
        <a href="modify_WebSite.php">Modifier les pages du site</a>
        <a href="password_change.php">Modifier le mot de passe</a>
        <a href="logout.php">Se deconnecter</a>
    </body>
</html>