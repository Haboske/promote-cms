<header class="navbar">
    <div class="wrapper display-flex flex-row align-center large-gap">
        <div class="logo-wrapper">
            <img class="navbar-logo" src="content/SVG/Logo.svg">
        </div>
        <nav class="navbar-links-wrapper">
            <a class="<?php if($_SERVER['PHP_SELF'] == "/index.php"){echo"navbar-link-current";}else{echo"navbar-link";}?> " href="index.php">Accueil</a>
            <a class="<?php if($_SERVER['PHP_SELF'] == "/about.php"){echo"navbar-link-current";}else{echo"navbar-link";}?> " href="about.php">A Propos</a>
            <a class="<?php if($_SERVER['PHP_SELF'] == "/service-cms.php"){echo"navbar-link-current";}else{echo"navbar-link";}?> " href="service-cms.php">Services</a>
            <a class="<?php if($_SERVER['PHP_SELF'] == "/blog-cms.php"){echo"navbar-link-current";}else{echo"navbar-link";}?> " href="blog-cms.php">Blog</a>
        </nav>
    </div>
    
    <div class="wrapper">
        <a class="button black small">Démarrer</a>
    </div>
</header>
