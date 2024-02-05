<?php
session_start();
if(!$_SESSION['mdp']){
    header('Location: ../admin/login.php');
    // header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <meta charset="utf-8">
    </head>
    <body>

        <h3>Change account</h3>

        <form action="../includes/userupdate_inc.php" method="post">
            <input type="text" name="username" autocomplete="off" placeholder="Bob">
            <input type="password" name="pwd" placeholder="password">
            <input type="text" name="email" placeholder="Dupont@mail.com">
            <button>Change Account</button>
        </form>

        <h3>Delete account</h3>

        <form action="../includes/userdelete_inc.php" method="post">
            <input type="text" name="username" autocomplete="off" placeholder="Bob">
            <input type="password" name="pwd" placeholder="password">
            <button>Delete</button>
        </form>

        <h3>Change account</h3>

        <a href="modify_WebSite.php">Modifier les pages du site</a>
        <a href="password_change.php">Modifier le mot de passe</a>
        <a href="logout.php">Se deconnecter</a>
    </body>
</html>