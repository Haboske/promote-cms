<?php
session_start();
$bdd = new PDO('mysql:host=mysql-databasetest.alwaysdata.net;dbname=databasetest_sql;', '335454', 'Tigrou2023');

    if(isset($_GET['u']) && isset($_GET['password_reset_token']) && !empty($_GET['u']) && !empty($_GET['password_reset_token'])){
        $u = htmlspecialchars(base64_decode($_GET['u']));
        $password_reset_token = (base64_decode($_GET['password_reset_token']));

        $check = $bdd->prepare('SELECT * FROM password_recover WHERE admin_id = ? AND password_reset_token = ?');
        $check->execute(array($u, $password_reset_token));
        $row = $check->rowCount();

        if($row){
            $get = $bdd->prepare('SELECT password_reset_token FROM admin WHERE password_reset_token = ?');
            $get->execute(array($u));
            $data_u = $get->fetch();

            if(hash_equals($data_u['password_reset_token'], $u)){
                header('Location: password_change.php?u='.base64_encode($u));
            }else{
                echo "Erreur de compte";
            }

        }else{
            echo "Erreur : compte non valide";
        }
    }else{
        echo "Lien non valide";
    }
?>