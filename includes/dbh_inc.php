<?php

$dsn = "mysql:host=mysql-databasetest.alwaysdata.net;dbname=databasetest_promoteddb";
$dbusername = "335454";
$dbpassword = "Tigrou2023";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed : " . $e->getMessage();
}