<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require './api/bo-cms-CSS.php'; ?>
    <?php require_once './api/bo-cms-Config.php';?>
    <link rel="stylesheet" href="./content/CSS/html-framework.css">
</head>
<body>
    <main class="bo-spacing">
        <section class="bo-section">
            <nav class="bo-navbar">
                <div class="bo-navbar-wrapper">
                    <div class="bo-current-icon-wrapper">
                        <img src="<?php $vue -> display_Current_Nav_Icon(); ?>">      
                    </div>
                    <div class="bo-navbar-links-list">
                        <a href="<?php $base_url?>/BO-CMS/index.php" class="bo-navbar-link"><svg class="bo-navbar-link-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 17H16M11.0177 2.764L4.23539 8.03912C3.78202 8.39175 3.55534 8.56806 3.39203 8.78886C3.24737 8.98444 3.1396 9.20478 3.07403 9.43905C3 9.70352 3 9.9907 3 10.5651V17.8C3 18.9201 3 19.4801 3.21799 19.908C3.40973 20.2843 3.71569 20.5903 4.09202 20.782C4.51984 21 5.07989 21 6.2 21H17.8C18.9201 21 19.4802 21 19.908 20.782C20.2843 20.5903 20.5903 20.2843 20.782 19.908C21 19.4801 21 18.9201 21 17.8V10.5651C21 9.9907 21 9.70352 20.926 9.43905C20.8604 9.20478 20.7526 8.98444 20.608 8.78886C20.4447 8.56806 20.218 8.39175 19.7646 8.03913L12.9823 2.764C12.631 2.49075 12.4553 2.35412 12.2613 2.3016C12.0902 2.25526 11.9098 2.25526 11.7387 2.3016C11.5447 2.35412 11.369 2.49075 11.0177 2.764Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        <a href="<?php $base_url?>/BO-CMS/index.php?e-commerce" class="bo-navbar-link"><svg class="bo-navbar-link-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13.5295 8.35186C12.9571 8.75995 12.2566 9 11.5 9C9.567 9 8 7.433 8 5.5C8 3.567 9.567 2 11.5 2C12.753 2 13.8522 2.65842 14.4705 3.64814M6 20.0872H8.61029C8.95063 20.0872 9.28888 20.1277 9.61881 20.2086L12.3769 20.8789C12.9753 21.0247 13.5988 21.0388 14.2035 20.9214L17.253 20.3281C18.0585 20.1712 18.7996 19.7854 19.3803 19.2205L21.5379 17.1217C22.154 16.5234 22.154 15.5524 21.5379 14.9531C20.9832 14.4134 20.1047 14.3527 19.4771 14.8103L16.9626 16.6449C16.6025 16.9081 16.1643 17.0498 15.7137 17.0498H13.2855H14.8311C15.7022 17.0498 16.4079 16.3633 16.4079 15.5159V15.2091C16.4079 14.5055 15.9156 13.892 15.2141 13.7219L12.8286 13.1417C12.4404 13.0476 12.0428 13 11.6431 13C10.6783 13 8.93189 13.7988 8.93189 13.7988L6 15.0249M20 6.5C20 8.433 18.433 10 16.5 10C14.567 10 13 8.433 13 6.5C13 4.567 14.567 3 16.5 3C18.433 3 20 4.567 20 6.5ZM2 14.6V20.4C2 20.9601 2 21.2401 2.10899 21.454C2.20487 21.6422 2.35785 21.7951 2.54601 21.891C2.75992 22 3.03995 22 3.6 22H4.4C4.96005 22 5.24008 22 5.45399 21.891C5.64215 21.7951 5.79513 21.6422 5.89101 21.454C6 21.2401 6 20.9601 6 20.4V14.6C6 14.0399 6 13.7599 5.89101 13.546C5.79513 13.3578 5.64215 13.2049 5.45399 13.109C5.24008 13 4.96005 13 4.4 13H3.6C3.03995 13 2.75992 13 2.54601 13.109C2.35785 13.2049 2.20487 13.3578 2.10899 13.546C2 13.7599 2 14.0399 2 14.6Z"  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        <a href="<?php $base_url?>/BO-CMS/index.php?newsletter" class="bo-navbar-link"><svg class="bo-navbar-link-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 7L10.1649 12.7154C10.8261 13.1783 11.1567 13.4097 11.5163 13.4993C11.8339 13.5785 12.1661 13.5785 12.4837 13.4993C12.8433 13.4097 13.1739 13.1783 13.8351 12.7154L22 7M6.8 20H17.2C18.8802 20 19.7202 20 20.362 19.673C20.9265 19.3854 21.3854 18.9265 21.673 18.362C22 17.7202 22 16.8802 22 15.2V8.8C22 7.11984 22 6.27976 21.673 5.63803C21.3854 5.07354 20.9265 4.6146 20.362 4.32698C19.7202 4 18.8802 4 17.2 4H6.8C5.11984 4 4.27976 4 3.63803 4.32698C3.07354 4.6146 2.6146 5.07354 2.32698 5.63803C2 6.27976 2 7.11984 2 8.8V15.2C2 16.8802 2 17.7202 2.32698 18.362C2.6146 18.9265 3.07354 19.3854 3.63803 19.673C4.27976 20 5.11984 20 6.8 20Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        <a href="<?php $base_url?>/BO-CMS/index.php?cms=blog&cat=list" class="bo-navbar-link"><svg class="bo-navbar-link-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 18L19.9999 19.094C19.4695 19.6741 18.7502 20 18.0002 20C17.2501 20 16.5308 19.6741 16.0004 19.094C15.4693 18.5151 14.75 18.1901 14.0002 18.1901C13.2504 18.1901 12.5312 18.5151 12 19.094M3 20H4.67454C5.16373 20 5.40832 20 5.63849 19.9447C5.84256 19.8957 6.03765 19.8149 6.2166 19.7053C6.41843 19.5816 6.59138 19.4086 6.93729 19.0627L19.5001 6.49998C20.3285 5.67156 20.3285 4.32841 19.5001 3.49998C18.6716 2.67156 17.3285 2.67156 16.5001 3.49998L3.93726 16.0627C3.59136 16.4086 3.4184 16.5816 3.29472 16.7834C3.18506 16.9624 3.10425 17.1574 3.05526 17.3615C3 17.5917 3 17.8363 3 18.3255V20Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        <a href="<?php $base_url?>/BO-CMS/index.php?pages" class="bo-navbar-link"><svg class="bo-navbar-link-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17 17L22 12L17 7M7 7L2 12L7 17M14 3L10 21" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                    </div>
                    <div class="bo-navbar-links-list">
                        <a href="#" class="bo-navbar-link close"><svg class="bo-navbar-link-icon close" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.5708 20C19.8328 20 20.8568 18.977 20.8568 17.714V13.143L21.9998 12L20.8568 10.857V6.286C20.8568 5.023 19.8338 4 18.5708 4M5.429 4C4.166 4 3.143 5.023 3.143 6.286V10.857L2 12L3.143 13.143V17.714C3.143 18.977 4.166 20 5.429 20M15 9L9 15M9 9L15 15" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                    </div>
                </div>
            </nav>
            <div class="bo-searchbar">
                <div class="bo-searchbar-wrapper">
                    <div class="bo-searchbar-logo-wrapper">
                        <img class="bo-searchbar-logo" src="<?php $_SERVER['SERVER_NAME']?>/BO-CMS/content/SVG/bo-logo_1.svg">
                    </div>
                    <div class="bo-searchbar-divider"></div>
                    <div class="bo-searchbar-links-list">
                        <?php $vue -> display_Searchbar_Links(); ?>
                    </div>
                    
                </div>
            </div>
            <div class="bo-wrapper">
                <div class="bo-flexbox">
                    
                    <?php require "api/bo-cms-Controller.php"; ?>

                    <div class="bo-grid bo-2col bo-1row">
                                                
                    </div>
                    <div class="bo-child-wrapper">
                    </div>
                    <div class="bo-child-wrapper">

                    </div>
                    <div class="bo-child-wrapper">

                    </div>
                    <div class="bo-child-wrapper">

                    </div>
                    <div class="bo-child-wrapper">

                    </div>
                    <div class="bo-child-wrapper">

                    </div>
                    <div class="bo-child-wrapper">

                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>