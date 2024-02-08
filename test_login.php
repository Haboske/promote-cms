<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
        <main>

            <form method="POST" action="test_connexion_bdd.php">
                <label for="email">Votre e-mail *</label>
                <input type="mail" id="email" name="email" placeholder="Entrez votre mail ..." required>
                <br />
                <label for="pass">Votre mot de passe *</label>
                <input type="password" id="pass" name="pwd" placeholder="Entrez votre mot de passe ..." required>
                <br />
                <input type="submit" value="Me connecter" name="ok">
            </form>
</body>
</html>