<!doctype html>

<html lang="fr" class="no-js">
<head>
    <title>Les Cr&eacute;ations La F&eacute;e:</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <?php wp_head(); ?>
</head>
<body>
<!-- Container -->
<div id="container">
<!-- Header
        ================================================== -->
<header class="clearfix">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="logo" href="/"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" height="50" alt="logo"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right navigate-section">
                    <li class="megadrop"><a class="active" href="/">Accueil</a></li>
                    <li><a href="#">&Agrave; propos</a></li>
                    <li class="megadrop"><a href="#">Nos produits</a>
                        <div class="megadrop-down">
                            <div class="dropdown">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h2>Carterie</h2>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul>
                                                    <?php wp_nav_menu(array('menu' => 'carterie', 'container' => false,));?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h2>Papeterie</h2>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul>
                                                    <?php wp_nav_menu(array('menu' => 'papeterie', 'container' => false,));?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h2>Accessoires</h2>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul>
                                                    <?php wp_nav_menu(array('menu' => 'accessoires', 'container' => false,));?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li><a href=#">Actualit&eacute;s &amp; Nouveaut&eacute;s</a></li>
                    <li><a href="nous-contacter">Contact</a></li>
                    <li><a href="http://www.facebook.com/Cr&eacute;ations-La-F&eacute;e-315273181878928" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <!--<li><a href="#"><i class="fa fa-search fa-lg"></i></a></li>-->
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
<!-- End Header -->