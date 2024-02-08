<?php
$bdd = new PDO('mysql:host=localhost;dbname=promote_cms;', 'root', '');
$allblogs = $bdd->query('SELECT * FROM cms_blog ORDER BY blog_id DESC');

if(isset($_GET['s']) AND !empty($_GET['s'])){
    $search = htmlspecialchars($_GET['s']);
    $blog_writting_datetime = $bdd->query('SELECT * FROM cms_blog ORDER BY blog_id DESC LIMIT 1');
    $blog_title = $bdd->query('SELECT * FROM cms_blog ORDER BY blog_id DESC LIMIT 1');
    $blog_desc = $bdd->query('SELECT * FROM cms_blog ORDER BY blog_id DESC LIMIT 1');
    $blog_blog_banner_img_url = $bdd->query('SELECT * FROM cms_blog ORDER BY blog_id DESC LIMIT 1');
    $blog_category = $bdd->query('SELECT * FROM cms_blog ORDER BY blog_id DESC LIMIT 1');

    $last_article_date = $blog_writting_datetime->fetch(PDO::FETCH_ASSOC);
    $last_article_title = $blog_title->fetch(PDO::FETCH_ASSOC);
    $last_article_desc = $blog_desc->fetch(PDO::FETCH_ASSOC);
    $last_article_img = $blog_desc->fetch(PDO::FETCH_ASSOC);
    $last_article_category = $blog_category->fetch(PDO::FETCH_ASSOC);
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="content/CSS/styleguide.css">
    <link rel="stylesheet" href="content/CSS/blog.css">
    <title>Document</title>
    <?php require 'api/css.php' ?>
</head>
<body>
    
<?php require 'api/header.php' ?>

<main>
    <section class="section-spacing ">

        <div class="display-flex flex-row">
            <div class="display-flex ">
                <div class="display-flex">
                    <a class="icon border-semidbold"></a>
                </div>
                <div class="display-flex flex-column margin-left-tiny">
                    <p class="text-uppercase text-size-small">
                        <span class="icon-slash text-color-blue">// </span>01 . ARTICLES
                    </p>
                    <h2 class="heading-medium">Consultez notre contenu sur le marketing de croissance</h2>
                </div>
            </div>

            <form method="GET">
                <div class="display-flex align-center justify-center small-gap">
                    <input class="input-recherche text-color-lightgrey border-semidbold" type="search" name="s" placeholder="Rechercher dans le blog" autocomplete="off">
                    <input class="button small button black" type="submit" name="search" value="Recherche">
                
                </div>
            </form>
        </div>


        <div class="display-flex background-color-yellow border-radius-light margin-top-medium">
            <table class="table">
                <div class=" text">

                    <div class="text-title">
                        <a class="border-light border-radius-big marketing"><?php echo $last_article_category['blog_category']; ?></a>
                        <h3 class="heading-micro title"><?php echo $last_article_date['blog_writting_datetime']; ?></h3>
                    </div>

                    <div class="text">
                        <h2 class="heading-tiny-small"><?php echo $last_article_title['blog_title']; ?></h2>
                        <p class="text-color-darkgrey"><?php echo $last_article_desc['blog_desc']; ?></p> 
                        
                    </div>
                    <div class="text">
                        <a class="button white small margin-top-tiny">En Savoir Plus</a>
                    </div>
                </div>
            </table>

            <div class="image">
                <img class="border-radius-medium" src="/content/blog-CMS/blog_banner_img_url" alt="Une réunion dans un bureau">
            </div>
        </table>

    
    </section>

    <section class="background-color-black section-spacing">

        <div class="newsletter-text">
            <h2 class="heading-large">Souscrivez à notre <span class="text-color-yellow">newsletter</span></h2>
        </div>
        <br>
        <div class="display-flex align-center justify-center small-gap">
            <input class="input-newletter text-color-lightgrey" type="email" placeholder="Entrez votre E-mail... " required>
            <a class="button small button yellow">Souscrire</a>
        </div>
    </section>

    <section class="section-spacing">

        <div class="display-flex flex-row jusitfy-between">
            <div class="">
                <h2 class="heading-medium">Derniers posts</h2>
                
            </div>
            <div class="">
                <a class="small button black">Tous</a>
                <a class="small button white">Croissance</a>
                <a class="small button white">Contenu</a>
                <a class="small button white">Réseaux</a>
            </div>
        </div>

    </section>

    

</main>

<?php require 'api/footer.php' ?>

</body>
</html>

