<?php
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once "dbh_inc.php";
        $query = "DELETE FROM USERS WHERE username = :username AND pwd = :pwd";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);

        $stmt->execute(); // Plus besoin de fournir les valeurs ici

        // Facultatif : Vous pouvez vérifier si des lignes ont été affectées
        if ($stmt->rowCount() > 0) {
            echo "L'utilisateur a été supprimé avec succès.";
        } else {
            echo "Aucun utilisateur correspondant trouvé.";
        }

        // Optionnel : Vous pouvez rediriger l'utilisateur
        // header("Location: ../admin/login.php");

        // Vous pouvez terminer le script après la redirection
        // die();

    } catch (PDOException $e) {
        echo "Connection failed : " . $e->getMessage();
    } finally {
        // Assurez-vous de toujours fermer la connexion et le statement, même en cas d'exception
        $pdo = null;
        $stmt = null;
    }

} else {
    header("Location: ../admin/login.php");
}
?>
