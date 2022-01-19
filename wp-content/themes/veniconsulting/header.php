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
        <figure>
            <?php if (!is_home()) : ?>
                <a href="<?php echo home_url(); ?>"><img id="logo" src="<?php bloginfo('template_url'); ?>/media/veni-logo.png" alt="Veni Logo"></a>
            <?php else : ?>
                <img id="veni-background" src="<?php bloginfo('template_url'); ?>/media/veni-background.jpg" alt="Veni Hintergrundbild" />
            <?php endif; ?>
        </figure>
    </header>
    <nav class="navbar navbar-expand-md navbar-light bg-light py-0 border border-dark m-1 rounded-1" role="navigation">
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
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ));
        ?>
    </nav>
    <main>
    <div class="container py-2">
    <?php if (!is_home()) : ?>
        <h2 class="py-4"><?php echo get_the_title() ?></h2>
    <?php endif; ?>

