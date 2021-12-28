<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?></title>
    <link type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
	<link type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <figure>
            <a href="index.html"><img id="logo" src="<?php bloginfo('template_url'); ?>/media/veni-logo.png" height="10%" width="10%" alt="Veni Logo"></a>
        </figure>
    </header>
    <nav>
        <div class="navbar navbar-expand-sm navbar-light bg-secondary mx-2 py-0">
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="leistungen.html">
                            <b>Unsere Leistungen</b></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active" id="navbarWerSindWir" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <b>Wer sind wir?</b>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarWerSindWir">
                            <li><a class="dropdown-item" href="vision.html">Unsere Vision</a></li>
                            <li><a class="dropdown-item" href="about.html">Über uns</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active" id="navbarNachhaltigkeit" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <b>Rund um Nachhaltigkeit</b>
                        </a>
                        <ul class="dropdown-menu bg-light my-3" aria-labelledby="navbarNachhaltigkeit">
                            <li><a class="dropdown-item" href="glossar.html">Nachhaltigkeitsglossar</a></li>
                            <li><a class="dropdown-item" href="blog.html">Nachhaltigkeitsblog</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"><b>Mitglied werden</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="kontakt.html"><b>Kontakt</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    