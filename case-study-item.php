<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet Item</title>
    <?php require 'api/css.php' ?>
</head>
<body>
    <?php require 'api/header.php' ?>
    <main>
        <section class="section-spacing">
            <div class="wrapper">
                <div class="display-flex flex-row align-center small-gap justify-center">
                    <img src="content/PNG/logo-google.svg" class="">
                    <div class="small-divider"></div>
                    <p class ="text-uppercase letter-spacing-large font-weight-semibold">
                        <span> 1</span>
                        <span > Avril,</span>
                        <span> 2023</span>
                    </p>
                </div>
                <h1 class="heading-large margin-top-tiny justify-center text-align-center">
                Comment nous avons aidé Google à augmenter le taux de conversion sur G-suite de 25% en moins de 30 jours
                </h1>
            </div>
            <div class = "wrapper margin-top-small">
                <img src ="content/PNG/projetitem-picture.png" class="image-banner border-radius-big">
            </div>
            <div class="display-flex flex-row justify-center margin-top-small justify-between ">
                    <div>
                        <h4 class ="heading-tiny-small">Client</h4>
                        <label class="heading-micro text-color-darkgrey">Youtube</label>
                    </div>
                    <div>
                        <h4 class ="heading-tiny-small">Services</h4>
                        <label class="heading-micro text-color-darkgrey">Publicités Payante</label>
                    </div>
                    <div>
                        <h4 class ="heading-tiny-small">Plateformes</h4>
                        <label class="heading-micro text-color-darkgrey">Créateurs De Youtube</label>
                    </div>
                    <div>
                        <h4 class ="heading-tiny-small">Resultats</h4>
                        <h3 class="text-color-blue heading-tiny-small">85m + </h3>
                        <label class="heading-micro text-color-darkgrey ">Plus De Visiteurs Par An</label>
                    </div>
            </div>
            <div class=" margin-top-small divider"></div>
        </section>
        <section class="section-spacing  align-center ">
            <h1 class="heading-small display-flex flex-row justify-center"> Description du projet</h1>
            
        </section>
        
        <section class="background-color-black section-spacing">

            <div class="newsletter-text justify-center">
                <h2 class="heading-large">Souscrivez à notre <span class="text-color-yellow">newsletter</span></h2>
            </div>
            <br>
            <div class="display-flex align-center justify-center small-gap">
                <input class="input-newletter text-color-lightgrey" type="email" placeholder="Entrez votre E-mail... " required>
                <a class="button small button yellow">Souscrire</a>
            </div>
        </section>
        
        <section class="section-spacing display-flex">
            <div class="margin-left-tiny display-flex flex-row small-gap">
                <div class=" display-flex flex-row justify-between icon-projet"></div>
                <div class="display-flex flex-column tiny-gap">
                    <p class =" letter-spacing-large font-weight-semibold text-size-small">
                                <span class="text-color-yellow"> // </span>
                                    <span > 04.</span>
                                <span> TESTIMONIAL</span>
                    </p>
                    <h4 class="heading-small font-weight-semibold">
                        We work with customers 
                        <br> across all industries
                    </h4>
                </div>
            </div>
        </section>
    </main>
    <?php require 'api/footer.php' ?>
</body>
</html>