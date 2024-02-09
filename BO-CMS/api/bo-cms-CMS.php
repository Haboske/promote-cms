<?php

    require 'bo-cms-HTML-framework.php';
    require_once 'librairies/Medoo.php';
    use Medoo\Medoo;
    
    class CMS{

        public $database;

        public function __construct(){
            $this -> database = new Medoo([
                'type' => 'mysql',
                'host' => 'mysql-promote-cms.alwaysdata.net',
                'database' => 'promote-cms_bdd',
                'username' => '347331',
                'password' => '3kzJ&@tCzKzd3JF7'
            ]);
        }

        public function display_Overview(){

        }

        public function display_List($cat){
            
            if($cat == "services"){

                // We call ou html framework
                $html = new HTML_Framework();

                // We initiate our headers title and css class
                $headers = ['Service','Description du service'];
                $headers_class = ['bo-list-heading', 'bo-list-desc'];
                $li_class = ['bo-grid','bo-6col','bo-1row'];

                $html -> setList($headers,$headers_class,$li_class);
                $html -> endList();

            } else if($cat == "blog"){

                $html = new HTML_Framework();

                echo "<div class='bo-heading-wrapper'>";
                    echo '<h1>Gérez vos articles de blog ci-dessous</h1>';
                    echo '<a class="bo-heading-button" href="'.$html->genBaseUrl().'/BO-CMS/index.php?cms=blog&cat=new">Nouvel article '; echo $html -> displayIcon("bo-list-new-icon").'</a>';
                echo "</div>";

                $headers = ['N°','Titre', 'Catégorie','Date de création'];
                $headers_class = ['bo-list-id','bo-list-heading', 'bo-list-cat','bo-list-date'];
                $li_class = ['bo-flex','bo-row'];

                $data = $this -> database -> select('cms_blog',[
                    "blog_id",
                    "blog_title",
                    "blog_category",
                    "blog_writting_datetime"
                ]);

                $html -> setList($headers,$headers_class,$li_class);

                foreach($data as $i){

                    $pair = True;

                    $i['blog_title'] = mb_strimwidth($i['blog_title'],0,40,'...');
                    $i['blog_writting_datetime'] = $html -> rewriteDatetime($i['blog_writting_datetime']);
                    // if($i%2 != 0){
                    //     $pair = False;
                    // }

                    $html -> setListItem($i,$headers_class,$li_class,"cms=".$cat."&cat=update","cms=".$cat."&cat=delete",$pair);

                }

                $html -> endList();

                

                

            } else if($cat == "case-study"){

                $data = $this -> database -> select("cms_projects",[
                    "project_id",
                    "project_client_name",
                    "project_description",
                    "project_service_type",
                    "project_datetime"
                    
                ]);

                $html = new HTML_Framework();

                echo "<div class='bo-heading-wrapper'>";
                    echo '<h1>Gérez votre portfolio ici</h1>';
                    echo '<a class="bo-heading-button" href="'.$html->genBaseUrl().'/BO-CMS/index.php?cms=case-study&cat=new">Nouveau projet '; echo $html -> displayIcon("bo-list-new-icon").'</a>';
                echo "</div>";

                $headers = ['N°','Nom du client','Titre', 'Catégorie', 'Date'];
                $headers_class = ['bo-list-id','bo-list-name', 'bo-list-heading','bo-list-cat','bo-list-datetime'];
                $li_class = ['bo-flex','bo-row'];


                $html -> setList($headers,$headers_class,$li_class);

                foreach($data as $i){

                    $i['project_description'] = mb_strimwidth($i['project_description'],0,40,'...');  
                    $i['project_datetime'] = $html -> rewriteDatetime($i['project_datetime']);

                    $html -> setListItem($i,$headers_class,$li_class,"cms=".$cat."&cat=update","cms=".$cat."&cat=delete",True);

                }

                $html -> endList();

            } else {

                print("Une erreur s'est produite");

            }

        }

        public function newItem($type){

            switch ($type){
                case "blog":

                    $html = new HTML_Framework();
                    echo "<h1>Création d'un nouvel article</h1>";
                    $html -> display_NewItemForm($type);
                    break;

                case "case-study":

                    $html = new HTML_Framework();
                    echo "<h1>Publication d'un nouveau projet</h1>";
                    $html -> display_NewItemForm($type);
                    break;
            }

        }

        public function newDB($type,$data,$files){

            switch($type){
                case "blog":

                    ## WE PUT OUR POST DATA IN VARIABLES
                    $title = htmlspecialchars($data["blog_title"]);
                    $description = htmlspecialchars($data["blog_desc"]);
                    $category = htmlspecialchars($data["blog_category"]);
                    $content = htmlspecialchars($data["blog_content"]);

                    if(isset($_FILES['blog_banner_img_url'])){

                        ## IF THE USER DIDN'T UPLOAD ANY PHOTOS
                        if($_FILES['blog_banner_img_url']['size'] == 0){
                            ## WE PUT DEFAULT BANNER IMG IF THE USER DIDN'T UPLOAD ANY
                            $img_url = $_SERVER['SERVER_NAME']."/content/BLOG-CMS/article-banner.png";
                        } else {
    
                            ## WE INIT ALL OUR FILES DATA
                            $file_tmpName = $_FILES['blog_banner_img_url']['tmp_name'];
                            $file_name = $_FILES['blog_banner_img_url']['name'];
                            $file_size = $_FILES['blog_banner_img_url']['size'];
                            $file_error = $_FILES['blog_banner_img_url']['error'];
    
                            try{
                                move_uploaded_file($file_tmpName,'../content/BLOG-CMS/blog'.$data['blog_id'].'-'.$file_name);
                                $img_url = $_SERVER['SERVER_NAME'].'/content/BLOG-CMS/blog'.$data['blog_id'].'-'.$file_name;
                            } catch (Exception $e){
                                print("Error : ".$e);
                            }
    
                        }
    
                    }

                    try{
                        $this -> database -> insert('cms_blog',[
                            "blog_title" => $title,
                            "blog_desc" => $description,
                            "blog_category" => $category,
                            "blog_banner_img_url" => $img_url,
                            "blog_richtext_content" => $content
                        ]);
    
                        echo "<h1>Votre article a bien été publié !</h1>";
                        echo "<p>Si vous pensez vous être trompés sur certains points n'ayez crainte. Vous pouvez modifier votre article autant de fois que nécéssaire !</p>";
                        echo "<a class='button-link' href='/BO-CMS/index.php?cms=blog&cat=new'>J'ai encore un article à rédiger</a>";
                        echo "<a class='button-link' href='/BO-CMS/index.php?cms=blog&cat=list'>Retourner sur la liste des articles</a>";
    
    
                    } catch (Exception $e){
                        echo "<h1>Il semblerait qu'il y ait une erreur</h1>";
    
                    }

                    break;

                case 'case-study':
                    
                    var_dump($data);

                    $project_client_name = $data["project_client_name"];
                    $project_desc = $data["project_desc"];
                    $project_category = $data["project_category"];
                    $project_results_label = $data["project_results_label"];
                    $project_results_stat = $data["project_results_stat"];
                    $project_content = $data["project_content"];

                    if($_FILES["project_client_logo_url"]['size'] == 0){
                        ## WE BACKUP THE URL OF THE ACTUAL PHOTO
                        $project_client_logo_url = $this -> database -> select('cms_projects',["project_client_logo_url"],['project_id'=>$project_id])[0]["project_client_logo_url"];
                    } else {
    
                        ## WE INIT ALL OUR FILES DATA
                        $file_logo_tmpName = $_FILES["project_client_logo_url"]['tmp_name'];
                        $file_logo_name = $_FILES["project_client_logo_url"]['name'];
                        $file_logo_size = $_FILES["project_client_logo_url"]['size'];
                        $file_logo_error = $_FILES["project_client_logo_url"]['error'];
    
                        try{
                            move_uploaded_file($file_logo_tmpName,'../content/PROJECT-CMS/project-logo-'.$file_logo_name);
                            $project_client_logo_url = $_SERVER['SERVER_NAME'].'/content/PROJECT-CMS/project-logo-'.$file_logo_name;
                        } catch (Exception $e){
                            print("Error : ".$e);
                        }
    
                    }
    
                    if($_FILES["project_banner_img_url"]['size'] == 0){
                        ## WE BACKUP THE URL OF THE ACTUAL PHOTO
                        $project_client_banner_url = $this -> database -> select('cms_projects',["project_banner_img_url"],['project_id'=>$project_id])[0]["project_banner_img_url"];
                    } else {
    
                        ## WE INIT ALL OUR FILES DATA
                        $file_banner_tmpName = $_FILES["project_banner_img_url"]['tmp_name'];
                        $file_banner_name = $_FILES["project_banner_img_url"]['name'];
                        $file_banner_size = $_FILES["project_banner_img_url"]['size'];
                        $file_banner_error = $_FILES["project_banner_img_url"]['error'];
    
                        try{
                            move_uploaded_file($file_banner_tmpName,'../content/PROJECT-CMS/project-banner-'.$file_banner_name);
                            $project_client_banner_url = $_SERVER['SERVER_NAME'].'/content/PROJECT-CMS/project-banner-'.$file_banner_name;
                        } catch (Exception $e){
                            print("Error : ".$e);
                        }
    
                    }

                    try{

                        $this -> database -> insert('cms_projects',[
                            "project_client_name" => $project_client_name,
                            "project_service_type" => $project_category,
                            "project_description" => $project_desc,
                            "project_richtext_content" => $project_content,
                            "project_results_title" => $project_results_label,
                            "project_results_stats" => $project_results_stat,
                            "project_banner_img_url" => $project_client_banner_url,
                            "project_client_logo_url" => $project_client_logo_url
                        ]);

                            
                        echo "<h1>Votre projet a bien été publié !</h1>";
                        echo "<p>Si vous pensez vous être trompés sur certains points n'ayez crainte. Vous pouvez modifier votre article autant de fois que nécéssaire !</p>";
                        echo "<a class='button-link' href='/BO-CMS/index.php?cms=case-study&cat=new'>J'ai encore un projet à publier</a>";
                        echo "<a class='button-link' href='/BO-CMS/index.php?cms=case-study&cat=list'>Retourner sur la liste des projets</a>";

                    } catch (Exception $e){

                        echo "<h1>Il semblerait qu'il y ait une erreur</h1>";
    
                    }

                    



                    break;
            }

        }

        public function updateItem($cat,$id){

            if($cat == "blog"){

                # On récupère l'article demandé
                # On éffectue la requête dans un try au cas où l'article ne serait pas retrouvé
               $data = $this -> database -> select('cms_blog',[
                    "blog_id",
                    "blog_title",
                    "blog_desc",
                    "blog_category",
                    "blog_banner_img_url",
                    "blog_author_id",
                    "blog_richtext_content"
                ],[
                    "blog_id" => $id
                ]);

                ## WE CHECK IF OUR TABLE CONTAIN DATA, IF NOT THIS IS BECAUSE THE ID DOESN'T EXIST ON THE DB TABLE
                if($data){

                    echo "<h1>Modifier votre article : <br><span class='bo-title-span'>".$data[0]['blog_title']."</span></h1>";

                    $html = new HTML_Framework();
                    ## WE GOT OUR DATAS SO WE CAN GENERATE THE FORM
                    $html -> getUpdateForm($cat,$data[0]);

                    echo "<a class='button-link' href='/BO-CMS/index.php?cms=blog&cat=list'>Revenir en arrière</a>";


                } else {

                    # On indique à l'admin de retourner sur la liste.
                    echo "<h2>Il semblerait que nous n'ayons pas retrouvé votre article</h2>";
                    echo "<p>Cela est possible si vous avez essayer de modifier le lien d'accès à cette page. <br>Nous vous invitons à retourner dans la liste d'e vos d'article</p>";
                    echo "<a class='button-link' href='/BO-CMS/index.php?cms=blog&cat=list'>Revenir en arrière</a>";

                }

            } else if($cat == "case-study") {


                # On récupère l'article demandé
                # On éffectue la requête dans un try au cas où l'article ne serait pas retrouvé
                $data = $this -> database -> select('cms_projects',[
                    "project_id",
                    "project_client_name",
                    "project_client_logo_url",
                    "project_service_type",
                    "project_results_title",
                    "project_results_stats",
                    "project_description",
                    "project_richtext_content",
                    "project_banner_img_url"
                ],[
                    "project_id" => $id
                ]);

                ## WE CHECK IF OUR TABLE CONTAIN DATA, IF NOT THIS IS BECAUSE THE ID DOESN'T EXIST ON THE DB TABLE
                if($data){

                    echo "<h1>Modifier votre projet vitrine pour <br><span class='bo-title-span'>".$data[0]['project_client_name']."</span></h1>";

                    $html = new HTML_Framework();
                    ## WE GOT OUR DATAS SO WE CAN GENERATE THE FORM
                    $html -> getUpdateForm($cat,$data[0]);

                    echo "<a class='button-link' href='/BO-CMS/index.php?cms=$cat&cat=list'>Revenir en arrière</a>";


                } else {

                    # On indique à l'admin de retourner sur la liste.
                    echo "<h2>Il semblerait que nous n'ayons pas retrouvé votre article</h2>";
                    echo "<p>Cela est possible si vous avez essayer de modifier le lien d'accès à cette page. <br>Nous vous invitons à retourner dans la liste d'e vos d'article</p>";
                    echo "<a class='button-link' href='/BO-CMS/index.php?cms=blog&cat=list'>Revenir en arrière</a>";

                }

            }

        }

        public function updateDB($type,$data,$files){

            if($type == "blog"){

                ## WE PUT OUR POST DATA IN VARIABLES
                $id = htmlspecialchars($data["blog_id"]);
                $title = htmlspecialchars($data["blog_title"]);
                $description = htmlspecialchars($data["blog_desc"]);
                $category = htmlspecialchars($data["blog_category"]);
                $content = htmlspecialchars($data["blog_content"]);

                if(isset($_FILES['blog_banner_img_url'])){

                    ## IF THE USER DIDN'T UPLOAD ANY PHOTOS
                    if($_FILES['blog_banner_img_url']['size'] == 0){
                        ## WE BACKUP THE URL OF THE ACTUAL PHOTO
                        $img_url = $this -> database -> select('cms_blog',['blog_banner_img_url'],['blog_id'=>$id])[0]['blog_banner_img_url'];
                    } else {

                        ## WE INIT ALL OUR FILES DATA
                        $file_tmpName = $_FILES['blog_banner_img_url']['tmp_name'];
                        $file_name = $_FILES['blog_banner_img_url']['name'];
                        $file_size = $_FILES['blog_banner_img_url']['size'];
                        $file_error = $_FILES['blog_banner_img_url']['error'];

                        try{
                            move_uploaded_file($file_tmpName,'../content/BLOG-CMS/blog'.$data['blog_id'].'-'.$file_name);
                            $img_url = $_SERVER['SERVER_NAME'].'/content/BLOG-CMS/blog'.$data['blog_id'].'-'.$file_name;
                        } catch (Exception $e){
                            print("Error : ".$e);
                        }

                    }

                }

                try{
                    $this -> database -> update('cms_blog',[
                        "blog_title" => $title,
                        "blog_desc" => $description,
                        "blog_category" => $category,
                        "blog_banner_img_url" => $img_url,
                        "blog_richtext_content" => $content
                    ],[
                        "blog_id" => $id
                    ]);

                    echo "<h1>Vous avez bien mis à jour votre article</h1>";
                    echo "<p>Si vous pensez vous être trompés sur certains points n'ayez crainte. Vous pouvez modifier votre article autant de fois que nécéssaire !</p>";
                    echo "<a class='button-link' href='/BO-CMS/index.php?cms=blog&cat=update&id=$id'>J'ai encore quelque chose à modifier</a>";
                    echo "<a class='button-link' href='/BO-CMS/index.php?cms=blog&cat=list'>Retourner sur la liste des articles</a>";


                } catch (Exception $e){
                    echo "<h1>Il semblerait qu'il y ait une erreur</h1>";

                }

                

            } if ($type == "case-study") {

                ## PROJECT GLOBAL INFOS
                $project_id = $data["project_id"];
                $project_client_name = $data["project_client_name"];
                $project_desc = $data["project_desc"];
                $project_content = $data["project_content"];
                $project_type = $data["project_category"];

                $project_results_label = $data["project_results_label"];
                $project_results_stat = $data["project_results_stat"];

                if($_FILES["project_client_logo_url"]['size'] == 0){
                    ## WE BACKUP THE URL OF THE ACTUAL PHOTO
                    $project_client_logo_url = $this -> database -> select('cms_projects',["project_client_logo_url"],['project_id'=>$project_id])[0]["project_client_logo_url"];
                } else {

                    ## WE INIT ALL OUR FILES DATA
                    $file_logo_tmpName = $_FILES["project_client_logo_url"]['tmp_name'];
                    $file_logo_name = $_FILES["project_client_logo_url"]['name'];
                    $file_logo_size = $_FILES["project_client_logo_url"]['size'];
                    $file_logo_error = $_FILES["project_client_logo_url"]['error'];

                    try{
                        move_uploaded_file($file_logo_tmpName,'../content/PROJECT-CMS/project'.$project_id.'-logo-'.$file_logo_name);
                        $project_client_logo_url = $_SERVER['SERVER_NAME'].'/content/PROJECT-CMS/project'.$project_id.'-logo-'.$file_logo_name;
                    } catch (Exception $e){
                        print("Error : ".$e);
                    }

                }

                if($_FILES["project_banner_img_url"]['size'] == 0){
                    ## WE BACKUP THE URL OF THE ACTUAL PHOTO
                    $project_client_banner_url = $this -> database -> select('cms_projects',["project_banner_img_url"],['project_id'=>$project_id])[0]["project_banner_img_url"];
                } else {

                    ## WE INIT ALL OUR FILES DATA
                    $file_banner_tmpName = $_FILES["project_banner_img_url"]['tmp_name'];
                    $file_banner_name = $_FILES["project_banner_img_url"]['name'];
                    $file_banner_size = $_FILES["project_banner_img_url"]['size'];
                    $file_banner_error = $_FILES["project_banner_img_url"]['error'];

                    try{
                        move_uploaded_file($file_banner_tmpName,'../content/PROJECT-CMS/project'.$project_id.'-banner-'.$file_banner_name);
                        $project_client_banner_url = $_SERVER['SERVER_NAME'].'/content/PROJECT-CMS/project'.$project_id.'-banner-'.$file_banner_name;
                    } catch (Exception $e){
                        print("Error : ".$e);
                    }

                }

                try{
                    $this -> database -> update('cms_projects',[
                        "project_client_name" => $project_client_name,
                        "project_service_type" => $project_type,
                        "project_description" => $project_desc,
                        "project_richtext_content" => $project_content,
                        "project_results_title" => $project_results_label,
                        "project_results_stats" => $project_results_stat,
                        "project_client_logo_url" => $project_client_logo_url,
                        "project_banner_img_url" => $project_client_banner_url
                    ],[
                        "project_id" => $project_id
                    ]);

                    echo "<h1>Vous avez bien mis à jour votre projet</h1>";
                    echo "<p>Si vous pensez vous être trompés sur certains points n'ayez crainte. Vous pouvez modifier votre article autant de fois que nécéssaire !</p>";
                    echo "<a class='button-link' href='/BO-CMS/index.php?cms=case-study&cat=update&id=$project_id'>J'ai encore quelque chose à modifier</a>";
                    echo "<a class='button-link' href='/BO-CMS/index.php?cms=case-study&cat=list'>Retourner sur la liste des articles</a>";


                } catch (Exception $e){
                    echo "<h1>Il semblerait qu'il y ait une erreur</h1>";

                }

            }

        }

        ### FUNCTION THAT WILL DROP ITEM FROM BDD
        public function deleteItem($type,$id){

            switch($type){
                
                case "blog":

                    $html = new HTML_Framework();

                    # On récupère l'article demandé
                    # On éffectue la requête dans un try au cas où l'article ne serait pas retrouvé
                    $data = $this -> database -> select('cms_blog',[
                        "blog_id",
                        "blog_title",
                        "blog_desc",
                    ],[
                        "blog_id" => $id
                    ]);

                    if($data){

                        echo "<h1>Supprimer votre article : <br><span class='bo-title-span'>".$data[0]['blog_title']."</span></h1>";
                        $html -> getDeleteForm("blog",$data[0]);
                        echo "<a class='button-link' href='/BO-CMS/index.php?cms=blog&cat=list'>Je souhaite encore réfléchir</a>";
                    
                    }


                    break;

                case "case-study":

                    $html = new HTML_Framework();

                    # On récupère l'article demandé
                    # On éffectue la requête dans un try au cas où l'article ne serait pas retrouvé
                    $data = $this -> database -> select('cms_projects',[
                        "project_id",
                        "project_description",
                        "project_client_name",
                    ],[
                        "project_id" => $id
                    ]);

                    if ($data){

                        echo "<h1>Supprimer votre projet : <br><span class='bo-title-span'>".$data[0]['project_description']."</span> pour votre client <span class='bo-title-span'>".$data[0]['project_client_name']."</span></h1>";
                        $html -> getDeleteForm($type,$data[0]);
                        echo "<a class='button-link' href='/BO-CMS/index.php?cms=case-study&cat=list'>Je souhaite encore réfléchir</a>";
                        
                    }


            }

        }

        public function dropDB($type,$data){

            switch($type){
                case "blog":

                    try{
                        $this -> database -> delete('cms_blog',["blog_id"=>$data["blog_id"]]);

                        echo "<h1>Votre article à bien été supprimé.</h1>";
                        echo "<a class='button-link' href='/BO-CMS/index.php?cms=blog&cat=list'>Retourner sur la liste des articles</a>";

                    } catch (Exception $e) {
                        echo "<h1>Il semblerait qu'il y ait une erreur avec la suppression de votre article</h1>";
                    }
                    
                    break;

                case "case-study":

                    try{
                        $this -> database -> delete('cms_projects',["project_id"=>$data["project_id"]]);

                        echo "<h1>Votre projet à bien été supprimé.</h1>";
                        echo "<a class='button-link' href='/BO-CMS/index.php?cms=case-study&cat=list'>Retourner sur la liste des projets</a>";

                    } catch (Exception $e) {
                        echo "<h1>Il semblerait qu'il y ait une erreur avec la suppression de votre projet</h1>";
                    }

                    break;
            }

        }



    }

?>



