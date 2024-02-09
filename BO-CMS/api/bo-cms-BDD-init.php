<?php 

    require_once '../librairies/Medoo.php';
    use Medoo\Medoo;

    try{

        $database = new Medoo([
            'type' => 'mysql',
            'host' => 'mysql-promote-cms.alwaysdata.net',
            'database' => 'promote-cms_bdd',
            'username' => '347331',
            'password' => '3kzJ&@tCzKzd3JF7'
        ]);
        
        // CREATE SERVICE CMS 
        $database->create("cms_services",[

            // SERVICE BDD ID AND INFOS
            "service_id" => [
                "INT",
                "NOT NULL",
                "AUTO_INCREMENT",
                "PRIMARY KEY"
            ],
            "service_url" => [
                "TEXT",
                "NOT NULL"
            ],
            "service_name" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_desc" => [
                "TEXT",
                "NOT NULL"
            ],

            // FIRST SECTION (01 NOS SERVICES) HEADING 
            "service_section_01_title" => [
                "TINYTEXT",
                "NOT NULL"
            ],

            // CARD 1
            "service_section_01_card1_title" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_01_card1_desc" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_01_card1_img_url" => [
                "TEXT",
                "NOT NULL"
            ],

            // CARD 2
            "service_section_01_card2_title" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_01_card2_desc" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_01_card2_img_url" => [
                "TEXT",
                "NOT NULL"
            ],

            // CARD 3
            "service_section_01_card3_title" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_01_card3_desc" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_01_card3_img_url" => [
                "TEXT",
                "NOT NULL"
            ],

            // CARD 4
            "service_section_01_card4_title" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_01_card4_desc" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_01_card4_img_url" => [
                "TEXT",
                "NOT NULL"
            ],

            // CARD 5
            "service_section_01_card5_title" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_01_card5_desc" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_01_card5_img_url" => [
                "TEXT",
                "NOT NULL"
            ],

            // CARD 6
            "service_section_01_card6_title" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_01_card6_desc" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_01_card6_img_url" => [
                "TEXT",
                "NOT NULL"
            ],

            // SECOND SECTION (A PROPOS DE CE SERVICE)
            "service_section_02_heading" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_02_desc" => [
                "TEXT",
                "NOT NULL"
            ],
            "service_section_02_advantage01" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_02_advantage02" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_02_advantage03" => [
                "TINYTEXT",
                "NOT NULL"
            ],

            // THIRD SECTION (PROCESS)
            "service_section_03_heading" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_03_desc" => [
                "TEXT",
                "NOT NULL"
            ],

                // THIRD SECTION CHECKMARKS

            "service_section_03_advantage01" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_03_advantage02" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_03_advantage03" => [
                "TINYTEXT",
                "NOT NULL"
            ],

                // THIRD SECTION PROCESS LIST
            
            // FIRST PROCESS
            "service_section_03_process01_heading" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_03_process01_desc" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_03_process01_img_url" => [
                "TEXT",
                "NOT NULL"
            ],

            // SECOND PROCESS
            "service_section_03_process02_heading" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_03_process02_desc" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_03_process02_img_url" => [
                "TEXT",
                "NOT NULL"
            ],

            // THIRD PROCESS
            "service_section_03_process03_heading" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_03_process03_desc" => [
                "TINYTEXT",
                "NOT NULL"
            ],
            "service_section_03_process03_img_url" => [
                "TEXT",
                "NOT NULL"
            ]
            
            ]);

            // GENERATES BLOG CMS TABLE
            $database->create("cms_blog",[

                "blog_id" => [
                    "INT",
                    "NOT NULL",
                    "AUTO_INCREMENT",
                    "PRIMARY KEY"
                ],
                "blog_title" => [
                    "TINYTEXT",
                    "NOT NULL"
                ],
                "blog_desc" => [
                    "TEXT",
                    "NOT NULL"
                ],
                "blog_category" => [
                    "TINYTEXT",
                    "NOT NULL"
                ],
                "blog_banner_img_url" => [
                    "TEXT",
                    "NOT NULL"
                ],
                "blog_writting_datetime" => [
                    "TIMESTAMP",
                    "NOT NULL",
                    "default",
                    "CURRENT_TIMESTAMP"
                ],
                "blog_author_id" => [
                    "INT",
                    "NOT NULL"
                ],
                "blog_richtext_content" => [
                    "MEDIUMTEXT",
                    "NOT NULL"
                ]

            ]);

            $database -> create("cms_projects",[
                "project_id" => [
                    "INT",
                    "NOT NULL",
                    "AUTO_INCREMENT",
                    "PRIMARY KEY"
                ],
                "project_client_name" => [
                    "TINYTEXT",
                    "NOT NULL"
                ],
                "project_client_logo_url" => [
                    "TEXT",
                    "NOT NULL"
                ],
                "project_service_type" => [
                    "TINYTEXT",
                    "NOT NULL"
                ],
                "project_results_title" => [
                    "TINYTEXT",
                    "NOT NULL"
                ],
                "project_results_stats" => [
                    "TINYTEXT",
                    "NOT NULL"
                ],
                "project_description" => [
                    "TEXT",
                    "NOT NULL"
                ],
                "project_description" => [
                    "TEXT",
                    "NOT NULL"
                ]
                "project_banner_img_url" => [
                    "TEXT",
                    "NOT NULL"
                ],
                "project_datetime" => [
                    "TIMESTAMP",
                    "NOT NULL",
                    "default",
                    "CURRENT_TIMESTAMP"
                ]
                ]);


    } catch(Exception $e) {
        print("Error : ".$e);
    }



?>