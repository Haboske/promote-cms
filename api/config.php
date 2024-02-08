<?php 

    session_start();

    global $base_url ;
    $front_url = $_SERVER['SERVER_NAME'];

    require_once 'Medoo.php';
    use Medoo\Medoo;

    try{
        $database = new Medoo([
            'type' => 'mysql',
            'host' => 'mysql-promote-cms.alwaysdata.net',
            'database' => 'promote-cms_bdd',
            'username' => '347331',
            'password' => '3kzJ&@tCzKzd3JF7'
        ]);
    }

    catch(PDOException $e){
        echo "Erreur : ".$e->getMessage();
    }


?>