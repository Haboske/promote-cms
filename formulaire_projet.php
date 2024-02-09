<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="content/CSS/styleguide.css">
    <link rel="stylesheet" href="content/CSS/formulaire_projet.css">
    <title>Demande de projet</title>
    <?php require 'api/css.php' ?>
</head>
<body>
    <?php require 'api/header.php' ?>

    <main>

        <section class="section-spacing ">
            <div>
                <form method="post" action="paiement.php">
                    <div class="display-flex flex-column">
                        <label class="text-size-large">Nom de la société</label>
                        <input class="border-semidbold border-radius-medium padding-right padding-micro margin-top-tiny" name="nom_societe">
                    </div>
                    <br>

                    <div class="display-flex flex-column">
                        <label class="text-size-large">Téléphone ou adresse mail</label>
                        <input class="border-semidbold border-radius-medium padding-right padding-micro margin-top-tiny" name="contact">
                    </div>
                    <br>

                    <div class="display-flex flex-column">
                        <label class="text-size-large">Description de la société</label>
                        <textarea class="border-semidbold border-radius-medium padding-right padding-micro margin-top-tiny" name="description_societe"></textarea>
                    </div> 
                    <br>

                    <div class="display-flex flex-column">
                        <label class="text-size-large">Description de la demande</label>
                        <textarea class="border-semidbold border-radius-medium padding-right padding-micro margin-top-tiny" name="description_demande"></textarea>
                    </div>
                    <br>

                    <div>
                        <p class="text-size-large">Choix de l'offre :</p>
                        <hr>
                        <br>
                        <input class="radio-btn" type="radio" name="offre" value="Light">
                        <label>Light | 29€ /Par mois</label>
                        <br>
                        <input class="radio-btn" type="radio" name="offre"  value="Medium" checked />
                        <label>Medium | 49€ /Par mois</label>
                        <br>
                        <input class="radio-btn" type="radio" name="offre" value="Big">
                        <label>Big | 99€ /Par mois</label>
                    </div>
                    <br>
                    <div>
                        <p class="text-size-large">Choix de la durée de l'offre:</p>
                        <hr>
                        <br>
                        <input class="radio-btn" type="radio" name="duree" value="3 mois">
                        <label>3 mois</label>
                        <br>
                        <input class="radio-btn" type="radio" name="duree"  value="6 mois" checked />
                        <label>6 mois | -10%</label>
                        <br>
                        <input class="radio-btn" type="radio" name="duree" value="12 mois">
                        <label>12 mois | -30%</label>
                    </div>
                    <br>
                    <br>
                    <input type="submit" class="button black small" name="submit" value="Valider" onclick="window.location.href = 'paiement.php';">
                </form>
            </div>

        </section>





    </main>
    <?php require 'api/footer.php' ?>
</body>
</html>
