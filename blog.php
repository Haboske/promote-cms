<?php
$bdd = new PDO('mysql:host=mysql-promote-cms.alwaysdata.net;dbname=promote-cms_bdd;', '347331', '3kzJ&@tCzKzd3JF7');
$allblogs = $bdd->query('SELECT * FROM cms_blog ORDER BY blog_id DESC LIMIT 5');
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
// if(isset($_GET['s']) AND !empty($_GET['s'])){
//     $search = htmlspecialchars($_GET['s']);
// }

$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';
if (empty($searchTerm)) {
    $query = $bdd->query("SELECT * FROM cms_blog ORDER BY blog_id DESC LIMIT 1");
} else {
    $query = $bdd->prepare("SELECT * FROM cms_blog WHERE blog_title LIKE :searchTerm ORDER BY blog_id DESC LIMIT 1");
    $query->execute(array(':searchTerm' => '%' . $searchTerm . '%'));
}

$blog = $query->fetch(PDO::FETCH_ASSOC);

?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="content/CSS/styleguide.css">
    <link rel="stylesheet" href="content/CSS/blog.css">
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
                    <form method="GET" action="">
                        <input class="input-recherche text-color-lightgrey border-semidbold" type="search" name="search" placeholder="Rechercher dans le blog..." autocomplete="off">
                        <button class="button small button black" type="submit">Recherche</button>
                    </form>
                </div>  
        </div>


        <div class="display-flex background-color-yellow border-radius-light margin-top-medium">
            <table class="table">
                <div class=" text">

                    <div class="text-title">
                    <?php 
                        if ($blog) {
                            echo "<a class='border-light border-radius-big marketing'>".$blog['blog_category']."</a>";
                            echo "<p class='heading-micro title'>".$blog['blog_writting_datetime']."</p>";
                        }
                    ?>
                    </div>

                    <div class="text">
                    <?php                    
                        if ($blog) {
                        echo "<h2 class='heading-tiny-small'>".$blog['blog_title']."</h2>";
                        echo "<p class='text-color-darkgrey'>".$blog['blog_desc']."</p>";
                        } else {
                        echo "Aucun blog trouvé.";
                        }
                        ?>
                        
                    </div>

                    <div class="text">
                        <a class="button white small margin-top-tiny">En Savoir Plus</a>
                    </div>
                </div>
            </table>

            <div class="image">
            <?php                    
                if ($blog) {
                echo "<img class='border-radius-medium' src='".$blog['blog_banner_img_url']."' alt='Image du blog'>";
                }
            ?>

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
                <form method="post">
                    <button type="submit" name="tous" class="small button <?php if(isset($_POST['tous']) || (!isset($_POST['marketing']) && !isset($_POST['services']) && !isset($_POST['seo']))){echo "black";}else{echo "white";}?>">Tous</button>                    
                    <button type="submit" name="marketing" class="small button <?php if(isset($_POST['marketing'])){echo "black";}else{echo "white";}?>">Marketing</a>
                    <button type="submit" name="services" class="small button <?php if(isset($_POST['services'])){echo "black";}else{echo "white";}?>">Services</button>
                    <button type="submit" name="seo" class="small button <?php if(isset($_POST['seo'])){echo "black";}else{echo "white";}?>">SEO</button>
                </form>
                <?php

?>

        <div class="display-flex background-color-yellow border-radius-light margin-top-medium">
            <table class="table">
                <div class=" text">

                <div id="blogsContainer" class="">
                    <?php
                    if(isset($_POST['tous'] )|| (!isset($_POST['marketing']) && !isset($_POST['services']) && !isset($_POST['seo']))) {
                        $query = $bdd->prepare("SELECT * FROM cms_blog ORDER BY blog_id DESC LIMIT 5");
                        $query->execute();
                        $articles = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach($articles as $article) {
                            echo "<h2>".$article['blog_title']."</h2>";
                            echo "<p>".$article['blog_desc']."</p>";
                            echo "<p> Date de parution : ".$article['blog_writting_datetime']."</p>";
                        }
                    } 
                    if(isset($_POST['marketing'])) {
                        $query = $bdd->prepare("SELECT * FROM cms_blog WHERE blog_category = 'Marketing' ORDER BY blog_id DESC LIMIT 5");
                        $query->execute();
                        $articles = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach($articles as $article) {
                            echo "<h2>".$article['blog_title']."</h2>";
                            echo "<p>".$article['blog_desc']."</p>";
                            echo "<p> Date de parution : ".$article['blog_writting_datetime']."</p>";
                        }
                    }
                    if(isset($_POST['services'])) {
                        $query = $bdd->prepare("SELECT * FROM cms_blog WHERE blog_category = 'Services' ORDER BY blog_id DESC LIMIT 5");
                        $query->execute();
                        $articles = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach($articles as $article) {
                            echo "<h2>".$article['blog_title']."</h2>";
                            echo "<p>".$article['blog_desc']."</p>";
                            echo "<p> Date de parution : ".$article['blog_writting_datetime']."</p>";
                        }
                    }
                    if(isset($_POST['seo'])) {
                        $query = $bdd->prepare("SELECT * FROM cms_blog WHERE blog_category = 'SEO' ORDER BY blog_id DESC LIMIT 5");
                        $query->execute();
                        $articles = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach($articles as $article) {
                            echo "<h2>".$article['blog_title']."</h2>";
                            echo "<p>".$article['blog_desc']."</p>";
                            echo "<p> Date de parution : ".$article['blog_writting_datetime']."</p>";
                        }
                    }
                    
                    
                    ?>
                </div>
                        
                </div>
            </table>
        </div>

    </section>

    

</main>

<?php require 'api/footer.php' ?>

</body>
</html>

