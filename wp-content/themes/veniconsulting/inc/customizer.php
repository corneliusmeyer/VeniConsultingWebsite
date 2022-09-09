<?php

function veni_customize_register($wp_customize)
{
    // Partner Menü erstellen
    $wp_customize->add_section('partner', array(
        'title'   => __('Veni Partner', 'veni consulting'),
        'description' => sprintf(__('Hier können Informationen zu den Partnern hinzugefügt werden.')),
        'priority' => 110
    ));
	
	//Partner Bild 1 Option zu Menü hinzufügen
    $wp_customize->add_setting('partner1_image', array(
        'default'   => get_bloginfo('template_directory').'/img/showcase.jpg',
        'type'      => 'theme_mod'
      ));

	//Partner Bild 1 Einstellungsmöglichkeiten hinzufügen
    $wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize, 'partner1_image', array(
			'label'   => __('Bild für den ersten Partner', 'veni consulting'),
			'section' => 'partner',
			'settings' => 'partner1_image',
			'priority'  => 1
		)
    ));

	//Url Option hinzufügen
    $wp_customize->add_setting('partner1_url', array(
        'default'   => _x('https://bdsu.de/', 'veni consulting'),
        'type'      => 'theme_mod'
    ));

	//Url Einstellungsmöglichkeiten hinzufügen
    $wp_customize->add_control('partner1_url', array(
        'label'   => __('Link des ersten Partners', 'veni consulting'),
        'section' => 'partner',
        'priority'  => 2
    ));
	
	//Partner Bild 2 Option zu Menü hinzufügen
    $wp_customize->add_setting('partner2_image', array(
        'default'   => get_bloginfo('template_directory').'/img/showcase.jpg',
        'type'      => 'theme_mod'
      ));

	//Partner Bild 2 Einstellungsmöglichkeiten hinzufügen
    $wp_customize->add_control(new WP_Customize_Image_Control(
		$wp_customize, 'partner2_image', array(
			'label'   => __('Bild für den zweiten Partner', 'veni consulting'),
			'section' => 'partner',
			'settings' => 'partner2_image',
			'priority'  => 4
		)
    ));

	//Url Option hinzufügen
    $wp_customize->add_setting('partner2_url', array(
        'default'   => _x('https://entrepreneurs4future.de/', 'veni consulting'),
        'type'      => 'theme_mod'
    ));

	//Url Einstellungsmöglichkeiten hinzufügen
    $wp_customize->add_control('partner2_url', array(
        'label'   => __('Link des zweiten Partners', 'veni consulting'),
        'section' => 'partner',
        'priority'  => 5
    ));

    // Banner Optionen
    $wp_customize->add_section('banner', array(
        'title'   => __('Veni Banner', 'veni consulting'),
        'description' => sprintf(__('Hier können Bannertexte verändert werden.')),
        'priority' => 100
    ));

	$wp_customize->add_setting('banner_1', array(
        'default'   => _x('Kontaktieren Sie uns jetzt für ein Erstgespräch
		und lassen Sie uns gemeinsam mehr Nachhaltigkeit in Ihr Unternehemen bringen!', 'wpbootstrap'),
        'type'      => 'theme_mod'
    ));
  
	$wp_customize->add_control('banner_1', array(
		'label'   => __('Banner Landingpage', 'veni consulting'),
		'section' => 'banner',
		'priority'  => 1
	));

	$wp_customize->add_setting('banner_2', array(
		'default'   => _x('Kommen Sie zu uns, wir helfen gerne!', 'veni consulting'),
		'type'      => 'theme_mod'
	));

	$wp_customize->add_control('banner_2', array(
		'label'   => __('Banner About', 'veni consulting'),
		'section' => 'banner',
		'priority'  => 2
	));
}

//customizer Hook aufrufen
add_action('customize_register', 'veni_customize_register');
