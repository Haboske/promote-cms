<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="content/CSS/styleguide.css">
    <link rel="stylesheet" href="content/CSS/formulaire_projet.css">
    <title>Paiement</title>
    <?php require 'api/css.php' ?>
</head>
<body>
    <?php require 'api/header.php' ?>

    <?php
        //FUNCTION TAKEN FROM INTERNET AND MODIFIED FOR OUR CASE
        function generatePaiementToken(){
            $stringSpace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $pieces = [];
            $max = mb_strlen($stringSpace, '8bit') - 1;
            for ($i = 0; $i < 25; ++ $i) {
                $pieces[] = $stringSpace[random_int(0, $max)];
            }
            $pre_token = implode('', $pieces);

            $token = "promote_paiement_token".$pre_token;
            
            return $token;
            echo "Mon token : " . generatePaiementToken();
        }
    ?>

    <?php
        function calculPrice($offre, $duree){
            if ($duree == "3 mois"){
                $pourcentage = 0;
                $time = 3;
            } 
            elseif ($duree == "6 mois"){
                $pourcentage = 0.1;
                $time = 6;
            }
            elseif ($duree == "12 mois"){
                $pourcentage = 0.3;
                $time = 12;
            }

            if($offre == "Light"){
                $cout = 29;
            }
            elseif($offre == "Medium"){
                $cout = 49;
            }
            elseif($offre == "Big"){
                $cout = 99;
            }

            $result = ($cout*(1-$pourcentage))*$time;

            return $result;
        }
    ?>

    <?php
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

        if(isset($_POST['submit'])){
            $nom_societe = $_POST['nom_societe'];
            $contact = $_POST['contact'];
            $description_societe = $_POST['description_societe'];
            $description_demande = $_POST['description_demande'];
            $offre = $_POST['offre'];
            $duree = $_POST['duree'];
            $id_forms = generatePaiementToken();
            $prix = calculPrice($offre, $duree);

            $sql = ("INSERT INTO `forms`(`nom_societe`, `contact`, `description_societe`, `description_demande`, `offre`, `duree`, `id_forms`, `prix` ) VALUES ('$nom_societe','$contact','$description_societe','$description_demande','$offre','$duree','$id_forms', '$prix')");

            if ($connection->query($sql) === TRUE) {
                echo "";
            } else {
                echo "Erreur : " . $sql . "<br>" . $connection->error;
            }

            $connection->close();
        }
    ?>

    <section class="section-spacing">
        <form action="charge.php" method="post" id="payment-form">
            <input type="hidden" value="<?php echo $id_forms; ?>">
            <div class="display-flex flex-column">
                <label class="text-size-large" for="first-name">Prénom</label>
                <input class="border-semidbold border-radius-medium padding-right padding-micro margin-top-tiny" type="text" id="first-name" name="first-name" required></input>
            </div>
            <br>
            <div class="display-flex flex-column" >
                <label class="text-size-large" for="last-name">Nom</label>
                <input class="border-semidbold border-radius-medium padding-right padding-micro margin-top-tiny" type="text" id="last-name" name="last-name" required></input>
                <input type="hidden" name="amount" value="<?php echo $prix ?>"></input>
            </div>
            <br>
            <input type="hidden" name="amount" value="<?php echo $prix ?>"></input>
            <label class="text-size-large" >Numéro de carte</label>
            <div class="border-semidbold border-radius-medium padding-right padding-micro margin-top-tiny card-input" id="card-element">

            </div>

            <div id="card-errors" role="alert">

            </div>
            <br>
            <button type="submit" class="button black">Payer <?php echo $prix; ?> €</button>
        </form>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="app.js"></script>
    </section>
    

</body>
</html>