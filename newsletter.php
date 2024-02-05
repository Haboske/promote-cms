<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
    <style>
        input{
            margin-bottom:10px;
        }

        label,
        input{
            margin-left:10px;
        }
        p{
            display: flex;
        }
    </style>
    <?php require 'api/css.php' ?>
</head>
<body>
    <?php require 'api/header.php' ?>
    <main>

        <form method="POST" action="traitement.php">
            <label for="lastname">Votre nom *</label>
            <input type="text" id="lastname" name="lastname" placeholder="Entrez votre nom ..." required>
            <br />
            <label for="firstname">Votre prénom *</label>
            <input type="text" id="firstname" name="firstname" placeholder="Entrez votre prénom ..." required>
            <br />
            <label for="pseudo">Votre pseudo *</label>
            <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo ..." required>
            <br />
            <label for="email">Votre e-mail *</label>
            <input type="mail" id="email" name="email" placeholder="Entrez votre mail ..." required>
            <br />
            <label for="pass">Votre mot de passe *</label>
            <input type="password" id="pass" name="pass" placeholder="Entrez votre mot de passe ..." required>
            <br />
            <input type="submit" value="M'inscrire" name="ok">
        </form>



    </main>
    <?php require 'api/footer.php' ?>
</body>
</html>