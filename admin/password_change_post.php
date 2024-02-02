<?php  
    session_start();
    $bdd = new PDO('mysql:host=mysql-databasetest.alwaysdata.net;dbname=databasetest_promoteddb;', '335454', 'Tigrou2023');

    if(isset($_POST['password']) && isset($_POST['password_repeat']) && isset($_POST['password_reset_admin'])){
        if(!empty($_POST['password']) && !empty($_POST['password_repeat']) && !empty($_POST['password_reset_admin'])){
            $password = htmlspecialchars($_POST['password']);
            $password_repeat = htmlspecialchars($_POST['password_repeat']);
            $password_reset_admin = htmlspecialchars($_POST['password_reset_admin']);

            $check = $bdd->prepare('SELECT * FROM admin WHERE password_reset_admin = ?');
            $check->execute(array($password_reset_admin));
            $row = $check->rowCount();

            if($row){
                if($password === $password_repeat){
                    //partie chiffrement/hashage avec BCRYPT
                    $cost = ['cost' => 12];
                    $password = password_hash($password, PASSWORD_BCRYPT, $cost);

                    $update = $bdd->prepare('UPDATE admin SET password = ? WHERE password_reset_token = ?');
                    $update->execute(array($password, $password_reset_admin));

                    $delete = $bdd->prepare('DELETE FROM admin WHERE admin_password = ?');
                    $delete->execute(array($password_reset_admin));

                    echo "Le mot de passe a bien ete change";
                }else{
                    echo "Les mots de passes ne sont pas identiques";
                }
            }else{
                echo "Le compte n'existe pas";
            }
        }else{
            echo "Merci de renseigner un mot de passe";
        }
    }
?>

