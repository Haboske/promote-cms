<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP / MySQL</title>
        <meta charset='utf-8'>
    </head>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servname = "mysql-databasetest.alwaysdata.net"; $dbname = "databasetest_promoteddb"; $user = "335454"; $pass = "Tigrou2023";
            
            try{
                $dbco = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
                $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                $email = $_GET["email"];
                $pwd = $_GET["pwd"];
                
                $sth = $dbco->prepare("
                    INSERT INTO USERS(email, pwd)
                    VALUES ($email, $pwd)
                ");
                $sth->bindParam(1, $email);
                $sth->bindParam(2, $pwd);
                $sth->execute();
                echo "Entrée ajoutée dans la table";
            }
                  
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>
    </body>
</html>