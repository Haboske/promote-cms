<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require 'api/css.php' ?>
    <link rel="stylesheet" href="content/CSS/service-cms.css">
</head>
<body>
    <?php require 'api/header.php' ?>
    <main>

        <!-- SECTION -01 -->
        <!-- WHITE CIRCLE BANNER -->
        <section class="section-white-circle-banner background-gradient-blueToYellow-pastel">
            <div class="white-circle-wrapper">
                    <!-- Texte non responsive -->
                    <h1 class="white-circle-heading heading-huge">Nos services</h1>
                    <img class ="white-circle-faded-pattern center-in-circle" src="./content/PNG/Pattern.svg">
            </div>
        </section>
            
        <!-- SECTION 01 -->
        <!-- SERVICES -->
        <section class="section-spacing background-color-black">
            <div class="section-wrapper">

                <!-- HEADING WRAPPER -->
                <div class="wrapper display-flex flex-column small-gap align-center justify-center">
                        
                    <!-- ICON WRAPPER -->
                    <div class="wrapper">
                        <div class="icon blue">
                            <img class="image" src="content/SVG/icon-setting.svg">
                        </div>
                    </div>

                    
                    <div class="wrapper display-flex flex-row flew-nowrap flex-between huge-gap">
                        <div class="wrapper display-flex flex-column align-center justify-center tiny-gap">
                        
                            <!-- LABEL HEADING -->
                            <p class="text-uppercase text-size-small">
                                <span class="icon-slash text-color-yellow">// </span>01 . Services
                            </p> 

                            <!-- HEADING -->
                            <h2 class="heading-medium text-align-center">Des services à fort impact pour faire passer votre entreprise au niveau suivant</h2>
                        
                        </div>
                    </div>
                </div>

                <!-- CONTENT WRAPPER -->
                <div class="wrapper display-grid-3col-2row margin-top-medium">
                    
                    <!-- CARD N°1 -->
                    <div class="card grid-child-1 background-gradient-softBlack padding-small display-flex flex-column small-gap">
                        
                        <!-- ICON WRAPPER -->
                        <div class="icon huge black">
                            <img class="image" src="content/PNG/services-chat-marketing.png">
                        </div>

                        <!-- CONTENT -->
                        <h3 class="heading-tiny-small">Marketing réseaux sociaux</h3>
                        <p>Lorem ipsum dolor sit amet, ea mundi malorum cum, ocurreret reprehendunt. </p>
                        <a class="button transparent margin-top-auto">Voir Plus ></a>
                    
                    </div>

                    <!-- CARD N°2 -->
                    <div class="card grid-child-2 background-gradient-softBlack padding-small display-flex flex-column small-gap">
                        
                        <!-- ICON WRAPPER -->
                        <div class="icon huge black">
                            <img class="image" src="content/PNG/services-megaphone.png">
                        </div>

                        <!-- CONTENT -->
                        <h3 class="heading-tiny-small">Publicité payée</h3>
                        <p>Lorem ipsum dolor sit amet, ea mundi malorum cum, ocurreret reprehendunt. </p>
                        <a class="button transparent margin-top-auto">Voir Plus ></a>
                    </div>

                    <!-- CARD N°3 -->
                    <div class="card grid-child-3 background-gradient-softBlack padding-small display-flex flex-column small-gap">
                        
                        <!-- ICON WRAPPER -->
                        <div class="icon huge black">
                            <img class="image" src="content/PNG/services-statistiques.png">
                        </div>
                        
                        <!-- CONTENT -->
                        <h3 class="heading-tiny-small">Analyses avancées</h3>
                        <p>Lorem ipsum dolor sit amet, ea mundi malorum cum, ocurreret reprehendunt. </p>
                        <a class="button transparent margin-top-auto">Voir Plus ></a>
                    </div>

                    <!-- CARD N°4 -->
                    <div class="card grid-child-4 background-gradient-softBlack padding-small display-flex flex-column small-gap">
                        
                        <!-- ICON WRAPPER -->
                        <div class="icon huge black">
                            <img class="image" src="content/PNG/services-startup.png">
                        </div>
                        
                        <!-- CONTENT -->
                        <h3 class="heading-tiny-small">SEO Optimisation</h3>
                        <p>Lorem ipsum dolor sit amet, ea mundi malorum cum, ocurreret reprehendunt. </p>
                        <a class="button transparent margin-top-auto">Voir Plus ></a>
                    </div>

                    <!-- CARD N°5 -->
                    <div class="card grid-child-5 background-gradient-softBlack padding-small display-flex flex-column small-gap">
                        
                        <!-- ICON WRAPPER -->
                        <div class="icon huge black">
                            <img class="image" src="content/PNG/services-medal.png">
                        </div>

                        <!-- CONTENT -->
                        <h3 class="heading-tiny-small">Tunnel Optimisation</h3>
                        <p>Lorem ipsum dolor sit amet, ea mundi malorum cum, ocurreret reprehendunt. </p>
                        <a class="button transparent margin-top-auto">Voir Plus ></a>
                    </div>

                    <!-- CARD N°6 -->
                    <div class="card grid-child-6 background-gradient-softBlack padding-small display-flex flex-column small-gap">
                        
                        <!-- ICON WRAPPER -->
                        <div class="icon huge black">
                            <img class="image" src="content/PNG/services-checklist.png">
                        </div>

                        <!-- CONTENT -->
                        <h3 class="heading-tiny-small">Marketing de contenu</h3>
                        <p>Lorem ipsum dolor sit amet, ea mundi malorum cum, ocurreret reprehendunt. </p>
                        <a class="button transparent margin-top-auto">Voir Plus ></a>
                    
                    </div>            
                </div>
            </div>
        </section>

        <section class="section-spacing">
            <div class="section-wrapper">
                <div class="service-cms-contact-content-wrapper display-grid-2col-1row-21 background-gradient-blueToYellow-pastel border-radius-medium padding-medium">
                    
                    <!-- LEFT PART -->
                    <div class="display-flex flex-column medium-gap">

                        <h2 class="heading-large">Contactez nous et <span class="text-color-blue">démarrez la croissance</span> avec nous</h2>

                        <!-- BUTTON WRAPPER -->
                        <div class="button-wrapper display-flex small-gap">
                            <a class="button black small">Contact</a>
                            <a class="button small transparent">Démarrer</a>
                        </div>

                    </div>

                    <!-- RIGHT PART -->
                    <div class="image-wrapper">

                        <img src="content/PNG/services-cms-contact-rocket.png" class="service-cms-contact-rocket">

                    </div>

                </div>
            </div>
        </section>

    </main>
    <?php require 'api/footer.php' ?>
</body>
</html>