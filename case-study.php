<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case study </title>
    <?php require 'api/css.php' ?>
</head>
<body>
    <?php require 'api/header.php' ?>
    <main>
        <!-- Espace background-->
        <section class="section-spacing"></section>


        <section class="section-spacing display-flex flex-column  align-center">
            <div class="wrapper display-flex flex-column tiny-gap align-center ">
                <div class="icon-case-study"></div>
                <p class ="heading-small letter-spacing-large font-weight-semibold text-size-small">
                    <span class="text-color-blue"> // </span>
                    <span > 01</span>
                    <span > .</span>
                    <span> PROJETS</span>
                </p>
                <h2 class="heading-small font-weight-semibold justify-center">
                    Parcourez nos projets
                </h2> 
            </div>

            <!-- CARD N°°1 -->
            <div class = "wrapper margin-top-small padding-small display-flex flex-row normal-gap background-color-blue border-radius-light">
                <div class="wrapper display-flex flex-row ">
                    <img src ="content/PNG/casestudy-headphones.png" class=" image-full-width border-radius-light align-center">
                </div>
                <div class="display-flex flex-column background-color-white normal-gap border-radius-light align-start padding-tiny">
                    <div class="display-flex flex-column small-gap">
                        <img src="content/PNG/logo-google.svg" class="image-logo">
                        <div class="divider"></div>
                        <h3 class="font-weight-semibold">
                            Comment nous avons aidé Google à augmenter son taux de conversion sur G-Suite de 25% en moins de 30 jours.
                        </h3>
                        <p class="text-color-darkgrey">
                            Tincidunt donec vulputate ipsum erat urna auctor. Eget phasellus ideirs.adipiscing elit. Tincidunt donec vulputate ipsum erat urna auctor. 
                        </p>
                    </div>
                    <button class="button black small"> <a href="projetitem.php" class="text-color-white">Voir Le Projet</a></button>
                </div>
            </div>

            <!-- CARD N°°2 -->
            <div class = "wrapper margin-top-small padding-small display-flex flex-row normal-gap background-color-red border-radius-light">
                <div class="wrapper display-flex flex-row ">
                    <img src ="content/PNG/casestudy-brain.png" class="image-full-width border-radius-light align-center">
                </div>
                <div class="display-flex flex-column background-color-white border-radius-light normal-gap align-start padding-tiny">
                    <div class="display-flex flex-column small-gap">
                        <img src="content/PNG/logo-youtube.svg" class="image-logo">
                        <div class="divider"></div>
                        <h3 class="font-weight-semibold">
                            Comment nous avons aidé Google à augmenter son taux de conversion sur G-Suite de 25% en moins de 30 jours.
                        </h3>
                        <p class="text-color-darkgrey">
                            Tincidunt donec vulputate ipsum erat urna auctor. Eget phasellus ideirs.adipiscing elit. Tincidunt donec vulputate ipsum erat urna auctor. 
                        </p>
                    </div>
                    <button class="button black small"> <a href="projetitem.php" class="text-color-white">Voir Le Projet</a></button>
                </div>
            </div>

            <!-- CARD N°°3 -->
            <div class = "wrapper margin-top-small padding-small display-flex flex-row normal-gap background-color-yellow border-radius-light">
                <div class="wrapper display-flex flex-row ">
                    <img src ="content/PNG/casestudy-women.png" class="image-full-width border-radius-light align-center">
                </div>
                <div class="display-flex flex-column background-color-white border-radius-light normal-gap align-start padding-tiny">
                    <div class="display-flex flex-column small-gap">
                        <img src="content/PNG/logo-facebook.svg" class="image-logo">
                        <div class="divider"></div>
                        <h3 class="font-weight-semibold">
                            Comment nous avons aidé Google à augmenter son taux de conversion sur G-Suite de 25% en moins de 30 jours.
                        </h3>
                        <p class="text-color-darkgrey">
                            Tincidunt donec vulputate ipsum erat urna auctor. Eget phasellus ideirs.adipiscing elit. Tincidunt donec vulputate ipsum erat urna auctor. 
                        </p>  
                    </div>
                    <button class="button black small"> <a href="projetitem.php" class="text-color-white">Voir Le Projet</a></button>
                </div>
            </div>
        </section>
    </main>
    <?php require 'api/footer.php' ?>
</body>
</html>