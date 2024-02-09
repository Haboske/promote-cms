<?php 

    class HTML_Framework{

        public function genBaseUrl(){
            return 'http://'.$_SERVER['SERVER_NAME'];
        }

        ## CLEARLY THIS FUNCTION EXIST ONLY TO LET THE OTHERS FUNCTION BEING MORE READBLE BY NOT FLOODING IT WITH SOME SVG
        public function displayIcon($type){

            switch($type){
                case "edit":
                    return '<svg class="bo-list-edit-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 18L19.9999 19.094C19.4695 19.6741 18.7502 20 18.0002 20C17.2501 20 16.5308 19.6741 16.0004 19.094C15.4693 18.5151 14.75 18.1901 14.0002 18.1901C13.2504 18.1901 12.5312 18.5151 12 19.094M3.00003 20H4.67457C5.16376 20 5.40835 20 5.63852 19.9447C5.84259 19.8957 6.03768 19.8149 6.21663 19.7053C6.41846 19.5816 6.59141 19.4086 6.93732 19.0627L19.5001 6.49998C20.3285 5.67156 20.3285 4.32841 19.5001 3.49998C18.6716 2.67156 17.3285 2.67156 16.5001 3.49998L3.93729 16.0627C3.59139 16.4086 3.41843 16.5816 3.29475 16.7834C3.18509 16.9624 3.10428 17.1574 3.05529 17.3615C3.00003 17.5917 3.00003 17.8363 3.00003 18.3255V20Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                    break;
                case "delete":
                    return '<svg class="bo-list-delete-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9 9L15 15M15 9L9 15M7.8 21H16.2C17.8802 21 18.7202 21 19.362 20.673C19.9265 20.3854 20.3854 19.9265 20.673 19.362C21 18.7202 21 17.8802 21 16.2V7.8C21 6.11984 21 5.27976 20.673 4.63803C20.3854 4.07354 19.9265 3.6146 19.362 3.32698C18.7202 3 17.8802 3 16.2 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V16.2C3 17.8802 3 18.7202 3.32698 19.362C3.6146 19.9265 4.07354 20.3854 4.63803 20.673C5.27976 21 6.11984 21 7.8 21Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                    break;
                case "form-file-input":
                    return '<svg class="bo-form-label-button-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.1525 10.8995L12.1369 19.9151C10.0866 21.9653 6.7625 21.9653 4.71225 19.9151C2.662 17.8648 2.662 14.5407 4.71225 12.4904L13.7279 3.47483C15.0947 2.108 17.3108 2.108 18.6776 3.47483C20.0444 4.84167 20.0444 7.05775 18.6776 8.42458L10.0156 17.0866C9.33213 17.7701 8.22409 17.7701 7.54068 17.0866C6.85726 16.4032 6.85726 15.2952 7.54068 14.6118L15.1421 7.01037" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                    break;
                case "form-label-img-icon":
                    return '<svg class="bo-label-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 7.8C3 6.11984 3 5.27976 3.32698 4.63803C3.6146 4.07354 4.07354 3.6146 4.63803 3.32698C5.27976 3 6.11984 3 7.8 3H16.2C17.8802 3 18.7202 3 19.362 3.32698C19.9265 3.6146 20.3854 4.07354 20.673 4.63803C21 5.27976 21 6.11984 21 7.8V16.2C21 17.8802 21 18.7202 20.673 19.362C20.3854 19.9265 19.9265 20.3854 19.362 20.673C18.7202 21 17.8802 21 16.2 21H7.8C6.11984 21 5.27976 21 4.63803 20.673C4.07354 20.3854 3.6146 19.9265 3.32698 19.362C3 18.7202 3 17.8802 3 16.2V7.8Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 9.5L6 15H18L13.5 7.5L11 11L9 9.5Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                    break;
                case "form-label-filter-icon":
                    return '<svg class="bo-label-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 4.6C2 4.03995 2 3.75992 2.10899 3.54601C2.20487 3.35785 2.35785 3.20487 2.54601 3.10899C2.75992 3 3.03995 3 3.6 3H20.4C20.9601 3 21.2401 3 21.454 3.10899C21.6422 3.20487 21.7951 3.35785 21.891 3.54601C22 3.75992 22 4.03995 22 4.6V5.26939C22 5.53819 22 5.67259 21.9672 5.79756C21.938 5.90831 21.8901 6.01323 21.8255 6.10776C21.7526 6.21443 21.651 6.30245 21.4479 6.4785L15.0521 12.0215C14.849 12.1975 14.7474 12.2856 14.6745 12.3922C14.6099 12.4868 14.562 12.5917 14.5328 12.7024C14.5 12.8274 14.5 12.9618 14.5 13.2306V18.4584C14.5 18.6539 14.5 18.7517 14.4685 18.8363C14.4406 18.911 14.3953 18.9779 14.3363 19.0315C14.2695 19.0922 14.1787 19.1285 13.9971 19.2012L10.5971 20.5612C10.2296 20.7082 10.0458 20.7817 9.89827 20.751C9.76927 20.7242 9.65605 20.6476 9.58325 20.5377C9.5 20.4122 9.5 20.2142 9.5 19.8184V13.2306C9.5 12.9618 9.5 12.8274 9.46715 12.7024C9.43805 12.5917 9.39014 12.4868 9.32551 12.3922C9.25258 12.2856 9.15102 12.1975 8.94789 12.0215L2.55211 6.4785C2.34898 6.30245 2.24742 6.21443 2.17449 6.10776C2.10986 6.01323 2.06195 5.90831 2.03285 5.79756C2 5.67259 2 5.53819 2 5.26939V4.6Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                    break;
                case "form-label-resume-icon":
                    return '<svg class="bo-label-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 8.5H12M7 12H15M9.68375 18H16.2C17.8802 18 18.7202 18 19.362 17.673C19.9265 17.3854 20.3854 16.9265 20.673 16.362C21 15.7202 21 14.8802 21 13.2V7.8C21 6.11984 21 5.27976 20.673 4.63803C20.3854 4.07354 19.9265 3.6146 19.362 3.32698C18.7202 3 17.8802 3 16.2 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V20.3355C3 20.8684 3 21.1348 3.10923 21.2716C3.20422 21.3906 3.34827 21.4599 3.50054 21.4597C3.67563 21.4595 3.88367 21.2931 4.29976 20.9602L6.68521 19.0518C7.17252 18.662 7.41617 18.4671 7.68749 18.3285C7.9282 18.2055 8.18443 18.1156 8.44921 18.0613C8.74767 18 9.0597 18 9.68375 18Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                    break;
                case "form-label-heading-icon":
                    return '<svg class="bo-label-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 7V17M16 7V17M16 12L8 12M7.8 21H16.2C17.8802 21 18.7202 21 19.362 20.673C19.9265 20.3854 20.3854 19.9265 20.673 19.362C21 18.7202 21 17.8802 21 16.2V7.8C21 6.11984 21 5.27976 20.673 4.63803C20.3854 4.07354 19.9265 3.6146 19.362 3.32698C18.7202 3 17.8802 3 16.2 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V16.2C3 17.8802 3 18.7202 3.32698 19.362C3.6146 19.9265 4.07354 20.3854 4.63803 20.673C5.27976 21 6.11984 21 7.8 21Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                    break;
                case "form-label-checkmark-icon": 
                    return '<svg class="bo-label-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5708 20C19.8328 20 20.8568 18.977 20.8568 17.714V13.143L21.9998 12L20.8568 10.857V6.286C20.8568 5.023 19.8338 4 18.5708 4M5.429 4C4.166 4 3.143 5.023 3.143 6.286V10.857L2 12L3.143 13.143V17.714C3.143 18.977 4.166 20 5.429 20M7.5 12L9.93431 14.4343C10.1323 14.6323 10.2313 14.7313 10.3455 14.7684C10.4459 14.8011 10.5541 14.8011 10.6545 14.7684C10.7687 14.7313 10.8677 14.6323 11.0657 14.4343L16.5 9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                    break;
                case "bo-form-info-icon":
                    return '<svg class="bo-info-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.09 9C9.3251 8.33167 9.78915 7.76811 10.4 7.40913C11.0108 7.05016 11.7289 6.91894 12.4272 7.03871C13.1255 7.15849 13.7588 7.52152 14.2151 8.06353C14.6713 8.60553 14.9211 9.29152 14.92 10C14.92 12 11.92 13 11.92 13M12 17H12.01M7.8 21H16.2C17.8802 21 18.7202 21 19.362 20.673C19.9265 20.3854 20.3854 19.9265 20.673 19.362C21 18.7202 21 17.8802 21 16.2V7.8C21 6.11984 21 5.27976 20.673 4.63803C20.3854 4.07354 19.9265 3.6146 19.362 3.32698C18.7202 3 17.8802 3 16.2 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V16.2C3 17.8802 3 18.7202 3.32698 19.362C3.6146 19.9265 4.07354 20.3854 4.63803 20.673C5.27976 21 6.11984 21 7.8 21Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                    break;
                case "bo-list-new-icon":
                    return '<svg class="bo-heading-button-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5708 20C19.8328 20 20.8568 18.977 20.8568 17.714V13.143L21.9998 12L20.8568 10.857V6.286C20.8568 5.023 19.8338 4 18.5708 4M5.429 4C4.166 4 3.143 5.023 3.143 6.286V10.857L2 12L3.143 13.143V17.714C3.143 18.977 4.166 20 5.429 20M12 8V16M8 12H16" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                    break;
                case "form-label-cross-icon":
                    return '<svg class="bo-label-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5708 20C19.8328 20 20.8568 18.977 20.8568 17.714V13.143L21.9998 12L20.8568 10.857V6.286C20.8568 5.023 19.8338 4 18.5708 4M5.429 4C4.166 4 3.143 5.023 3.143 6.286V10.857L2 12L3.143 13.143V17.714C3.143 18.977 4.166 20 5.429 20M15 9L9 15M9 9L15 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                    break;
                case "form-label-chart":
                    return '<svg class="bo-label-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 9L11.5657 14.4343C11.3677 14.6323 11.2687 14.7313 11.1545 14.7684C11.0541 14.8011 10.9459 14.8011 10.8455 14.7684C10.7313 14.7313 10.6323 14.6323 10.4343 14.4343L8.56569 12.5657C8.36768 12.3677 8.26867 12.2687 8.15451 12.2316C8.05409 12.1989 7.94591 12.1989 7.84549 12.2316C7.73133 12.2687 7.63232 12.3677 7.43431 12.5657L3 17M17 9H13M17 9V13M7.8 21H16.2C17.8802 21 18.7202 21 19.362 20.673C19.9265 20.3854 20.3854 19.9265 20.673 19.362C21 18.7202 21 17.8802 21 16.2V7.8C21 6.11984 21 5.27976 20.673 4.63803C20.3854 4.07354 19.9265 3.6146 19.362 3.32698C18.7202 3 17.8802 3 16.2 3H7.8C6.11984 3 5.27976 3 4.63803 3.32698C4.07354 3.6146 3.6146 4.07354 3.32698 4.63803C3 5.27976 3 6.11984 3 7.8V16.2C3 17.8802 3 18.7202 3.32698 19.362C3.6146 19.9265 4.07354 20.3854 4.63803 20.673C5.27976 21 6.11984 21 7.8 21Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
                    break;
                }

        }

        public function displayDivider($type){

            switch($type){

                case "3-dot":
                    return "<div class='bo-3dot-divider-wrapper'><div class='bo-3dot-divider dot1'></div><div class='bo-3dot-divider dot2'></div><div class='bo-3dot-divider dot3'></div></div>";
                    break;
                case "3-dot-red":
                    return "<div class='bo-3dot-divider-wrapper red'><div class='bo-3dot-divider dot1'></div><div class='bo-3dot-divider dot2'></div><div class='bo-3dot-divider dot3'></div></div>";
                    break;
            }

        }

        
        # ////////////////////// ADMIN LIST //////////////////////////// #
        # ////////////////////// ADMIN LIST //////////////////////////// #
        # ////////////////////// ADMIN LIST //////////////////////////// #
        # On créer une fonction qui génère le header d'une liste en html avec les classes présentes dans la propriétés header_class
        public function setList($headers, $headers_class, $li_class){

            $i = 0;

            echo '<div class="bo-child-wrapper">
                    <ol role="list" class="bo-list">
                        <li class="bo-list-item heading impair ';
                        foreach($li_class as $class){echo $class.' ';}
                        echo '">';

            echo '<div class="bo-list-buttons-wrapper"></div>';
            
            # Pour chaque tête de colonne dans notre array
            foreach($headers as $liHeading){
                # On génère une tête de colonne
                echo '<div class="list_item_text '.$headers_class[$i].'">'.$liHeading.'</div>';
                $i++;
            }
            echo '</li>';

        }

        # On créer une fonction qui permet de clôturer une liste en html
        public function endList(){
            echo '</ol>
            </div>';
        }


        # ////////////////////// ADMIN LIST ITEM //////////////////////////// #
        # ////////////////////// ADMIN LIST ITEM //////////////////////////// #
        # ////////////////////// ADMIN LIST ITEM //////////////////////////// #
        public function setListItem($items, $items_class,$li_class, $updateButton, $deleteButton, $pair){

            $i = 0;
            $pairCLass = 'impair';
            if($pair){
                $pairCLass = '';
            }
        
            echo '<li class="bo-list-item '.$pairCLass.' ';
                foreach($li_class as $class){echo $class.' ';}
            echo '">';

            $idIterator = 0;
            foreach ($items as $id){
                if($idIterator == 0){
                    $item_id = $id;
                    break;
                }
            }

            echo '<div class="bo-list-buttons-wrapper">';
                if($deleteButton){
                    echo '<a href="'.$this->genBaseUrl().'/BO-CMS/index.php?'.$deleteButton.'&id='.$item_id.'" class="bo-list-delete delete">'.$this->displayIcon('delete').'</a>';
                }

                if($updateButton){
                    echo '<a href="'.$this->genBaseUrl().'/BO-CMS/index.php?'.$updateButton.'&id='.$item_id.'" class="bo-list-edit edit">'.$this->displayIcon('edit').'</a>';
                }
            echo '</div>';
        
            # Pour chaque text présent dans notre item alors
            foreach ($items as $item){
                # On l'affiche
                echo '<div class="bo-list-item-text '.$items_class[$i].' ">'.$item.'</div>';
                if($i==0){
                    $id = $item;
                }
                $i++;
            }
        
            echo '</li>';
        
        }

        # ////////////////////// CREATE FORM //////////////////////////// #
        # ////////////////////// CREATE FORM //////////////////////////// #
        # ////////////////////// CREATE FORM //////////////////////////// #
        public function display_NewItemForm($type){

            switch($type){
                case "blog":

                    echo "<p class='p-info'>"; echo $this -> displayIcon("bo-form-info-icon");echo"C'est ici que vous rédigez votre article. Prenez bien soins de rédiger chaque section de cette page et relisez vous toujours avant de créer un nouvel article car il sera immédiatement publier ! Mais n'ayez crainte, quoi qu'il advienne vous aurez toujours la possibilité de modifier ou supprimer l'article.</p>";    
    
                    # I KNOW THAT I JUSTE COULD HAVE USE ONLY ONE ECHO FUNCTION, BUT FOR MY ORGANISATION AND READABILITY I PREFER USING AS MUCH ECHO AS I NEED
                    echo "<div class='bo-child-wrapper bo-child-wrapper-border-purple padding-tiny'>";
                    
                        #echo "<h2>Article : $title</h2>";
            
                        echo "<form class='bo-form' action='/BO-CMS/index.php?cms=blog&cat=send_newitem' method='POST' enctype='multipart/form-data'>";
    
                            ## DIVIDER
                            echo $this->displayDivider('3-dot');
    
                            ## TITLE INPUT
                            echo "<div class='bo-form-input-wrapper'>";
    
                                echo "<label class='bo-label'>";echo $this -> displayIcon("form-label-heading-icon");echo"Innovez pour le <span class='bo-label-span'>titre</span> de votre blog.</label>";
                                echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"Il s'agit du titre de votre article de blog. Il est le premier élément de votre article à être mis en avant et ce peu importe la page sur laquelle se trouve vos utilisateurs. Alors si vous souhaitez vous assurer une audience, prenez bien soin de séléctionner un article qui attire l'attention. Tout ce que vous avez à faire c'est de changer le contenu de l'encadré ci-dessous</p>";    
    
                                echo "<input required name='blog_title' type='text' class='bo-text-input' placeholder='Rédigez votre titre ici'>";
    
                            echo "</div>";
    
                            ## DIVIDER
                            echo $this->displayDivider('3-dot');
    
    
                            ## DESC INPUT
                            echo "<div class='bo-form-input-wrapper'>";
    
                                echo "<label class='bo-label'>";echo $this -> displayIcon("form-label-resume-icon"); echo "Rédigez une <span class='bo-label-span'>courte description</span> de votre article là.</label>";
                                echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"Il est question de rédiger une courte description de votre article. Un résumé qui se lit en moins de trente de seconde, c'est comme le dos d'un livre que vous souhaitez acheter à la fnac. Vous vous assurez toujours de connaître l'intrigue du livre avant de l'acheter !</p>";    
                                echo "<textarea required name='blog_desc' class='bo-text-input bo-textarea-dec'>Votre description ici</textarea>";
    
                            echo "</div>";
    
                            ## DIVIDER
                            echo $this->displayDivider('3-dot');
    
                            ## 2 COL WRAPPER
                            echo "<div class='bo-grid bo-2col bo-1row'>";
                                ## CATEGORY INPUT
                                echo "<div class='bo-form-input-wrapper'>";
    
                                    echo "<label class='bo-label'>";echo $this -> displayIcon("form-label-filter-icon"); echo " Sélectionnez la <span class='bo-label-span'>catégorie</span> pour votre article.</label>";
                                    
    
                                    ## SELECT WITH OPTIONS
                                    echo "<select name='blog_category'>";
    
                                        echo "<option value='Marketing' selected>Marketing</option>";
                                        echo "<option value='SEO'>SEO</option>";
                                        echo "<option value='Services'>Services</option>";
    
                                    echo "</select>";
    
                                    echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"La catégorie de votre article est un élément important. Lorsqu'un utilisateur souhaite accéder à un type de contenu en particulier, il va filtrer ses recherches via différentes catégories pour ne récupérer que ce qui l'intéresse.</p>";    
    
    
                                echo "</div>";
    
                                ## BLOG IMAGE INPUT
                                echo "<div class='bo-form-input-wrapper'>";
    
                                    echo "<label class='bo-label'>";echo $this -> displayIcon("form-label-img-icon")." Uploader une <span class='bo-label-span'>image</span> de bannière</label>";
                                    echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"La photo de bannière est importante, elle est (avec le titre) un des éléments le plus régulièrement mis en avant pour rendre la lecture de votre article attrayante. C'est comme les vignettes des vidéos youtubes que vous ne cessez de remarquer avant de cliquer sur la vidéo. </p>";    
    
                                    echo "<label name='img_url' for='img_url' class='bo-form-file-label-button'>"; echo $this -> displayIcon("form-file-input");echo " &nbsp;&nbsp;Charger une nouvelle image </label>";
                                    echo "<input name='blog_banner_img_url' id='img_url' type='file' class='bo-form-file-input'>";
    
                                echo "</div>";
    
                            echo "</div>";
    
                            ## DIVIDER
                            echo $this->displayDivider('3-dot');
    
                            ## BLOG RICHTEXT CONTENT
                            echo "<div class='bo-form-input-wrapper'>";
    
                                echo "<label class='bo-label'>Écrivez votre <span class='bo-label-span'>article</span> ici.</label>";
                                echo "<textarea required name='blog_content' class='bo-text-input bo-textarea-richtext'>Rédigez ici le contenu de votre article de blog</textarea>";
    
                            echo "</div>";
    
                            ## DIVIDER
                            echo $this->displayDivider('3-dot');
    
                            ## SUBMIT BUTTON
                            echo "<label for='submit' class='bo-form-submit-label'>Créer et publier un nouvel article "; echo $this -> displayIcon("form-label-checkmark-icon");echo"</label>";
                            echo "<input id='submit' class='bo-form-submit' type='submit' name='new_item' value='confirmed'>";
                        
                        echo "</form>";
    
                    echo "</div>";
                    break; 
                    
                case "case-study":

                    echo "<p class='p-info'>"; echo $this -> displayIcon("bo-form-info-icon");echo"Pour publier un nouveau projet sur votre site internet, ça se passe en dessous !</p>";    
    
                    # I KNOW THAT I JUSTE COULD HAVE USE ONLY ONE ECHO FUNCTION, BUT FOR MY ORGANISATION AND READABILITY I PREFER USING AS MUCH ECHO AS I NEED
                    echo "<div class='bo-child-wrapper bo-child-wrapper-border-purple padding-tiny'>";
                    
                        #echo "<h2>Article : $title</h2>";
            
                        echo "<form class='bo-form' action='/BO-CMS/index.php?cms=case-study&cat=send_newitem' method='POST' enctype='multipart/form-data'>";
                        
                            ## DIVIDER
                            echo $this->displayDivider('3-dot');
    
                            ## TITLE INPUT
                            echo "<div class='bo-form-input-wrapper'>";
    
                                echo "<label class='bo-label'>";echo $this -> displayIcon("form-label-heading-icon");echo"Le <span class='bo-label-span'>nom de votre client</span>.</label>";
                                echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"Renseignez ici le nom de votre client. C'est toujours important de mettre ses clients en avants. Cela montre que l'on est fière des projets qu'on a réalisé pour eux et que nous n'avons pas peur de les mettre en avant.</p>";    
    
                                echo "<input name='project_client_name' type='text' class='bo-text-input' placeholder='Le nom de votre client ici'>";
    
                            echo "</div>";
    
                            ## DIVIDER
                            echo $this->displayDivider('3-dot');
    
    
                            ## DESC INPUT
                            echo "<div class='bo-form-input-wrapper'>";
    
                                echo "<label class='bo-label'>";echo $this -> displayIcon("form-label-resume-icon"); echo "Le <span class='bo-label-span'>titre</span> de votre projet.</label>";
                                echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"Il s'agit du titre de votre projet. Il est le premier élément de votre article à être mis en avant et ce peu importe la page sur laquelle se trouve vos utilisateurs. Alors si vous souhaitez vous assurer une audience, prenez bien soin de séléctionner un titre qui attire l'attention. Tout ce que vous avez à faire c'est de changer le contenu de l'encadré ci-dessous</p>";    
                                echo "<input name='project_desc' class='bo-text-input' placeholder='Décrivez le titre de votre projet ici'>";
    
                            echo "</div>";
    
                            ## DIVIDER
                            echo $this->displayDivider('3-dot');
    
                            ## 2 COL WRAPPER
                            echo "<div class='bo-grid bo-2col bo-1row'>";
                                ## CATEGORY INPUT
                                echo "<div class='bo-form-input-wrapper'>";
    
                                    echo "<label class='bo-label'>";echo $this -> displayIcon("form-label-filter-icon"); echo " Sélectionnez la <span class='bo-label-span'>catégorie de service</span> de votre projet.</label>";
                                    
    
                                    ## SELECT WITH OPTIONS
                                    echo "<select name='project_category'>";
    
                                        echo "<option value='Publicité Payante' selected>Publicité Payante</option>";
                                        echo "<option value='Social Marketing' >Social Marketing</option>";
                                        echo "<option value='SEO'>SEO</option>";
    
                                    echo "</select>";
    
                                    echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"La catégorie de votre service est un élément important. Lorsqu'un utilisateur souhaite accéder à un type de contenu en particulier, il va filtrer ses recherches via différentes catégories pour ne récupérer que ce qui l'intéresse.</p>";    
    
                                echo "</div>";
    
                                ## PROJECT BANNER INPUT
                                echo "<div class='bo-form-input-wrapper'>";
    
                                    echo "<label class='bo-label'>";echo $this -> displayIcon("form-label-img-icon")." Uploader une <span class='bo-label-span'>image</span> de bannière</label>";
                                    echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"La photo de bannière est importante, elle est (avec le titre) un des éléments le plus régulièrement mis en avant pour rendre la lecture de votre article attrayante. C'est comme les vignettes des vidéos youtubes que vous ne cessez de remarquer avant de cliquer sur la vidéo. </p>";    
    
                                    echo "<label name='project_banner_img_url' for='project_banner_img_url' class='bo-form-file-label-button'>"; echo $this -> displayIcon("form-file-input");echo " &nbsp;&nbsp;Charger une nouvelle bannière</label>";
                                    echo "<input name='project_banner_img_url' id='project_banner_img_url' type='file' class='bo-form-file-input'>";
    
                                echo "</div>";
    
                                ## PROJECT LOGO INPUT
                                echo "<div class='bo-form-input-wrapper'>";
    
                                    echo "<label class='bo-label'>";echo $this -> displayIcon("form-label-img-icon")." Le <span class='bo-label-span'>logo de votre client</span>.</label>";
                                    echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"Il s'agit tout simplement du logo de l'entreprise pour laquelle vous avez réalisé la mission</p>";    
    
                                    echo "<label name='project_client_logo_url' for='project_client_logo_url' class='bo-form-file-label-button'>"; echo $this -> displayIcon("form-file-input");echo " &nbsp;&nbsp;Charger le logo de votre client ici</label>";
                                    echo "<input name='project_client_logo_url' id='project_client_logo_url' type='file' class='bo-form-file-input'>";
    
                                echo "</div>";
    
                                ## DESC INPUT
                                echo "<div class='bo-form-input-wrapper'>";
    
                                    echo "<label class='bo-label'>";echo $this -> displayIcon("form-label-chart"); echo "Renseignez une <span class='bo-label-span'>statistique</span> sur votre projet.</label>";
                                    echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"Renseignez une stats en lien avec votre projet. Cela peut-être le temps qu'il a pris à être développé. Où alors les résultats qu'il a apporté à votre clientèle. Il est toujours bon de communiquez avec des chiffres et de les mettres en avant.</p>";    
                                    
                                    echo "<label class='bo-label'>Nom de la statistique</label>";
                                    echo "<input name='project_results_label' class='bo-text-input' placeholder='De vues en plus par mois'>";
                                    
                                    echo "<label class='bo-label'>Chiffre de la statistique</label>";
                                    echo "<input name='project_results_stat' class='bo-text-input' placeholder='+60%'>";
    
    
                                echo "</div>";
    
                            echo "</div>";
    
                            ## DIVIDER
                            echo $this->displayDivider('3-dot');
    
                            ## BLOG RICHTEXT CONTENT
                            echo "<div class='bo-form-input-wrapper'>";
    
                                echo "<label class='bo-label'>Rédigez <span class='bo-label-span'>article</span> ici.</label>";
                                echo "<textarea name='project_content' class='bo-text-input bo-textarea-richtext'>Rédigez l'article sur votre projet ici</textarea>";
    
                            echo "</div>";
    
                            ## DIVIDER
                            echo $this->displayDivider('3-dot');
    
                            ## SUBMIT BUTTON
                            echo "<label for='submit' class='bo-form-submit-label'>Publier mon projet "; echo $this -> displayIcon("form-label-checkmark-icon");echo"</label>";
                            echo "<input id='submit' class='bo-form-submit' type='submit' name='newitem' value='confirmed'>";
                        
                        echo "</form>";
    
                    echo "</div>";
    

                    break;



            }

        }

        # ////////////////////// UPDATE FORM //////////////////////////// #
        # ////////////////////// UPDATE FORM //////////////////////////// #
        # ////////////////////// UPDATE FORM //////////////////////////// #
        public function getUpdateForm($type,$data){

            if($type == "blog"){

                $id = $data["blog_id"];
                $title = $data["blog_title"];
                $description = $data["blog_desc"];
                $category = $data["blog_category"];
                $img_url = $data["blog_banner_img_url"];
                $author = "Vous"; # WE CONSIDER THAT THERE IS ONLY 1 ADMIN AT THE MOMENT, NO TIME TO DEV AN ADMIN CLASS WITH THE DEADLINE
                $content = $data["blog_richtext_content"];

                echo "<p class='p-info'>"; echo $this -> displayIcon("bo-form-info-icon");echo"Si vous souhaitez ne rien modifier, alors laissez simplement le formulaire tel qu'il est ou revenez en arrière</p>";    

                echo "<div class='bo-form-img-wrapper'>";
                    echo "<img src='".mb_strimwidth($img_url,'9',strlen($img_url))."'>";
                echo "</div>";

                # I KNOW THAT I JUSTE COULD HAVE USE ONLY ONE ECHO FUNCTION, BUT FOR MY ORGANISATION AND READABILITY I PREFER USING AS MUCH ECHO AS I NEED
                echo "<div class='bo-child-wrapper bo-child-wrapper-border-purple padding-tiny'>";
                
                    #echo "<h2>Article : $title</h2>";
        
                    echo "<form class='bo-form' action='/BO-CMS/index.php?cms=blog&cat=send_update' method='POST' enctype='multipart/form-data'>";
                
                        echo "<input name='blog_id' value='$id' type='hidden'>";

                        ## DIVIDER
                        echo $this->displayDivider('3-dot');

                        ## TITLE INPUT
                        echo "<div class='bo-form-input-wrapper'>";

                            echo "<label class='bo-label'>";echo $this -> displayIcon("form-label-heading-icon");echo"Modifier le <span class='bo-label-span'>titre</span>.</label>";
                            echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"Il s'agit du titre de votre article de blog. Il est le premier élément de votre article à être mis en avant et ce peu importe la page sur laquelle se trouve vos utilisateurs. Alors si vous souhaitez vous assurer une audience, prenez bien soin de séléctionner un article qui attire l'attention. Tout ce que vous avez à faire c'est de changer le contenu de l'encadré ci-dessous</p>";    

                            echo '<input name="blog_title" type="text" class="bo-text-input" value="'.$title.'">';

                        echo "</div>";

                        ## DIVIDER
                        echo $this->displayDivider('3-dot');


                        ## DESC INPUT
                        echo "<div class='bo-form-input-wrapper'>";

                            echo "<label class='bo-label'>";echo $this -> displayIcon("form-label-resume-icon"); echo "Changez la <span class='bo-label-span'>description</span> de votre article.</label>";
                            echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"Il est question de rédiger une courte description de votre article. Un résumé qui se lit en moins de trente de seconde, c'est comme le dos d'un livre que vous souhaitez acheter à la fnac. Vous vous assurez toujours de connaître l'intrigue du livre avant de l'acheter !</p>";    
                            echo "<textarea name='blog_desc' class='bo-text-input bo-textarea-dec'>$description</textarea>";

                        echo "</div>";

                        ## DIVIDER
                        echo $this->displayDivider('3-dot');

                        ## 2 COL WRAPPER
                        echo "<div class='bo-grid bo-2col bo-1row'>";
                            ## CATEGORY INPUT
                            echo "<div class='bo-form-input-wrapper'>";

                                echo "<label class='bo-label'>";echo $this -> displayIcon("form-label-filter-icon"); echo " Sélectionnez la <span class='bo-label-span'>catégorie</span> pour votre article.</label>";
                                

                                ## SELECT WITH OPTIONS
                                echo "<select name='blog_category'>";

                                    echo "<option value='Marketing' ";if($category=="Marketing"){echo "selected";};echo ">Marketing</option>";
                                    echo "<option value='SEO' ";if($category=="SEO"){echo "selected";};echo ">SEO</option>";
                                    echo "<option value='Services' ";if($category=="Services"){echo "selected";};echo ">Services</option>";

                                echo "</select>";

                                echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"La catégorie de votre article est un élément important. Lorsqu'un utilisateur souhaite accéder à un type de contenu en particulier, il va filtrer ses recherches via différentes catégories pour ne récupérer que ce qui l'intéresse.</p>";    


                            echo "</div>";

                            ## BLOG IMAGE INPUT
                            echo "<div class='bo-form-input-wrapper'>";

                                echo "<label class='bo-label'>";echo $this -> displayIcon("form-label-img-icon")." Uploader une nouvelle <span class='bo-label-span'>image</span> de bannière</label>";
                                echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"La photo de bannière est importante, elle est (avec le titre) un des éléments le plus régulièrement mis en avant pour rendre la lecture de votre article attrayante. C'est comme les vignettes des vidéos youtubes que vous ne cessez de remarquer avant de cliquer sur la vidéo. </p>";    

                                echo "<label name='img_url' for='img_url' class='bo-form-file-label-button'>"; echo $this -> displayIcon("form-file-input");echo " &nbsp;&nbsp;Charger une nouvelle image </label>";
                                echo "<input name='blog_banner_img_url' id='img_url' type='file' class='bo-form-file-input'>";

                            echo "</div>";

                        echo "</div>";

                        ## DIVIDER
                        echo $this->displayDivider('3-dot');

                        ## BLOG RICHTEXT CONTENT
                        echo "<div class='bo-form-input-wrapper'>";

                            echo "<label class='bo-label'>Corrigez votre <span class='bo-label-span'>article</span> ici.</label>";
                            echo "<textarea name='blog_content' class='bo-text-input bo-textarea-richtext'>$content</textarea>";

                        echo "</div>";

                        ## DIVIDER
                        echo $this->displayDivider('3-dot');

                        ## SUBMIT BUTTON
                        echo "<label for='submit' class='bo-form-submit-label'>Confirmer les modifications "; echo $this -> displayIcon("form-label-checkmark-icon");echo"</label>";
                        echo "<input id='submit' class='bo-form-submit' type='submit' name='update' value='confirmed'>";
                    
                    echo "</form>";

                echo "</div>";

            } else if ($type == "case-study") {

                ## PROJECT GLOBAL INFOS
                $project_id = $data["project_id"];
                $project_client_name = $data["project_client_name"];
                $project_desc = $data["project_description"];
                $project_content = $data["project_richtext_content"];
                $project_type = $data["project_service_type"];

                $project_results_label = $data["project_results_title"];
                $project_results_stat = $data["project_results_stats"];

                $project_client_logo_url = $data["project_client_logo_url"];
                $project_banner_url = $data["project_banner_img_url"];


                echo "<p class='p-info'>"; echo $this -> displayIcon("bo-form-info-icon");echo"Si vous souhaitez ne rien modifier, alors laissez simplement le formulaire tel qu'il est ou revenez en arrière</p>";    

                echo "<div class='bo-form-img-wrapper'>";
                    echo "<img src='".mb_strimwidth($project_banner_url,'9',strlen($project_banner_url))."'>";
                echo "</div>";

                # I KNOW THAT I JUSTE COULD HAVE USE ONLY ONE ECHO FUNCTION, BUT FOR MY ORGANISATION AND READABILITY I PREFER USING AS MUCH ECHO AS I NEED
                echo "<div class='bo-child-wrapper bo-child-wrapper-border-purple padding-tiny'>";
                
                    #echo "<h2>Article : $title</h2>";
        
                    echo "<form class='bo-form' action='/BO-CMS/index.php?cms=case-study&cat=send_update' method='POST' enctype='multipart/form-data'>";
                
                        echo "<input name='project_id' value='$project_id' type='hidden'>";

                        ## DIVIDER
                        echo $this->displayDivider('3-dot');

                        ## TITLE INPUT
                        echo "<div class='bo-form-input-wrapper'>";

                            echo "<label class='bo-label'>";echo $this -> displayIcon("form-label-heading-icon");echo"Le <span class='bo-label-span'>nom de votre client</span> n'est pas bon ?</label>";
                            echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"Renseignez ici le nom de votre client. C'est toujours important de mettre ses clients en avants. Cela montre que l'on est fière des projets qu'on a réalisé pour eux et que nous n'avons pas peur de les mettre en avant.</p>";    

                            echo '<input name="project_client_name" type="text" class="bo-text-input" value="'.$project_client_name.'">';

                        echo "</div>";

                        ## DIVIDER
                        echo $this->displayDivider('3-dot');


                        ## DESC INPUT
                        echo "<div class='bo-form-input-wrapper'>";

                            echo "<label class='bo-label'>";echo $this -> displayIcon("form-label-resume-icon"); echo "Changez le titre <span class='bo-label-span'>description</span> de votre projet.</label>";
                            echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"Il s'agit du titre de votre projet. Il est le premier élément de votre article à être mis en avant et ce peu importe la page sur laquelle se trouve vos utilisateurs. Alors si vous souhaitez vous assurer une audience, prenez bien soin de séléctionner un titre qui attire l'attention. Tout ce que vous avez à faire c'est de changer le contenu de l'encadré ci-dessous</p>";    
                            echo '<input name="project_desc" class="bo-text-input" value="'.$project_desc.'">';

                        echo "</div>";

                        ## DIVIDER
                        echo $this->displayDivider('3-dot');

                        ## 2 COL WRAPPER
                        echo "<div class='bo-grid bo-2col bo-1row'>";
                            ## CATEGORY INPUT
                            echo "<div class='bo-form-input-wrapper'>";

                                echo "<label class='bo-label'>";echo $this -> displayIcon("form-label-filter-icon"); echo " Sélectionnez la <span class='bo-label-span'>catégorie de service</span> de votre projet.</label>";
                                

                                ## SELECT WITH OPTIONS
                                echo "<select name='project_category'>";

                                    echo "<option value='Publicité Payante' ";if($project_type=="Marketing"){echo "selected";};echo ">Publicité Payante</option>";
                                    echo "<option value='Social Marketing' ";if($project_type=="Social Marketing"){echo "selected";};echo ">Social Marketing</option>";
                                    echo "<option value='SEO' ";if($project_type=="SEO"){echo "selected";};echo ">SEO</option>";

                                echo "</select>";

                                echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"La catégorie de votre service est un élément important. Lorsqu'un utilisateur souhaite accéder à un type de contenu en particulier, il va filtrer ses recherches via différentes catégories pour ne récupérer que ce qui l'intéresse.</p>";    

                            echo "</div>";

                            ## PROJECT BANNER INPUT
                            echo "<div class='bo-form-input-wrapper'>";

                                echo "<label class='bo-label'>";echo $this -> displayIcon("form-label-img-icon")." Uploader une nouvelle <span class='bo-label-span'>image</span> de bannière</label>";
                                echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"La photo de bannière est importante, elle est (avec le titre) un des éléments le plus régulièrement mis en avant pour rendre la lecture de votre article attrayante. C'est comme les vignettes des vidéos youtubes que vous ne cessez de remarquer avant de cliquer sur la vidéo. </p>";    

                                echo "<label name='project_banner_img_url' for='project_banner_img_url' class='bo-form-file-label-button'>"; echo $this -> displayIcon("form-file-input");echo " &nbsp;&nbsp;Charger une nouvelle bannière</label>";
                                echo "<input name='project_banner_img_url' id='project_banner_img_url' type='file' class='bo-form-file-input'>";

                            echo "</div>";

                            ## PROJECT LOGO INPUT
                            echo "<div class='bo-form-input-wrapper'>";

                                echo "<label class='bo-label'>";echo $this -> displayIcon("form-label-img-icon")." Uploader un nouveau <span class='bo-label-span'>logo</span></label>";
                                echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"Il s'agit tout simplement du logo de l'entreprise pour laquelle vous avez réalisé la mission</p>";    

                                echo "<label name='project_client_logo_url' for='project_client_logo_url' class='bo-form-file-label-button'>"; echo $this -> displayIcon("form-file-input");echo " &nbsp;&nbsp;Charger le logo de votre client ici</label>";
                                echo "<input name='project_client_logo_url' id='project_client_logo_url' type='file' class='bo-form-file-input'>";

                            echo "</div>";

                            ## DESC INPUT
                            echo "<div class='bo-form-input-wrapper'>";

                                echo "<label class='bo-label'>";echo $this -> displayIcon("form-label-chart"); echo "Renseignez une <span class='bo-label-span'>statistique</span> sur votre projet.</label>";
                                echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"Renseignez une stats en lien avec votre projet. Cela peut-être le temps qu'il a pris à être développé. Où alors les résultats qu'il a apporté à votre clientèle. Il est toujours bon de communiquez avec des chiffres et de les mettres en avant.</p>";    
                                
                                echo "<label class='bo-label'>Nom de la statistique</label>";
                                echo '<input name="project_results_label" class="bo-text-input" value="'.$project_results_label.'">';
                                
                                echo "<label class='bo-label'>Chiffre de la statistique</label>";
                                echo '<input name="project_results_stat" class="bo-text-input" value="'.$project_results_stat.'">';


                            echo "</div>";

                        echo "</div>";

                        ## DIVIDER
                        echo $this->displayDivider('3-dot');

                        ## BLOG RICHTEXT CONTENT
                        echo "<div class='bo-form-input-wrapper'>";

                            echo "<label class='bo-label'>Corrigez votre <span class='bo-label-span'>article</span> ici.</label>";
                            echo "<textarea name='project_content' class='bo-text-input bo-textarea-richtext'>$project_content</textarea>";

                        echo "</div>";

                        ## DIVIDER
                        echo $this->displayDivider('3-dot');

                        ## SUBMIT BUTTON
                        echo "<label for='submit' class='bo-form-submit-label'>Confirmer les modifications "; echo $this -> displayIcon("form-label-checkmark-icon");echo"</label>";
                        echo "<input id='submit' class='bo-form-submit' type='submit' name='update' value='confirmed'>";
                    
                    echo "</form>";

                echo "</div>";


            }

        }

        public function getDeleteForm($type,$data){

            switch($type){
                case "blog":

                    $id = $data["blog_id"];

                    echo "<div class='bo-child-wrapper bo-child-wrapper-border-red padding-tiny'>";
            
                    #echo "<h2>Article : $title</h2>";
    
                        echo "<form class='bo-form' action='/BO-CMS/index.php?cms=blog&cat=send_drop' method='POST'>";
                
                            echo $this->displayDivider('3-dot-red');
                        
                            echo "<input name='blog_id' value='$id' type='hidden'>";

                            echo "<div class='bo-form-input-wrapper'>";

                                echo "<h2>Êtes vous sûr de vouloir supprimer cet article ?</h2>";
                                echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"Ceci est un choix définitif. Vous ne pourrez jamais récupérer un article que vous avez supprimé. Donc nous vous recommendons sérieusement d'y réfléchir réellement avant d'entamer une telle décision aussi destructrice ! Vous avez toujours le temps de réfléchir si jamais vous n'êtes pas sûr :)</p>";    

                            echo "</div>";

                            echo $this->displayDivider('3-dot-red');

                            echo "<label for='submit' class='bo-form-submit-label red'>Confirmer la suppression de l'article "; echo $this -> displayIcon("form-label-cross-icon");echo"</label>";
                            echo "<input id='submit' class='bo-form-submit' type='submit' name='drop' value='confirmed'>";

                        echo "</form>";

                    echo "</div>";


                    break;

                case "case-study":

                    $id = $data["project_id"];

                    echo "<div class='bo-child-wrapper bo-child-wrapper-border-red padding-tiny'>";
            
                    #echo "<h2>Article : $title</h2>";
    
                        echo "<form class='bo-form' action='/BO-CMS/index.php?cms=case-study&cat=send_drop' method='POST'>";
                
                            echo $this->displayDivider('3-dot-red');
                        
                            echo "<input name='project_id' value='$id' type='hidden'>";

                            echo "<div class='bo-form-input-wrapper'>";

                                echo "<h2>Êtes vous sûr de vouloir supprimer ce projet ?</h2>";
                                echo "<p>"; echo $this -> displayIcon("bo-form-info-icon");echo"Ceci est un choix définitif. Vous ne pourrez jamais récupérer un projet que vous avez supprimé. Donc nous vous recommendons sérieusement d'y réfléchir réellement avant d'entamer une telle décision aussi destructrice ! Vous avez toujours le temps de réfléchir si jamais vous n'êtes pas sûr :)</p>";    

                            echo "</div>";

                            echo $this->displayDivider('3-dot-red');

                            echo "<label for='submit' class='bo-form-submit-label red'>Confirmer la suppression du projet "; echo $this -> displayIcon("form-label-cross-icon");echo"</label>";
                            echo "<input id='submit' class='bo-form-submit' type='submit' name='drop' value='confirmed'>";

                        echo "</form>";

                    echo "</div>";

                    break;
            }

            



        }




        # Rewrite the datetime string based on timestamp generated by SQL
        public function rewriteDatetime($datetime){


            # DEFAULT TIME STAMP STRING FORMAT : YYYY-MM-DD
            $day = $datetime[8].$datetime[9];
            $month = $datetime[5].$datetime[6];
            $year = $datetime[0].$datetime[1].$datetime[2].$datetime[3];
            $rewriteMonth = "";

            switch($month){
                case "01":
                    $rewriteMonth = "Janvier";
                    break;
                case "02":
                    $rewriteMonth = "Février";
                    break;
                case "03":
                    $rewriteMonth = "Mars";
                    break;
                case "04":
                    $rewriteMonth = "Avril";
                    break;
                case "05":
                    $rewriteMonth = "Mai";
                    break;
                case "06":
                    $rewriteMonth = "Juin";
                    break;
                case "07":
                    $rewriteMonth = "Juillet";
                    break;
                case "08":
                    $rewriteMonth = "Aout";
                    break;
                case "09":
                    $rewriteMonth = "Septembre";
                    break;
                case "10":
                    $rewriteMonth = "Octobre";
                    break;
                case "11":
                    $rewriteMonth = "Novembre";
                    break;
                case "12":
                    $rewriteMonth = "Décembre";
                    break;

            }

            $rewrite = $day." ".$rewriteMonth." ".$year;
            return $rewrite;
        }
        


    }

?>
