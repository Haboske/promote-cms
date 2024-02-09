<?php 

    ## HERE WE ARE IN THE CONTROLLER
    ## WE CHECK EVERY PARAMETER THAT ARE IN THE URL THANKS TO GET
    ## AND DEPENDING ON PARAMETERS WE DISPLAY THE CONTENT WE NEED BY CALLING THE CMS OBJECT

    if(isset($_GET['e-commerce'])){

    }

    if(isset($_GET['cms'])){

        require 'bo-cms-CMS.php';
        # CLASS COMING FROM api/bo-cms-CMS.php
        $cms = new CMS();

        if(isset($_GET['cat'])){

            switch($_GET['cat']){

                # WE WANT TO DISPLAY THE LIST OF THE ACTUAL CMS CATEGORY
                case "list":
                    $cms -> display_List($_GET['cms']);
                    break;

                # WE WANT TO DISPLAY THE FORM THAT WILL ALLOW US TO CREATE A NEW ITEM
                case "new":
                    $cms -> newItem($_GET['cms']);
                    break;
                
                # WE INSERT THE NEW ITEM IN DB
                case "send_newitem":
                    $cms -> newDB($_GET['cms'],$_POST,$_FILES);
                    break;

                # WE WANT TO DISPLAY THE FORM THAT ALLOW US TO UPDATE AN ITEM
                case "update":
                    $cms -> updateItem($_GET['cms'],$_GET['id']);
                    break;

                # WE UPDATE THE BDD WITH AN UPDATE WHEN THE USER SENT THE UPDATE FORM
                case "send_update":
                    $cms -> updateDB($_GET['cms'],$_POST,$_FILES);
                    break;

                case "delete":
                    $cms -> deleteItem($_GET['cms'],$_GET['id']);
                    break;

                case "send_drop":
                    $cms -> dropDB($_GET['cms'],$_POST);
                    break;

                }

        } 

        

    }


?>