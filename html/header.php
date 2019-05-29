<html lang="en">
    <head>
        <title>
            <?php echo $title; ?>
        </title>
        <!-- COMMON LINKS FOR ALL THE PAGES -->
        
        <!-- SCRIPTS: COMMON -->
        <script src="../js/materialize.js" defer></script>
        <script src="../js/common.js" defer></script>
        <!-- SCRIPTS: EACH SITE -->
        <script src="../js/index.js" defer></script>
        <script src="../js/team.js" defer></script>
        <script src="../js/contact.js" defer></script>
        <script src="../js/gallery.js" defer></script>
        <script src="../js/appointment.js" defer></script>
        <script src="../js/article.js" defer></script>
        <!-- CSS : COMMON -->
        <link rel="stylesheet" type="text/css" href="../css/materialize.css">
        <link rel="stylesheet" type="text/css" href="../css/common.css">
        <!-- CSS: FOR EACH SITE -->
        <link rel="stylesheet" type="text/css" href="../css/index.css">
        <link rel="stylesheet" type="text/css" href="../css/team.css">
        <link rel="stylesheet" type="text/css" href="../css/contact.css">
        <link rel="stylesheet" type="text/css" href="../css/gallery.css">
        <link rel="stylesheet" type="text/css" href="../css/appointment.css">
        <link rel="stylesheet" type="text/css" href="../css/article.css">
        <!-- ICONS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- META VIEWPORT -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

    <body onload=" M.toast( {html: '<?php echo $message; ?>'} ) ">
        <!--****************************-->
        <!--** BLACKBOX BEFORE NAVBAR **-->
        <!--************************************************************************************-->
        <div id="navbar-blackbox">
        </div>

        <div id="navbar-appoint-button-container">
            <a href="#" id="navbar-appoint-button">
                <i class="fa fa-calendar"></i>
                Va puteti programa aici
            </a>
        </div>

        <!--************-->
        <!--** NAVBAR **-->
        <!--************************************************************************************-->
        <!--NAVBAR WRAPPER, THIS IS ACTUALLY THE CONTAINER THAT GETS THE MARGINS-->
        <div id="navbar-wrapper">
            <div id="navbar-container">
                <!-- DROPDOWN MENU -->
                <a id="navbar-dropdown-button" class='dropdown-trigger navbar-buttons' href='#' data-target='dropdown_menu'>
                    <i id="navbar-menu-icon" class="material-icons navbar-icons">menu</i>
                </a>
                <ul id='dropdown_menu' class='dropdown-content'>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./team.php">Team</a></li>
                    <li><a href="./article.php">Articles</a></li>
                    <li><a href="./appointment.php">Programare</a></li>
                    <li><a href="./contact.php">Contact</a></li>
                    <li><a href="./gallery.php">Gallery</a></li>
                </ul>

                <!-- LOGO -->
                <img id="navbar-logo" src="../images/common/logo_transparent.png">

                <!--SEARCH BAR BUTTON-->
                <a id="navbar-button-search" class="navbar-buttons">
                    <!--SEARCH BAR ICON-->
                    <i id="navbar-search-icon" class="material-icons navbar-icons">search</i>
                </a>

                <!--SEARCH BAR CONTAINER
                <input id="navbar-input-search" class="navbar-elements" type="text" class="validate">
                -->
            </div>
        </div>

        <!--***********************-->
        <!--** PARALAX CONTAINER **-->
        <!--************************************************************************************-->
        <div class="parallax-container">
            <div class="parallax">
                <img src="../images/common/cover.png">
            </div>
        </div>