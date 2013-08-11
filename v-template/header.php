<!DOCTYPE html>
<html lang="en">

    <head>
    	        <!-- Javascript -->
        <script src="assets/js/jquery-1.8.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.flexslider.js"></script>
        <script src="assets/js/jquery.tweet.js"></script>
        <script src="assets/js/jflickrfeed.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/jquery.quicksand.js"></script>
        <script src="assets/prettyPhoto/js/jquery.prettyPhoto.js"></script>
        <script src="assets/js/scripts.js"></script>


        <meta charset="utf-8">
        <title><?php echo "$pagetitle"; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="">
        <meta name="description" content="<?php echo $metaTags[0]['description'] ?>" />
        <meta name="keywords" content="<?php echo $metaTags[0]['keyword'] ?>" />


        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/prettyPhoto/css/prettyPhoto.css">
        <link rel="stylesheet" href="assets/css/flexslider.css">
        <link rel="stylesheet" href="assets/css/font-awesome.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/contact_form_style.css">


        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Header -->
        <div class="container">
            <div class="header row">
                <div class="span12">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <h1>
                                <a class="brand" href="index.html">Andia - a super cool design agency...</a>
                            </h1>
                            <div class="nav-collapse collapse">
                                <ul class="nav pull-right">
                                    <li <?php if($pagetitle == 'home'){echo 'class="current-page"';}?>>
                                        <a href="index.php"><i class="icon-home"></i><br />Home</a>
                                    </li>
                                    <li <?php if($pagetitle == 'portfolio'){echo 'class="current-page"';}?>>
                                        <a href="portfolio.php"><i class="icon-camera"></i><br />Portfolio</a>
                                    </li>
                                    <li <?php if($pagetitle == 'login'){echo 'class="current-page"';}?>>
                                        <a href="login.php"><i class="icon-comments"></i><br />Login</a>
                                    </li>
                                    
                                    <li <?php if($pagetitle == 'services'){echo 'class="current-page"';}?>>
                                        <a href="services.php"><i class="icon-tasks"></i><br />Services</a>
                                    </li>

                                    <li <?php if($pagetitle == 'about-us'){echo 'class="current-page"';}?>>
                                        <a href="about.php"><i class="icon-user"></i><br />About</a>
                                    </li>
                                    <li <?php if($pagetitle == 'contact-us'){echo 'class="current-page"';}?>>
                                        <a href="contact.php"><i class="icon-envelope-alt"></i><br />Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

