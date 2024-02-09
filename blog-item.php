<!DOCTYPE html>
<html lang="en">
<head>
    <?php require 'api/config.php' ?>
    <?php 
    
        if(isset($_GET['id']))
        {
            $data = $database -> select('cms_blog','*',[
                "blog_id" => $_GET['id']
            ]);
        }
    
    
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data[0]['blog_title']; ?></title>
    <?php require 'api/css.php' ?>
    <link rel="Stylesheet" href="content/CSS/blogitem.css">
</head>
<body>
    <?php require 'api/header.php' ?>
    
    <main>
        <section class ="section-spacing">
            <div class = "wrapper">
                <div class = "display-flex flex-row normal-gap align-center">
                    <label class="tag"> <?php echo $data[0]['blog_category']; ?></label>
                    <p class ="text-uppercase letter-spacing-large font-weight-semibold">
                        <?php echo rewriteDatetime($data[0]['blog_writting_datetime']); ?>
                    </p>
                </div>
                <h1 class="heading-large margin-top-tiny">
                <?php echo $data[0]['blog_title']; ?>
                </h1>

            </div>
            <div class = "wrapper margin-top-small">
                <img src ="<?php echo $data[0]['blog_banner_img_url']; ?>" class="image-banner border-radius-big">

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
            <h1 class="heading-small"> <?php echo $data[0]['blog_richtext_content']; ?></h1>
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