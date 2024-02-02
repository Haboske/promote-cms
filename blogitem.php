<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Item</title>
    <?php require 'api/css.php' ?>
    <link rel="Stylesheet" href="content/CSS/blogitem.css">
</head>
<body>
    <?php require 'api/header.php' ?>
    <main>
        <section class ="section-spacing">
            <div class = "wrapper">
                <div class = "display-flex flex-row normal-gap align-center">
                    <label class="tag"> Marketing</label>
                    <p class ="text-uppercase letter-spacing-large font-weight-semibold">
                        <span> 1</span>
                        <span > Septembre,</span>
                        <span> 2022</span>
                    </p>
                </div>
                <h1 class="heading-large margin-top-tiny">
                Comment augmenter votre portée sur Twitter de plus de 200% avec cette simple astuce
                </h1>

            </div>
            <div class = "wrapper margin-top-small">
                <img src ="content/PNG/blogitem-banner.png" class="image-banner border-radius-big">

            </div>
            <div class = "wrapper margin-top-small display-flex align-center justify-between">
                <div class ="display-flex flex-row small-gap align-center">
                    <img src ="content/PNG/profilepicture.png" class ="icon">    

                    <div>
                        <h4 class ="heading-tiny-small">Natasha</h4>
                        <label class="heading-micro text-color-darkgrey">Responsable Marketing</label>
                    </div>

                </div>
                <div class =" display-flex flex-row align-center tiny-gap">
                        <a class="icon-social-insta" href="https://www.instagram.com/accounts/login/?next=%2Foasispc.gg%2Freel%2FCyw_ZVarGIB%2F&source=desktop_nav">
                             <img src ="content/PNG/social-insta">
                        </a>
                        <a class="icon-social-facebook" href="https://www.facebook.com/?locale=fr_FR">
                            <img src ="content/PNG/social-facebook">
                        </a>
                        <a class="icon-social-twiter" href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiN3oPA2IeEAxUqe6QEHfOdASwQFnoECA4QAQ&url=https%3A%2F%2Ftwitter.com%2Flogin&usg=AOvVaw3swNPrVfKaBGiX8TGfSpkN&cshid=1706706471330878&opi=89978449"> 
                            <img src ="content/PNG/social-twiter">
                        </a>
                </div>
            </div>
            <div class=" margin-top-small divider">
            </div>
        </section>
        <section class="section-spacing align-center ">
            <h1 class="heading-small"> Description du projet</h1>
        </section>
        <section class="section-spacing">
            <div class=" margin-top-small divider"> </div>
            <div class="display-flex flex-row margin-top-small justify-between">
                <div class=" align-center">
                    <label class="text-color-black"> Partager </label>
                </div>
                <div class =" display-flex flex-row align-center tiny-gap">
                    <a class="icon-social-insta" href="https://www.instagram.com/accounts/login/?next=%2Foasispc.gg%2Freel%2FCyw_ZVarGIB%2F&source=desktop_nav">
                        <img src ="content/PNG/social-insta">
                    </a>
                    <a class="icon-social-facebook" href="https://www.facebook.com/?locale=fr_FR">
                        <img src ="content/PNG/social-facebook">
                    </a>
                    <a class="icon-social-twiter" href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwiN3oPA2IeEAxUqe6QEHfOdASwQFnoECA4QAQ&url=https%3A%2F%2Ftwitter.com%2Flogin&usg=AOvVaw3swNPrVfKaBGiX8TGfSpkN&cshid=1706706471330878&opi=89978449"> 
                        <img src ="content/PNG/social-twiter">
                    </a>
                    <a class="icon-social-linkedin" href="https://fr.linkedin.com"> 
                        <img src ="content/PNG/social-linkedin">
                    </a>
                </div>
            </div>
            <div class=" margin-top-small divider"> 
            </div>
        </section>
    </main>
    <?php require 'api/footer.php' ?>
</body>
</html>