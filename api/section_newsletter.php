
<?php require 'config.php'; ?>

<section class="background-color-black section-spacing">
    <div class="newsletter-text justify-center">
        <h2 class="heading-large">Souscrivez à notre <span class="text-color-yellow">newsletter</span></h2>
    </div>
    <br>
    <form method="POST" class="display-flex align-center justify-center small-gap">
        <input class="input-newletter text-color-lightgrey" type="email" name="email" placeholder="Entrez votre E-mail... " required>
        <input class="button small button yellow" name="ok" value="M'inscrire" type="submit">
    </form>
</section>

<?php


    if(isset($_POST['ok'])){

        var_dump($_POST);

        $email = $_POST['email'];

        $database -> insert('cms_newsletter',[
            "newsletter_email" => htmlspecialchars($email),
            "newsletter_is_active" => 1
        ]);
        
    }

?>
