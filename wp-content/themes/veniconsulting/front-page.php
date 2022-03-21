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
                <h1 id="landing-img-h1">Veni Consulting.</h1>
                <h2 id="landing-img-h2">Die Beratung, um Ihr Unternehmen nachhaltiger zu gestalten</h2>
            </div>
            <svg id="scroll-hint" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
            </svg>
            <script>
                document.addEventListener('scroll', function(e) {
                    var element = document.getElementById("scroll-hint");
                    element.remove();
                });
            </script>
        </div>
    </header>
    <nav class="navbar navbar-expand-md navbar-light bg-light py-0 border border-dark my-3 mx-5 rounded-1" role="navigation">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', get_template()); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>
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
            <div class="alert alert-success border border-secondary text-center my-1 py-2 align-middle text-dark">
                Kontaktieren Sie uns jetzt für ein Erstgespräch und lassen Sie uns gemeinsam mehr Nachhaltigkeit in Ihr Unternehemen bringen!
            </div>
            <?php if (have_posts()) {
                while (have_posts())
                    the_post();
                the_content();
            }
            ?>
            <?php get_footer(); ?>