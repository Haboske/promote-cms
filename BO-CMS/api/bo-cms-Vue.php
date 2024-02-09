<?php 
    class Vue{
        
        function display_Current_Nav_Icon(){

            if (isset($_GET['e-commerce'])){
                print('/BO-CMS/content/SVG/icon-coin-current.svg');
            }
            else if (isset($_GET['newsletter'])){
                print('/BO-CMS/content/SVG/icon-mail-current.svg');
            }
            else if (isset($_GET['cms'])){
                print('/BO-CMS/content/SVG/icon-writting-current.svg');
            }
            else if (isset($_GET['pages'])){
                print('/BO-CMS/content/SVG/icon-code-current.svg');
            }
            else {
                print('/BO-CMS/content/SVG/icon-home-current.svg');
            }

        }

        function display_Searchbar_Links(){
            
            if (isset($_GET['cms'])){

                echo '<a href="/BO-CMS/index.php?cms=blog&cat=list" class="bo-searchbar-link ';if($_GET['cms'] == "blog"){echo'current';};echo'">Blog</a>';
                echo '<a href="/BO-CMS/index.php?cms=case-study&cat=list" class="bo-searchbar-link ';if($_GET['cms'] == "case-study"){echo'current';};echo'">Portfolio</a>';
                echo '<a href="/BO-CMS/index.php?cms=services&cat=list" class="bo-searchbar-link ';if($_GET['cms'] == "services"){echo'current';};echo'">Services</a>';

            }

        }


    }

?>