<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require 'api/css.php' ?>
    <link rel="stylesheet" href="content/CSS/about.css">
</head>
<body>
<?php # require 'api/header.php' ?>
    <main>    

        <!-- SECTION -01 -->
        <!-- WHITE CIRCLE BANNER -->
        <section class="section-white-circle-banner background-gradient-blueToYellow-pastel">
            <div class="white-circle-wrapper">
                    <!-- Texte non responsive -->
                    <h1 class="white-circle-heading heading-huge">A propos</h1>
                    <img class ="white-circle-faded-pattern center-in-circle" src="./content/PNG/Pattern.svg">
            </div>
        </section>

        <!-- SECTION 00 -->
        <!-- DYNAMIC STATS -->
        <section class="section-spacing background-color-black">
            <div class="section-wrapper">
                <div class="wrapper display-grid-4col-1row medium-gap">
                    <div class="dynamic-card-wrapper wrapper display-flex flew-row tiny-gap align-center">
                        <p class="heading-medium font-weight-semibold">
                            <span id="compteur1">0</span><span class="text-color-blue">+</span>
                        </p>
                        <p class="text-uppercase">
                            Clients dans <br> le monde
                        </p>
                    </div>
                    <div class="dynamic-card-wrapper wrapper display-flex flew-row tiny-gap align-center">
                        <p class="heading-medium font-weight-semibold">
                            <span id="compteur2">0</span><span class="text-color-red">+</span>
                        </p>
                        <p class="text-uppercase">
                            Projets <br> complétés
                        </p>
                    </div>
                    <div class="dynamic-card-wrapper wrapper display-flex flew-row tiny-gap align-center">
                        <p class="heading-medium font-weight-semibold">
                            <span id="compteur3">0</span><span class="text-color-yellow">+</span>
                        </p>
                        <p class="text-uppercase">
                            Membres dans <br>l'équipe 
                        </p>
                    </div>
                    <div class="dynamic-card-wrapper wrapper display-flex flew-row tiny-gap align-center">
                        <p class="heading-medium font-weight-semibold">
                            <span id="compteur4">0</span>m<span class="text-color-green">+</span>
                        </p>
                        <p class="text-uppercase">
                            Revenus <br> générés 
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 01 -->
        <!-- ABOUT US -->
        <section class="section-spacing">
            <div class="section-wrapper">
                <div class="section-about-aboutus-content-wrapper display-grid-2col-1row medium-gap">
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
                        
                        <div class="display-grid-2col-1row small-gap">
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
            </div>
        </section>

        <!-- SECTION 02 -->
        <!-- VALUES CAROUSEL -->
        <section class="background-color-black section-spacing display-flex align-center flex-column">
            
            <div class="section-wrapper">

                    <!-- HEADING WRAPPER -->
                    <div class="wrapper display-flex flex-column small-gap align-center justify-center">
                        
                        <!-- ICON WRAPPER -->
                        <div class="wrapper">
                            <div class="icon orange">
                                <img class="image" src="content/SVG/icon-checkmark-roundedborder.svg">
                            </div>
                        </div>
                        
                        <div class="wrapper display-flex flex-row flex-nowrap flex-between huge-gap">
                            <div class="wrapper display-flex flex-column align-center justify-center tiny-gap">
                            
                                <!-- LABEL HEADING -->
                                <p class="text-uppercase text-size-small">
                                    <span class="icon-slash text-color-yellow">// </span>02 . Nos valeurs
                                </p> 

                                <!-- HEADING -->
                                <h2 class="heading-medium text-align-center">Les valeurs fondamentales qui sous-tendent notre travail</h2>
                          
                            </div>
                        </div>
                    </div>
            </div>

            <!-- <section id="carousel">
                <img src="./content/SVG/arrow_left.svg" alt="Left Carousel Arrow" class="arrow" id="left-arrow">
                <img src="./content/SVG/arrow_right.svg" alt="Right Carousel Arrow" class="arrow" id="right-arrow">
                <div class="slide-image" id="slide1">
                </div>
                <div class="slide-image" id="slide2">
                </div>
                <div class="slide-image" id="slide3">
                </div>
                <div class="slide-image" id="slide4">
                </div>
                <div class="slide-image" id="slide5">
                </div>
            </section> -->

            <!-- <div class="display-flex flex-row small-gap align-center margin-top-medium"> 
                <a class="button black small" href="">Contact</a>
                <a class="button white small display-flex align-center micro-gap" href="">Nos services <img src="./content/SVG/button-right-arrow.svg"></a>
            </div> -->

        </section>

        <!-- SECTION 03 -->
        <!-- OUR TEAM -->
        <section class="section-spacing display-flex justify-center">
            <div class="display-flex flex-column align-center normal-gap">
                
                <!-- HEADING WRAPPER -->
                <div class="wrapper display-flex flex-column small-gap align-center justify-center">
                        
                    <!-- ICON WRAPPER -->
                    <div class="wrapper">
                        <div class="icon purple">
                            <img class="image" src="content/SVG/icon-handshake.svg">
                        </div>
                    </div>
                    
                    <div class="wrapper display-flex flex-row x flex-between huge-gap">
                        <div class="wrapper display-flex flex-column align-center justify-center tiny-gap">
                        
                            <!-- LABEL HEADING -->
                            <p class="text-uppercase text-size-small">
                                <span class="icon-slash text-color-blue">// </span>03 . Notre équipe
                            </p> 

                            <!-- HEADING -->
                            <h2 class="heading-medium text-align-center">Notre équipe d’experts marketing</h2>
                        
                        </div>
                    </div>
                </div>

                <!-- CONTENT WRAPPER -->
                <div class="display-grid-3col-1row-111 small-gap">
                
                    <!-- CARD N°1 -->
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

                    <!-- CARD N°2 -->
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

                    <!-- CARD N°3 -->
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

        <!-- SECTION 04 -->
        <!-- OUR OFFICE -->
        <section class="background-gradient-blueToYellow-pastel section-spacing display-flex justify-center">
            <div class="section-wrapper">
                <div class="display-flex flex-column normal-gap">
                    
                    <!-- HEADING WRAPPER -->
                    <div class="heading-wrapper-1 wrapper display-flex small-gap ">

                        <!-- ICON WRAPPER -->
                        <div class="wrapper">
                            <div class="icon black">
                                <img class="image" src="content/SVG/icon-about-map-ping.svg">
                            </div>
                        </div>

                        <!-- HEADING WRAPPER -->
                        <div class="wrapper display-flex flex-row x flex-between huge-gap mobile-heading-wrapper">
                            <div class="wrapper display-flex flex-column">
                                
                                <!-- LABEL HEADING -->
                                <p class="text-uppercase text-size-small">
                                    <span class="icon-slash text-color-blue">// </span>04 . Nos bureaux
                                </p>  

                                <!-- HEADING -->
                                <h2 class="heading-medium">Venez nous rendre visite dans le monde entier le monde</h2>
                            
                            </div>

                            <!-- BUTTON WRAPPER -->
                            <div class="wrapper display-flex justify-end align-end">
                                <a class="button small black">Contact</a>
                            </div>

                        </div>
                    </div>

                    <!-- CONTENT WRAPPER -->
                    <div class="display-grid-3col-1row-111 small-gap">

                        <!-- CARD N°1 -->
                        <div class="wrapper background-color-white display-flex flex-column small-gap border-light grey padding-tiny border-radius-big">
                            <div class="display-flex flex-column tiny-gap">
                                <div><img src="./content/PNG/america.svg"></div>
                                
                                <h4 class="heading-tiny-small font-weight-semibold">San Francisco, USA</h4>
                                <p class="text-size-medium">1650 Page, San Francisco, </br>
                                                California(CA), 94117</p>
                                <div class="display-flex flex-raw micro-gap">
                                    <img src="./content/SVG/phone.svg">
                                    <p class="text-size-medium">(414) 809 - 2567</p>
                                </div>
                                <div class="display-flex flex-raw micro-gap">
                                    <img src="./content/SVG/letter.svg">
                                    <p class="text-size-medium">Contact@promote.com</p>
                                </div>
                            </div>                
                        </div>

                        <!-- CARD N°2 -->
                        <div class="wrapper background-color-white display-flex flex-column small-gap border-light grey padding-tiny border-radius-big">
                            <div class="display-flex flex-column tiny-gap">
                                <div><img src="./content/PNG/canada.svg"></div>
                                
                                <h4 class="heading-tiny-small font-weight-semibold">Toronto, CA</h4>
                                <p class="text-size-medium">1650 Page, San Francisco, </br>
                                                California(CA), 94117</p>
                                <div class="display-flex flex-raw micro-gap">
                                    <img src="./content/SVG/phone.svg">
                                    <p class="text-size-medium">(414) 809 - 2567</p>
                                </div>
                                <div class="display-flex flex-raw micro-gap">
                                    <img src="./content/SVG/letter.svg">
                                    <p class="text-size-medium">Contact@promote.com</p>
                                </div>
                            </div>                
                        </div>

                        <!-- CARD N°3 -->
                        <div class="wrapper background-color-white display-flex flex-column small-gap border-light grey padding-tiny border-radius-big">
                            <div class="display-flex flex-column tiny-gap">
                                <div><img src="./content/PNG/america.svg"></div>
                                
                                <h4 class="heading-tiny-small font-weight-semibold">San Francisco, USA</h4>
                                <p class="text-size-medium">1650 Page, San Francisco, </br>
                                                California(CA), 94117</p>
                                <div class="display-flex flex-raw micro-gap">
                                    <img src="./content/SVG/phone.svg">
                                    <p class="text-size-medium">(414) 809 - 2567</p>
                                </div>
                                <div class="display-flex flex-raw micro-gap">
                                    <img src="./content/SVG/letter.svg">
                                    <p class="text-size-medium">Contact@promote.com</p>
                                </div>
                            </div>                
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
    <script src="scripts/augment_stat.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
    <script src="js/caroussel.js"></script>
    <?php require 'api/footer.php' ?>
</body>
</html>