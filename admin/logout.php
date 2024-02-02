<?php
session_start();
$_SESSION = array();
session_destroy();
echo "Session fermee"; 
header('Location: identifyer.php');

?>