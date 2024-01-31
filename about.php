<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require 'api/css.php' ?>
</head>
<body>
<?php require 'api/header.php' ?>
    <main>    

        <!-- section banniere cercle -->
        <section class="banniere-section background-gradient-blueToYellow-pastel">
                <div class="banniere-circle-white">
                    <!-- Texte non responsive -->
                    <h1 class="heading-faded-pattern heading-huge">A propos</h1>
                    <img class ="image-faded-pattern center-in-circle" src="./content/PNG/Pattern.svg">
                </div>
        </section>

        <!-- section statistiques utilisateurs qui incrémentent -->

        <section class="section-spacing background-color-black">
            <div class="wrapper display-flex flex-row medium-gap align-center jusitfy-between">
                <div class="wrapper display-flex flew-row tiny-gap align-center">
                    <p class="heading-medium font-weight-semibold">
                        <span id="compteur1">0</span><span class="text-color-blue">+</span>
                    </p>
                    <p class="text-uppercase">
                        Clients dans <br> le monde
                    </p>
                </div>
                <div class="wrapper display-flex flew-row tiny-gap align-center">
                    <p class="heading-medium font-weight-semibold">
                        <span id="compteur2">0</span><span class="text-color-red">+</span>
                    </p>
                    <p class="text-uppercase">
                        Projets <br> complétés
                    </p>
                </div>
                <div class="wrapper display-flex flew-row tiny-gap align-center">
                    <p class="heading-medium font-weight-semibold">
                        <span id="compteur3">0</span><span class="text-color-yellow">+</span>
                    </p>
                    <p class="text-uppercase">
                        Membres dans <br>l'équipe 
                    </p>
                </div>
                <div class="wrapper display-flex flew-row tiny-gap align-center">
                    <p class="heading-medium font-weight-semibold">
                        <span id="compteur4">0</span>m<span class="text-color-green">+</span>
                    </p>
                    <p class="text-uppercase">
                        Revenus <br> générés 
                    </p>
                </div>
            </div>
        </section>

        <!-- section "A propos" de l'agence -->

        <section class="section-spacing">
            <div class="display-flex align-end medium-gap">
                <div class="wrapper">
                    <img src="./content/PNG/about-computer.png" class="about-computer">
                    <img src="./content/PNG/about-computer-background.png" class="about-computer-background">
                </div>
                <div class="wrapper display-flex flex-column small-gap flex-start">
                    
                    <div class="wrapper display-flex flex-row small-gap flex-start">
                        <div class="icon yellow"></div>
                    
                        <div class="wrapper display-flex flex-column flex-start">
                            <p class="text-uppercase text-size-small"><span class="text-color-yellow">//</span> 01 . A propos</p> 
                            <h2 class="heading-medium display-flex">L’agence #1 dans le digital marketing</h2>
                        </div>
                    </div>

                    <div class="divider"></div>
                    
                    <div class="display-flex flex-nowrap small-gap">
                        <a class="button black integrated-icon display-flex justify-center heading-tiny-small" href="">
                            <img src="./content/PNG/Image_target.svg"> 
                            Développement
                        </a>
                        <a class="button black integrated-icon display-flex justify-center heading-tiny-small" href="">
                            <img src="./content/PNG/Image_target.svg"> 
                            Recherche & Stratégie
                        </a>
                    </div>
                    <p>Lorem ipsum dolors sit non amet consectetur adipiscing elit fringilla aliquam Aliquam vestibulum libero morbi blandit cursus risus. Laoreet non curabitur gravida arcu ac tortor semper vivera nam libero justo laoreet mollis aliquam ut porttitor leo a diam.</p>
                    
                    <div class="display-flex align-center">
                        <a class="button transparent small display-flex justify-center" href="">Contact</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- section "Nos valeurs", caroussel -->

        <section class="background-color-black section-spacing display-flex align-center flex-column">
            <div class="icon orange"></div>
            <p class="text-uppercase text-size-small margin-top-small"><span class="text-color-yellow">//</span> 02 . Nos valeurs</p> 
            <h2 class="heading-medium">Les valeurs fondamentales qui sous-tendent notre travail</h2>
            <div class="display-flex flex-row small-gap align-center margin-top-medium"> 
                <a class="button black small" href="">Contact</a>
                <a class="button white small display-flex align-center micro-gap" href="">Nos services <img src="./content/SVG/button-right-arrow.svg"></a>
            </div>
        </section>

        <!-- section "Notre équipe" -->

        <section class="section-spacing display-flex justify-center">
            <div class="display-flex flex-column align-center normal-gap">
                <div class="display-flex flex-column align-center tiny-gap">
                    <div class="icon purple"></div>
                    <p class="text-uppercase text-size-small"><span class="text-color-blue">//</span> 03 . Notre équipe</p> 
                    <h2 class="heading-medium">Notre équipe d’experts marketing</h2>
                </div>

                <!-- Partie photos -->

                <div class="display-flex flex-row small-gap">
                <div class="wrapper display-flex flex-column align-center small-gap border-light grey padding-tiny border-radius-big">
                        <div>
                            <img src="./content/SVG/Photo_pippa.svg">
                        </div>
                        <div class="divider-tiny-blue"></div>
                        <div>
                            <h3 class="heading-tiny-small font-weight-bold text-align-center">Pippa Clarkson</h3>
                            <p class="text-align-center">Manager principale</p>
                        </div>
                        <div class="wrapper display-flex justify-center tiny-gap margin-bottom-tiny">
                            <img src="./content/SVG/Facebook.svg">
                            <img src="./content/SVG/Twitter.svg">     
                        </div>
                    </div>
                    <div class="wrapper display-flex flex-column align-center small-gap background-gradient-blueToYellow-pastel padding-tiny border-radius-big">
                        <div>
                            <img src="./content/SVG/Photo_richard_homme.svg">
                        </div>
                        <div class="divider-tiny-blue"></div>
                        <div>
                            <h3 class="heading-tiny-small font-weight-bold text-align-center">Richard Walsh</h3>
                            <p class="text-align-center">Manager</p>
                        </div>
                        <div class="wrapper display-flex justify-center tiny-gap margin-bottom-tiny">
                            <img src="./content/SVG/Facebook.svg">
                            <img src="./content/SVG/Twitter.svg">  
                            <img src="./content/SVG/Instagram.svg">    
                        </div>
                    </div>
                    <div class="wrapper display-flex flex-column align-center small-gap border-light grey padding-tiny border-radius-big">
                        <div>
                            <img src="./content/SVG/Photo_richard_femme.svg">
                        </div>
                        <div class="divider-tiny-blue"></div>
                        <div>
                            <h3 class="heading-tiny-small font-weight-bold text-align-center">Richarde Walshe</h3>
                            <p class="text-align-center">Manager secondaire</p>
                        </div>
                        <div class="wrapper display-flex justify-center tiny-gap margin-bottom-tiny">
                            <img src="./content/SVG/Twitter.svg">  
                            <img src="./content/SVG/Instagram.svg">    
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section "Nos bureaux" -->

        <section class="background-gradient-blueToYellow-pastel section-spacing display-flex justify-center">
            <div class="icon"></div>
            <div>
                <h4>blabla</h4>
            </div>
            <a class="button black" href="">Lorem ipsum</a>    
            <div class="display-flex align-center">
                <button class="border-radius-medium">dfsfsdsdf</button>
                <button class="border-radius-medium">dfsfsdsdf</button>
                <button class="border-radius-medium">dfsfsdsdf</button>
            </div>        
        </section>

    </main>
    <script src="scripts/augment_stat.js"></script>
    <?php require 'api/footer.php' ?>
</body>
</html>