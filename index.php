<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require 'api/css.php' ?>
    <link rel="Stylesheet" href="content/CSS/homepage.css">
</head>
<body>
    <?php require 'api/header.php' ?>
    <main>

        <!-- SECTION 00 -->
        <!-- BANNER -->

        <section class="section-spacing">
            <div class="section-wrapper">
                <div class="homepage-heading-content-wrapper display-grid display-grid-2col-1row">
                    
                    <!-- HEADING/CONTENT WRAPPER -->
                    <div class="wrapper">
                        <p class="text-uppercase text-size-small">
                            <span class="icon-slash text-color-yellow">// </span>Agence Marketing
                        </p>  
                        <h1 class="heading-huge margin-top-tiny">Une agence <span class="text-color-blue">marketing</span>&nbsp; 100% digitale</h1>
                        <p class="margin-top-small">Lorem ipsum dolor sit amet, ea mundi malorum cum, ocurreret reprehendunt ius ex. Ut vis mazim erroribus forensibus.</p>
                        <div class="wrapper display-flex flex-row align-center tiny-gap margin-top-small">
                            <a class="button small black">Nos Services</a>
                            <a class="button small transparent">Démarrer</a>
                        </div>
                    </div>

                    <!-- IMAGES WRAPPER -->
                    <div class="wrapper display-flex justify-center align-center">
                        <img src="content/PNG/homepage-computer.png" class="homepage-computer">
                        <img src="content/PNG/homepage-megaphone.png" class="homepage-megaphone">
                        <img src="content/PNG/homepage-checkmark.png" class="homepage-checkmark">
                        <img src="content/PNG/homepage-target.png" class="homepage-target">
                    </div>

                </div>
            </div>
        </section>

        <!-- SECTION 01 -->
        <!-- SERVICES -->

        <section class="section-spacing background-color-black">
            <div class="section-wrapper">

                <!-- HEADING WRAPPER -->
                <div class="heading-wrapper-1 wrapper display-flex small-gap ">

                    <!-- ICON WRAPPER -->
                    <div class="wrapper">
                        <div class="icon blue">
                        </div>
                    </div>

                    <!-- HEADING WRAPPER -->
                    <div class="wrapper display-flex flex-row flew-nowrap flex-between huge-gap mobile-heading-wrapper">
                        <div class="wrapper display-flex flex-column">
                            
                            <!-- LABEL HEADING -->
                            <p class="text-uppercase text-size-small">
                                <span class="icon-slash text-color-yellow">// </span>01 . Services
                            </p>  

                            <!-- HEADING -->
                            <h2 class="heading-medium">Des services à fort impact pour faire passer votre entreprise au niveau supérieur</h2>
                        
                        </div>

                        <!-- BUTTON WRAPPER -->
                        <div class="wrapper display-flex justify-end align-end">
                            <a class="button small white">Nos services ></a>
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

        <!-- SECTION 02 -->
        <!-- A PROPOS -->

        <section class="section-spacing ">
            <div class="section-wrapper">
                <div class="homepage-about-content-wrapper wrapper display-grid-2col-1row">

                    <!-- IMAGE WRAPPER -->
                    <div class="image-wrapper grid-child-mobile-bottom">
                        <img src="./content/PNG/homepage-about-phone.png" class="section-main-image">
                        <img src="./content/PNG/main-image-background.png" class="section-main-image-background">
                    </div>

                    <!-- CONTENT WRAPPER -->
                    <div class=" wrapper display-flex flex-column grid-child-mobile-top">
                        
                        <!-- HEADING WRAPPER -->
                        <div class="heading-wrapper-1 wrapper display-flex small-gap ">
                            
                            <!-- ICON WRAPPER -->
                            <div class="wrapper">
                                <div class="icon yellow">
                                    <img class="image" src="content/SVG/icon-email.svg">
                                </div>
                            </div>

                            <div class="wrapper display-flex flex-row flew-nowrap flex-between huge-gap">
                                <div class="wrapper display-flex flex-column">

                                    <!-- LABEL HEADING -->
                                    <p class="text-uppercase text-size-small">
                                        <span class="icon-slash text-color-yellow">// </span>02 . A propos
                                    </p> 
                                    
                                    <!-- HEADING -->
                                    <h2 class="heading-medium">L’agence marketing #1 dans le digital</h2>
                                </div>
                            </div>
                        </div>

                        <!-- DIVIDER -->
                        <div class="divider margin-top-small"></div>

                        <!-- CONTENT -->
                        <p class="margin-top-small">Lorem Ipsum is simply dummy text of the printing and typesetting industry ftyuu Ipsum has been the industry's standard book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
                        
                        <!-- CONTENT WRAPPER -->
                        <div class="wrapper margin-left-medium margin-top-medium">

                            <!-- MESUREING JAVASCRIPT ELEMENT-->
                            <div class="mesureing-tape"></div>

                            <!-- CARD N°1 -->
                            <div class="wrapper display-flex flex-row tiny-gap">

                                <!-- ICON DIVIDER -->
                                <div class="icon white overflow-visible">
                                    
                                    <!-- DIVIDER -->
                                    <div class="divider homepage-about-dividers"></div>

                                    <!-- ICON IMAGE -->
                                    <img class="image" src="content/SVG/homepage-about-graph.svg">
                                </div>

                                <!-- CONTENT WRAPPER -->
                                <div class="wrapper">
                                    <h3 class="heading-tiny-small">Résultats garantis</h3>
                                    <p class="margin-top-small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>
                            </div>

                            <!-- CARD N°2 -->
                            <div class="wrapper display-flex flex-row tiny-gap margin-top-medium">

                                <!-- ICON DIVIDER -->
                                <div class="icon white overflow-visible">

                                    <!-- DIVIDER -->
                                    <div class="divider homepage-about-dividers"></div>

                                    <!-- ICON IMAGE -->
                                    <img class="image" src="content/SVG/homepage-about-graph.svg">
                                </div>

                                <!-- CONTENT WRAPPER -->
                                <div class="wrapper">
                                    <h3 class="heading-tiny-small">Une équipe d’experts à votre service</h3>
                                    <p class="margin-top-small">consectetur amet dolor sit comeneer ilremsilom dolce issilm acalrm leoinsion duycoqun consemleint lorem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 03 -->
        <!-- PROCEDURE -->

        <section class="section-spacing">
            <div class="section-wrapper">
                <div class="wrapper background-gradient-blueToYellow-pastel padding-large">

                    <!-- HEADING WRAPPER -->
                    <div class="wrapper display-flex flex-column small-gap align-center justify-center">
                        
                        <!-- ICON WRAPPER -->
                        <div class="wrapper">
                            <div class="icon black">
                                <img class="small-image" src="content/SVG/icon-ladder.svg">
                            </div>
                        </div>

                        
                        <div class="wrapper display-flex flex-row flew-nowrap flex-between huge-gap">
                            <div class="wrapper display-flex flex-column align-center justify-center tiny-gap">
                            
                                <!-- LABEL HEADING -->
                                <p class="text-uppercase text-size-small">
                                    <span class="icon-slash text-color-blue">// </span>03 . Procédure
                                </p> 

                                <!-- HEADING -->
                                <h2 class="heading-medium text-align-center">Un processus simple, mais <br> puissant et efficace</h2>
                            
                            </div>
                        </div>
                    </div>

                    <!-- CONTENT WRAPPER -->
                    <div class="homepage-process-wrapper wrapper padding-medium display-grid-1col-3row">

                        <!--  ROW 01 -->
                        <div class="homepage-process-card wrapper display-grid-3col-1row-212">
                            
                            <!-- CARD IMAGE WRAPPER -->
                            <div class="homepage-process-cards-image-wrapper wrapper display-flex justify-center align-end margin-top-small">
                                <img src="content/SVG/homepage-process-graph.svg" class="homepage-process-row-img">
                            </div>

                            <!-- CENTERED ICON WRAPPER -->
                            <div class="homepage-process-cards-icon-wrapper wrapper display-flex justify-center align-center">
                                <div class="icon white pink-stroke">
                                    <span class="heading-tiny">1</span>
                                </div>
                            </div>

                            <!-- CARD CONTENT -->
                            <div class="homepage-process-cards-content-wrapper wrapper display-flex flex-column justify-center tiny-gap">
                                <h3 class="heading-tiny-small">Plan marketing</h3>
                                <p>consectetur amet dolor sit comeneer ilremsilom dolce issilm acalrm </p>
                            </div>

                        </div>
                        
                        <!--  ROW 02 -->
                        <div class="homepage-process-card wrapper display-grid-3col-1row-212">
                            
                            <!-- CARD CONTENT -->
                            <div class="homepage-process-cards-content-wrapper wrapper display-flex flex-column justify-center align-end tiny-gap">
                                <h3 class="heading-tiny-small">Exécution du travail</h3>
                                <p class="text-align-end">consectetur amet dolor sit comeneer ilremsilom dolce issilm acalrm </p>
                            </div>

                            <!-- CENTERED ICON WRAPPER -->
                            <div class="homepage-process-cards-icon-wrapper wrapper display-flex justify-center align-center">
                                <div class="icon white pink-stroke">
                                    <span class="heading-tiny">2</span>
                                </div>
                            </div>

                            <!-- CARD IMAGE WRAPPER -->
                            <div class="homepage-process-cards-image-wrapper wrapper display-flex justify-center align-end margin-top-small">
                                <img src="content/SVG/homepage-process-todo.svg" class="homepage-process-row-img">
                            </div>

                        </div>

                        <!--  ROW 03 -->
                        <div class="homepage-process-card wrapper display-grid-3col-1row-212">
                            
                            <!-- CARD IMAGE WRAPPER -->
                            <div class="homepage-process-cards-image-wrapper wrapper display-flex justify-center align-end margin-top-small">
                                <img src="content/SVG/homepage-process-scale-up.svg" class="homepage-process-row-img">
                            </div>

                            <!-- CENTERED ICON WRAPPER -->
                            <div class="homepage-process-cards-icon-wrapper wrapper display-flex justify-center align-center">
                                <div class="icon white pink-stroke">
                                    <span class="heading-tiny">3</span>
                                </div>
                            </div>

                            <!-- CARD CONTENT -->
                            <div class="homepage-process-cards-content-wrapper wrapper display-flex flex-column justify-center tiny-gap">
                                <h3 class="heading-tiny-small">Croissance</h3>
                                <p>consectetur amet dolor sit comeneer ilremsilom dolce issilm acalrm </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 04 -->
        <!-- TEMOIGNAGES -->

        <section class="section-spacing">
            <div class="section-wrapper">

                <!-- HEADING WRAPPER -->
                <div class="heading-wrapper-1 wrapper display-flex small-gap ">

                    <!-- ICON WRAPPER -->
                    <div class="wrapper">
                        <div class="icon pink">
                            <img class="small" src="content/SVG/icon-chat.svg">
                        </div>
                    </div>
                    
                    <div class=" wrapper display-flex flex-row flew-nowrap flex-between huge-gap mobile-heading-wrapper">
                        <div class="wrapper display-flex flex-column">

                            <!-- LABEL HEADING -->
                            <p class="text-uppercase text-size-small">
                                <span class="icon-slash text-color-yellow">// </span>04 . Témoignages
                            </p>  

                            <!-- HEADING -->
                            <h2 class="heading-medium">Nous travaillons avec des clients de tous les secteurs</h2>
                        </div>

                        <!-- BUTTON WRAPPER -->
                        <div class="wrapper display-flex justify-end align-end">
                            <a class="button small white">Nos services ></a>
                        </div>
                        
                    </div>
                </div>

                <!-- HERE CODE CAROUSEL -->

            </div>
        </section>

        <!-- SECTION 05 -->
        <!-- ETUDE DE CAS -->

        <section class="section-spacing background-color-black">
            <div class="section-wrapper">
                <div class="wrapper display-flex flex-column medium-gap">

                    <!-- HEADING WRAPPER -->
                    <div class="heading-wrapper-1 wrapper display-flex small-gap ">
                        <div class="wrapper">

                            <!-- ICON WRAPPER -->
                            <div class="icon orange">
                                <img class="small" src="content/SVG/icon-frame.svg">
                            </div>

                        </div>
                        
                        <div class="wrapper display-flex flex-row flew-nowrap flex-between huge-gap mobile-heading-wrapper">
                            <div class="wrapper display-flex flex-column">

                                <!-- LABEL HEADING -->
                                <p class="text-uppercase text-size-small">
                                    <span class="icon-slash text-color-yellow">// </span>05 . étude de cas
                                </p>  

                                <!-- HEADING -->
                                <h2 class="heading-medium">1520 - Projet réalisé. Consultez notre dernière étude de cas sur l'agence de marketing</h2>
                            </div>

                            <!-- BUTTON WRAPPER -->
                            <div class="wrapper display-flex justify-end align-end">
                                <a class="button small white">Nos services ></a>
                            </div>
                        </div>
                    </div>

                    <!-- CONTENT WRAPPER -->
                    <div class="homepage-casestudy-content-wrapper wrapper display-grid-2col-1row">
                        <div class="display-flex flex-column small-gap justify-center">
                            
                            <!-- CARD N°1 -->
                            <div class="homepage-project-dropdown">
                                <h3 class="heading-tiny-small">Gestion des médias en ligne</h3>
                                <div class="icon black tiny">
                                    <img src="content/SVG/icon-arrow.svg" class="tiny-image">
                                </div>
                            </div>

                            <!-- CARD N°2 -->
                            <div class="homepage-project-dropdown selected">
                                <h3 class="heading-tiny-small">Gestion des médias en ligne</h3>
                                <div class="icon black tiny">
                                    <img src="content/SVG/icon-arrow.svg" class="tiny-image">
                                </div>
                            </div>

                            <!-- CARD N°3 -->
                            <div class="homepage-project-dropdown">
                                <h3 class="heading-tiny-small">Gestion des médias en ligne</h3>
                                <div class="icon black tiny">
                                    <img src="content/SVG/icon-arrow.svg" class="tiny-image">
                                </div>
                            </div>
                        </div>

                        <!-- IMAGE WRAPPER -->
                        <div class="image-wrapper background-gradient-blueToYellow border-radius-medium padding-medium">
                            <img src="content/JPG/homepage-projects-keyboard.jpg" class="homepage-project-image">
                        </div>

                    </div>
                    <div class="divider margin-top-small"></div>
                    <!-- PLACE STATS HERE -->
                </div>
            </div>
        </section>
        
        <!-- SECTION 06 -->
        <!-- PRICING  -->
        <section class="section-spacing">
            <div class="section-wrapper">
                <div class="wrapper display-flex flex-column jusitfy-center">

                    <!-- SECTION HEADING -->
                    <div class="wrapper display-flex flex-column small-gap align-center justify-center">
                        <div class="wrapper">

                            <!-- ICON WRAPPER -->
                            <div class="icon yellow">
                                <img class="small-image" src="content/SVG/icon-dollar.svg">
                            </div>

                        </div>
                        <div class="wrapper display-flex flex-row flew-nowrap flex-between huge-gap">
                            <div class="wrapper display-flex flex-column align-center justify-center tiny-gap">
                                
                                <!-- LABEL HEADING -->
                                <p class="text-uppercase text-size-small">
                                    <span class="icon-slash text-color-blue">// </span>06 . Prix & forfaits
                                </p> 
                                
                                <!-- HEADING -->
                                <h2 class="heading-medium text-align-center">Notre offre flexible de forfaits</h2>
                            </div>
                        </div>
                    </div>

                    <!-- CARDS WRAPPER -->
                    <div class="wrapper display-grid-3col-1row-111 tiny-gap margin-top-small">

                        <!-- CARD N°1 -->
                        <div class="wrapper grid-child-2 display-flex flex-column small-gap background-color-grey border-radius-medium padding-small border-light grey">
                            
                            <!-- CARD HEADING WRAPPER -->
                            <div class="wrapper display-flex flex-row small-gap">
                                <div class="image-wrapper margin-top-tiny">
                                    <img class="image-tiny" src="content/PNG/homepage-pricing-setting.png">
                                </div>
                                <div class="wrapper display-flex flex-column">
                                    <h3 class="heading-tiny-small font-weight-bold">Light</h3>
                                    <p class="text-nowrap"><span class="homepage-pricing-price">€29</span> &nbsp; /Par mois</p>
                                </div>    
                            </div>

                            <!-- DIVIDER -->
                            <div class="divider margin"></div>

                            <!-- ADVANTAGES LIST WRAPPER -->
                            <div class="display-flex flex-column tiny-gap text-color-darkgrey margin-top-tiny">
                                <p><img class="image-tiny-icon" src="content/SVG/homepage-pricing-checkmark.svg"> &nbsp; Email Marketing Content</p>
                                <p><img class="image-tiny-icon" src="content/SVG/homepage-pricing-checkmark.svg"> &nbsp; Email Marketing Voice</p>
                                <p><img class="image-tiny-icon" src="content/SVG/homepage-pricing-checkmark.svg"> &nbsp; Optimisation SEO</p>
                                <p><img class="image-tiny-icon" src="content/SVG/homepage-pricing-cross.svg"> &nbsp; Consulting Video </p>
                                <p><img class="image-tiny-icon" src="content/SVG/homepage-pricing-cross.svg"> &nbsp; Publicité</p>
                            </div>

                            <!-- CHOICE BUTTON -->
                            <a href="#" class="button black margin-top-tiny">Je Choisis Light</a>
                        </div> 

                        <!-- CARD N°2 -->
                        <div class="wrapper grid-child-1 display-flex flex-column small-gap background-color-black border-radius-medium padding-small">
                            
                            <!-- CARD HEADING WRAPPER -->
                            <div class="wrapper display-flex flex-row small-gap">
                                <div class="image-wrapper margin-top-tiny">
                                    <img class="image-tiny" src="content/PNG/homepage-pricing-setting.png">
                                </div>
                                <div class="wrapper display-flex flex-column">
                                    <h3 class="heading-tiny-small font-weight-bold">Medium</h3>
                                    <p class="text-nowrap"><span class="homepage-pricing-price">€49</span> &nbsp; /Par mois</p>
                                </div>    
                            </div>

                            <!-- DIVIDER -->
                            <div class="divider margin"></div>

                            <!-- ADVANTAGES LIST WRAPPER -->
                            <div class="display-flex flex-column tiny-gap margin-top-tiny">
                                <p><img class="image-tiny-icon" src="content/SVG/homepage-pricing-checkmark.svg"> &nbsp; Email Marketing Content</p>
                                <p><img class="image-tiny-icon" src="content/SVG/homepage-pricing-checkmark.svg"> &nbsp; Email Marketing Voice</p>
                                <p><img class="image-tiny-icon" src="content/SVG/homepage-pricing-checkmark.svg"> &nbsp; Optimisation SEO</p>
                                <p><img class="image-tiny-icon" src="content/SVG/homepage-pricing-checkmark.svg"> &nbsp; Consulting Video </p>
                                <p><img class="image-tiny-icon" src="content/SVG/homepage-pricing-cross.svg"> &nbsp; Publicité</p>
                            </div>

                            <!-- CHOICE BUTTON -->
                            <a href="#" class="button white margin-top-tiny">Je Choisis Medium</a>
                        </div>  

                        <!-- CARD N°3 -->
                        <div class="wrapper grid-child-3 display-flex flex-column small-gap background-color-grey border-radius-medium padding-small border-light grey">
                            
                            <!-- CARD HEADING WRAPPER -->
                            <div class="wrapper display-flex flex-row small-gap">
                                <div class="image-wrapper margin-top-tiny">
                                    <img class="image-tiny" src="content/PNG/homepage-pricing-setting.png">
                                </div>
                                <div class="wrapper display-flex flex-column">
                                    <h3 class="heading-tiny-small font-weight-bold">Light</h3>
                                    <p class="text-nowrap"><span class="homepage-pricing-price">€29</span> &nbsp; /Par mois</p>
                                </div>    
                            </div>

                            <!-- DIVIDER -->
                            <div class="divider margin"></div>

                            <!-- ADVANTAGES LIST WRAPPER -->
                            <div class="display-flex flex-column tiny-gap text-color-darkgrey margin-top-tiny">
                                <p><img class="image-tiny-icon" src="content/SVG/homepage-pricing-checkmark.svg"> &nbsp; Email Marketing Content</p>
                                <p><img class="image-tiny-icon" src="content/SVG/homepage-pricing-checkmark.svg"> &nbsp; Email Marketing Voice</p>
                                <p><img class="image-tiny-icon" src="content/SVG/homepage-pricing-checkmark.svg"> &nbsp; Optimisation SEO</p>
                                <p><img class="image-tiny-icon" src="content/SVG/homepage-pricing-checkmark.svg"> &nbsp; Consulting Video </p>
                                <p><img class="image-tiny-icon" src="content/SVG/homepage-pricing-checkmark.svg"> &nbsp; Publicité</p>
                            </div>

                            <!-- CHOICE BUTTON -->
                            <a href="#" class="button black margin-top-tiny">Je Choisis Light</a>
                        </div>       
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 07 -->
        <!-- ADVANTAGES -->

        <section class="section-spacing ">
            <div class="section-wrapper">
                <div class="homepage-advantages-content-wrapper wrapper display-grid-2col-1row">
                    <div class="wrapper display-flex flex-column medium-gap">

                        <!-- HEADING WRAPPER -->
                        <div class="heading-wrapper-1 wrapper display-flex small-gap">
                            <div class="wrapper">

                                <!-- ICON WRAPPER -->
                                <div class="icon violet">
                                    <img class="image" src="content/SVG/icon-star.svg">
                                </div>

                            </div>

                            <div class="wrapper display-flex flex-row flew-nowrap flex-between huge-gap">
                                <div class="wrapper display-flex flex-column">

                                    <!-- LABEL HEADING -->
                                    <p class="text-uppercase text-size-small">
                                        <span class="icon-slash text-color-yellow">// </span>07 . Bénéfices
                                    </p>  
                                
                                    <!-- HEADING -->
                                    <h2 class="heading-medium">L’agence marketing #1 dans le digital</h2>
                                </div>
                            </div>
                        </div>

                        <!-- SECTION IMAGES -->
                        <div class="image-wrapper display-flex justify-end align-end">
                            <img src="./content/PNG/homepage-advantages-computer.png" class="section-main-image">
                            <img src="./content/PNG/homepage-advantages-background.png" class="homepage-advantages-background">
                        </div>

                    </div>

                    <!-- CONTENT WRAPPER -->
                    <div class="wrapper display-flex flex-column">
                        <div class="wrapper margin-left-medium margin-top-medium">

                            <div class="mesureing-tape"></div>

                            <!-- CARD 1 -->
                            <!-- RANKINGS -->

                            <div class="wrapper display-flex flex-row tiny-gap">
                                
                                <!-- ICON DIVIDER -->
                                <div class="icon white overflow-visible">
                                    <div class="divider homepage-about-dividers"></div>
                                    <img class="medium-image" src="content/SVG/homepage-advantages-ranking.svg">
                                </div>

                                <!-- CARD CONTENT -->
                                <div class="wrapper">
                                    <h3 class="heading-tiny-small">Page Rankings</h3>
                                    <p class="margin-top-small">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                </div>

                            </div>

                            <!-- CARD 2 -->
                            <!-- OPTIMISATION -->

                            <div class="wrapper display-flex flex-row tiny-gap margin-top-medium">
                                
                                <!-- ICON DIVIDER -->
                                <div class="icon white overflow-visible">
                                    <div class="divider homepage-about-dividers"></div>
                                    <img class="medium-image" src="content/SVG/homepage-advantages-optimisation.svg">
                                </div>

                                <!-- CARD CONTENT -->
                                <div class="wrapper">
                                    <h3 class="heading-tiny-small">Site Optimisation</h3>
                                    <p class="margin-top-small">consectetur amet dolor sit comeneer ilremsilom dolce issilm acalrm leoinsion duycoqun consemleint lorem.</p>
                                </div>

                            </div>

                            <!-- CARD ANALYSIS -->
                            <!-- OPTIMISATION -->

                            <div class="wrapper display-flex flex-row tiny-gap margin-top-medium">
                                
                                <!-- ICON DIVIDER -->
                                <div class="icon white overflow-visible">
                                    <div class="divider homepage-about-dividers"></div>
                                    <img class="medium-image" src="content/SVG/homepage-advantages-cheesegraph.svg">
                                </div>

                                <!-- CARD CONTENT -->
                                <div class="wrapper">
                                    <h3 class="heading-tiny-small">Reporting & Analyses</h3>
                                    <p class="margin-top-small">consectetur amet dolor sit comeneer ilremsilom dolce issilm acalrm leoinsion duycoqun consemleint lorem.</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 08 -->
        <!-- BLOG ARTICLES -->
        <section class="section-spacing">
            <div class="section-wrapper">
                <div class="divider"></div>

                <div class="display-flex flex-column medium-gap margin-top-huge">

                    <!-- SECTION HEADING -->
                    <div class="wrapper display-flex flex-column small-gap align-center justify-center">
                        
                        <!-- ICON -->
                        <div class="wrapper">
                            <div class="icon green">
                                <img class="image" src="content/SVG/icon-sheets.svg">
                            </div>
                        </div>

                        <div class="wrapper display-flex flex-row flew-nowrap flex-between huge-gap">
                            <div class="wrapper display-flex flex-column align-center justify-center tiny-gap">
                                
                                <!-- LABEL HEADING -->
                                <p class="text-uppercase text-size-small">
                                    <span class="icon-slash text-color-blue">// </span>08 . Articles
                                </p>  

                                <!-- HEADING -->
                                <h2 class="heading-medium text-align-center">Parcourez notre contenu sur la croissance <br> marketing</h2>
                            </div>
                        </div>
                    </div>

                    <!-- BLOG CARDS WRAPPER -->
                    <div class="wrapper display-grid-1col-2row">

                        <!-- CARD N°1 -->
                        <div class="wrapper display-grid-2col-1row padding-medium background-color-yellow border-radius-medium">

                            <!-- CONTENT WRAPPER -->
                            <div class="wrapper display-flex flex-column justify-between small-gap">

                                <!-- CARD INFOS -->
                                <div class = "wrapper display-flex flex-row justify-between normal-gap align-center">
                                    <label class="tag">Marketing</label>
                                    <p class ="text-uppercase letter-spacing-large font-weight-semibold">
                                        <span> 1</span>
                                        <span > Septembre,</span>
                                        <span> 2022</span>
                                    </p>
                                </div>

                                <!-- CARD TEXT -->
                                <div class="wrapper display-flex flex-column small-gap">
                                    <h3 class="heading-tiny-small">Comment augmenter votre portée sur Twitter de plus de 200 % grâce à cette astuce simple</h3>
                                    <p>Tincidunt donec vulputate ipsum erat urna auctor. Eget phasellus ideirs.adipiscing elit. Tincidunt donec vulputate ipsum erat urna auctor. </p>
                                </div>

                                <!-- BUTTON -->
                                <div class="wrapper display-flex flex-start">
                                    <a href="#" class="button small white">Voir Plus ></a>
                                </div>

                            </div>

                            <!-- IMAGE WRAPPER -->
                            <div class="image-wrapper">
                                <img src="content/PNG/homepage-blog-1.png" class="homepage-project-image">
                            </div>

                        </div>

                        <!-- CARD N°2 -->
                        <div class="wrapper display-grid-2col-1row padding-medium background-color-blue border-radius-medium">

                            <!-- IMAGE WRAPPER -->
                            <div class="image-wrapper">
                                <img src="content/PNG/homepage-blog-2.png" class="homepage-project-image">
                            </div>

                            <!-- CONTENT WRAPPER -->
                            <div class="wrapper display-flex flex-column justify-between small-gap">

                                <!-- CARD INFOS -->
                                <div class = "wrapper display-flex flex-row justify-between normal-gap align-center">
                                    <label class="tag">Content</label>
                                    <p class ="text-uppercase letter-spacing-large font-weight-semibold">
                                        <span> 1</span>
                                        <span > Septembre,</span>
                                        <span> 2022</span>
                                    </p>
                                </div>

                                <!-- CARD TEXT -->
                                <div class="wrapper display-flex flex-column small-gap">
                                    <h3 class="heading-tiny-small">Comment demander des articles à des invités pour accroître votre autorité en matière de référencement ?</h3>
                                    <p>Tincidunt donec vulputate ipsum erat urna auctor. Eget phasellus ideirs.adipiscing elit. Tincidunt donec vulputate ipsum erat urna auctor. </p>
                                </div>

                                <!-- BUTTON -->
                                <div class="wrapper display-flex flex-start">
                                    <a href="#" class="button small white">Voir Plus ></a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- BUTTON WRAPPER -->
                    <div class="wrapper display-flex justify-center align-center">
                        <a class="button black small">Plus D'articles ></a>
                    </div>

                </div>  
            </div>
        </section>
    </main>

    <!-- INTEGRATION FOOTER -->
    <?php require 'api/footer.php' ?>

    <!-- LOADING SCRIPTS -->
    <?php require 'api/footer-scripts.php' ?>
    <script src="scripts/homepage.js"></script>

</body>
</html>
