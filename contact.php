<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="content/CSS/page_contact.css">

    <title>Page Contact</title>
    <?php require 'api/css.php' ?>
</head>
<body>
    <?php require 'api/header.php' ?>
    <main>
        <section class="section-spacing">
            <div class="wrapper display-flex flex-column align-center">
                <div class="wrapper">
                    <img src="content/SVG/Icon-contact.svg">
                </div>
                <div class="size-contact">
                <p class="text-uppercase text-size-small">
                    <span class="icon-slash text-color-blue">// </span>01 . Contactez nous
                </p>                </div>
                <h2 class="heading-medium text-align-center h2-size">Construisons ensemble quelque chose de génial</h2>
            </div>
            <div class="cards-wrapper margin-top-medium display-grid"> 
                <div class="card1 padding-tiny">
                    <div class="card-small padding-tiny display-flex flex-column align-left">
                        <p class="tag yellow heading-tiny-small">Contact</p>
                        <p class="divider margin-top-tiny"></p>
                        <div class="margin-top-tiny">
                            <div class="wrapper display-flex flex-row micro-gap">
                                <a class="icon-contact mail"></a>
                                <div class="wrapper display-flex flex-column">
                                     <h4 class="heading-tiny-small margin-left-reduce margin-top-reduce">E-Mail</h4>
                                     <p class="margin-left-reduce">contact@promote.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card2 padding-tiny">
                    <div class="card-small padding-tiny display-flex flex-column align-left">
                        <p class="tag yellow heading-tiny-small">Appel</p>
                        <p class="divider margin-top-tiny"></p>
                        <div class="margin-top-tiny">
                            <div class="wrapper display-flex flex-row micro-gap">
                                <a class="icon-contact tel"></a>
                                <div class="wrapper display-flex flex-column">
                                     <h4 class="heading-tiny-small">Téléphone</h4>
                                     <p>+33 4 79 36 53 84</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card3 padding-tiny">
                    <div class="card-small padding-tiny display-flex flex-column align-left">
                        <p class="tag yellow heading-tiny-small">Bureaux</p>
                        <p class="divider margin-top-tiny"></p>
                        <div class="margin-top-tiny">
                            <div class="wrapper display-flex flex-row micro-gap">
                                <a class="icon-contact map"></a>
                                <div class="wrapper display-flex flex-column">
                                     <h4 class="heading-tiny-small">Lieu</h4>
                                     <p>50, rue de Marseille, LYON</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-spacing">
            <form action="#.php">
                <div class="cards-wrapper display-flex flex-column align-center color-wrapper">
                    <div class="display-flex">
                        <div class="display-flex flex-column">
                            <h4 class="heading-micro font-weight-semibold margin-top-small">Nom Complet *</h4>
                            <div class="background-contact">
                                <input class="input-contact margin-top-tiny" type="text" name="username" placeholder="   John David">
                            </div>
                        </div>
                        <div class="display-flex flex-column margin-left-tiny">
                            <h4 class="heading-micro font-weight-semibold margin-top-small">Votre E-Mail *</h4>
                            <div class="background-contact">
                                <div class="">
                                    <input class="input-contact margin-top-tiny" type="email" name="email" placeholder="   email@gmail.com">                    

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="display-flex margin-top-tiny">
                        <div class="display-flex flex-column">
                            <h4 class="heading-micro font-weight-semibold margin-top-small">Société *</h4>
                            <input class="input-contact margin-top-tiny" type="text" placeholder="   Nom de votre société ici">
                        </div>
                        <div class="display-flex flex-column margin-left-tiny">
                            <h4 class="heading-micro font-weight-semibold margin-top-small">Sujet *</h4>
                            <input class="input-contact margin-top-tiny" type="text" placeholder="   Comment pouvons nous vous aider">
                        </div>

                    </div>

                    <div class="display-flex margin-top-tiny">
                        <div class="display-flex flex-column">
                            <h4 class="heading-micro font-weight-semibold">Message *</h4>
                            <textarea class="input-contact-message" placeholder="   Bonjour, je voudrais vous parler de ..."></textarea>
                        </div>
                    </div>
                    
                    <input class="button button black margin-top-small margin-bottom" type="submit" value="Envoyer Message">
                </div>
            </form>
        </section>

        <section class="">
            <div class="cards-wrapper-letter display-flex flex-column background-color-black">

            </div>
        </section>
    </main>
    <?php require 'api/footer.php' ?>
</body>
</html>