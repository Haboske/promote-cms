<?php 

    // STARTING THE SESSION TO PUT DATA IN
    session_start();

    // INIT BASE URL TO CALL ON DIFFERENTS PHP PAGES
    global $base_url ;
    $base_url = $_SERVER['SERVER_NAME']."/BO-CMS/n";

    // CALL THE VUE CLASS
    require 'bo-cms-Vue.php';
    $vue = New Vue();

    require_once './librairies/Medoo.php';
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

    catch (Exception $e) {

        print("Error : ".$e);

    }


?>