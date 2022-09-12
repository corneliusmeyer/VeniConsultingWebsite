<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div id="landing-header-div">
            <div id="landing-img-text">
                <h1 id="landing-img-h1"><?php echo get_bloginfo('name'); ?></h1>
                <h2 id="landing-img-h2"><?php echo get_bloginfo('description'); ?></h2>
            </div>
            <svg id="scroll-hint" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
            <script>
				//Entfernt den Scrollhint, nachdem gescrollt wurde
                document.addEventListener('scroll', function(e) {
                    var element = document.getElementById("scroll-hint");
                    element.remove();
                });
            </script>
        </div>
    </header>
	
	<!-- Navigationsbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light py-0 border border-dark my-3 mx-5 rounded-1" role="navigation">
		<!-- Einbinden der Menüinhalte aus Wordpress  -->
        <?php
        wp_nav_menu(array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav float-none d-flex justify-content-around w-100',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ));
        ?>
    </nav>
	
    <main>
        <div class="container py-2">
			<!-- Der Banner der auf der Landingpage angezeigt werden soll -->
            <div class="alert alert-success border border-secondary text-center my-3 py-2 align-middle text-dark">
                <?php echo get_theme_mod('banner_1') ?>
            </div>
			<!-- Wordpress Schleife zum Abfragen des Seiteninhalts -->
            <?php if (have_posts()) {
					while (have_posts()) {
						the_post();
						the_content();
					}
				  }	
            ?>
<!-- Den Footer einbinden -->
<?php get_footer(); ?>