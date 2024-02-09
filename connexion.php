<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require "api/css.php"?>
</head>
<body>

    <section class="section-spacing">
        <div class="section-wrapper">
            <div class="wrapper display-flex justify-center align-center">
                <div class="background-gradient-blueToYellow-pastel padding-small border-radius-medium">
                    <div class="wrapper display-flex flex-column justify-center align-center medium-gap background-color-white padding-large border-radius-medium">
                        <div class="image-wrapper">
                            <img src="content/PNG/connexion-locker.png" width="300">
                        </div>
                        <div class="wrapper display-flex flex-column justify-center text-align-center align-center tiny-gap">
                            <h1 class="heading-medium font-weight-bold">Page protégée</h1>
                            <p>Accès administrateur Promote</p>
                        </div>
                        <div class="wrapper">
                            <form action="traitement_connexion.php" method="post" data-name="email" class="display-flex flex-column small-gap justify-center align-center">
                                <input type="email" name="email" data-name="email" class="connexion-input" placeholder="Entrez votre email">
                                <input type="password" name="password" data-name="password" class="connexion-input" placeholder="Entrez votre mots de passe">  

                                <input type="submit" name="connexion" value="Envoyer" class="button black small">  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
