<?php
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "dbh_inc.php";

        $query = "UPDATE USERS SET username = :username, 
        pwd =:pwd, email = :email WHERE id = 2;";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);

        $stmt->execute([$username, $pwd, $email]);

        $pdo = null;
        $stmt = null;

        header("Location: ../admin/login.php");

        die();

    } catch (PDOException $e) {
        die("Connection failed : " . $e->getMessage());
    }

} else {
    header("Location: ../admin/login.php");
}
