<?php 

require "Config.php";

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $email = $_POST["email"];
    $password = $_POST["password"];

    function secureDonnee($donnee){
        $donnee = trim($donnee);
        $donnee = stripslashes($donnee);
        $donnee = htmlspecialchars($donnee);

        return $donnee;
    }

    $email = secureDonnee($email);
    $password = secureDonnee($password);

    // Connexion à la base de données
    $servername = "mysql-promote-cms.alwaysdata.net";
    $username = "347331";
    $password = "3kzJ&@tCzKzd3JF7";
    $dbname = "promote-cms_bdd";

    $connexion = new mysqli($servername, $username, $password, $dbname);

    if (!$connexion) {
        die("Échec de la connexion : " . $connexion->connect_error);
    }

    // Requête pour obtenir le mot de passe correspondant à l'e-mail donné
    $query = "SELECT admin_id, admin_username, admin_email, admin_password FROM users WHERE admin_email = '$email'";
    $result = mysqli_query($connexion, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Utilisateur trouvé
        $row = mysqli_fetch_assoc($result);
        $storedPassword = $row['admin_password'];

        // Vérification du mot de passe
        if (password_verify($password, $storedPassword)) {

            session_start();
            $_SESSION['admin_id'] = $user['admin_id'];
            $_SESSION['admin_username'] = $user['admin_username'];
            // Redirige l'utilisateur vers une page sécurisée, par exemple :
            header("Location: /BO-CMS/index.php");
        exit();
    } else {
        // Mot de passe incorrect
        echo "Mot de passe incorrect.";
    }
} else {
    // Aucun utilisateur trouvé avec cet e-mail
    echo "Aucun utilisateur trouvé avec cet e-mail.";
}

// Ferme la connexion à la base de données
mysqli_close($connexion);
}

?>