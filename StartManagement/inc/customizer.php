<?php
/**
 * parallax-one Theme Customizer
 *
 * @package parallax-one
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function startmanagement_customize_register( $wp_customize ) {
	/********************************************************/
	/******************** ABOUT OPTIONS  ********************/
	/********************************************************/

	$wp_customize->add_section( 'parallax_one_about_section' , array(
			'title'       => esc_html__( 'About section', 'parallax-one' ),
			'priority'    => 110,
	));

	/* About title */
	$wp_customize->add_setting( 'parallax_one_our_story_title', array(
		'default' => esc_html__('Our Story','parallax-one'),
		'sanitize_callback' => 'parallax_one_sanitize_input',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'parallax_one_our_story_title', array(
		'label'    => esc_html__( 'Main title', 'parallax-one' ),
		'section'  => 'parallax_one_about_section',
		'active_callback' => 'parallax_one_show_on_front',
		'priority'    => 10,
	));

	/* About Content */

	$wp_customize->add_setting( 'parallax_one_our_story_text', array(
		'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','parallax-one'),
		'sanitize_callback' => 'parallax_one_sanitize_input',
		'transport' => 'postMessage'

	));

	$wp_customize->add_control(
			'parallax_one_our_story_text',
			array(
				'type' => 'textarea',
				'label'   => esc_html__( 'Content', 'parallax-one' ),
				'section' => 'parallax_one_about_section',
				'active_callback' => 'parallax_one_show_on_front',
				'priority'    => 20,
				'description' => __( 'Allowed html: p,br,em,strong,a,button,ul,li', 'parallax-one' )
			)
	);

	/* About Image	*/
	$wp_customize->add_setting( 'paralax_one_our_story_image', array(
		'default' => parallax_get_file('/images/about-us.png'),
		'sanitize_callback' => 'esc_url',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'paralax_one_our_story_image', array(
	      	'label'    => esc_html__( 'Image', 'parallax-one' ),
	      	'section'  => 'parallax_one_about_section',
			'active_callback' => 'parallax_one_show_on_front',
			'priority'    => 30,
	)));

	/********************************************************/
	/******************** ABOUT OPTIONS PG  *****************/
	/********************************************************/
	$wp_customize->add_section( 'parallax_one_about1_section' , array(
			'title'       => esc_html__( 'About1', 'parallax-one' ),
			'priority'    => 125,
	));

	/* About title */
	$wp_customize->add_setting( 'parallax_one_our_story1_title', array(
		'default' => esc_html__('Our Story','parallax-one'),
		'sanitize_callback' => 'parallax_one_sanitize_input',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'parallax_one_our_story1_title', array(
		'label'    => esc_html__( 'Main title', 'parallax-one' ),
		'section'  => 'parallax_one_about1_section',
		'active_callback' => 'parallax_one_show_on_front',
		'priority'    => 10,
	));

	/* About Content */

	$wp_customize->add_setting( 'parallax_one_our_story1_text', array(
		'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','parallax-one'),
		'sanitize_callback' => 'parallax_one_sanitize_input',
		'transport' => 'postMessage'

	));

	$wp_customize->add_control(
			'parallax_one_our_story1_text',
			array(
				'type' => 'textarea',
				'label'   => esc_html__( 'Content', 'parallax-one' ),
				'section' => 'parallax_one_about1_section',
				'active_callback' => 'parallax_one_show_on_front',
				'priority'    => 20,
				'description' => __( 'Allowed html: p,br,em,strong,a,button,ul,li', 'parallax-one' )
			)
	);

	/* About Image	*/
	$wp_customize->add_setting( 'paralax_one_our_story1_image', array(
		'default' => parallax_get_file('/images/about-us.png'),
		'sanitize_callback' => 'esc_url',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'paralax_one_our_story1_image', array(
	      	'label'    => esc_html__( 'Image', 'parallax-one' ),
	      	'section'  => 'parallax_one_about1_section',
			'active_callback' => 'parallax_one_show_on_front',
			'priority'    => 30,
	)));


	$wp_customize->add_section( 'parallax_one_about2_section' , array(
			'title'       => esc_html__( 'About2', 'parallax-one' ),
			'priority'    => 125,
	));

	/* About title */
	$wp_customize->add_setting( 'parallax_one_our_story2_title', array(
		'default' => esc_html__('Our Story','parallax-one'),
		'sanitize_callback' => 'parallax_one_sanitize_input',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'parallax_one_our_story2_title', array(
		'label'    => esc_html__( 'Main title', 'parallax-one' ),
		'section'  => 'parallax_one_about2_section',
		'active_callback' => 'parallax_one_show_on_front',
		'priority'    => 10,
	));

	/* About Content */

	$wp_customize->add_setting( 'parallax_one_our_story2_text', array(
		'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','parallax-one'),
		'sanitize_callback' => 'parallax_one_sanitize_input',
		'transport' => 'postMessage'

	));

	$wp_customize->add_control(
			'parallax_one_our_story2_text',
			array(
				'type' => 'textarea',
				'label'   => esc_html__( 'Content', 'parallax-one' ),
				'section' => 'parallax_one_about2_section',
				'active_callback' => 'parallax_one_show_on_front',
				'priority'    => 20,
				'description' => __( 'Allowed html: p,br,em,strong,a,button,ul,li', 'parallax-one' )
			)
	);

	/* About Image	*/
	$wp_customize->add_setting( 'paralax_one_our_story2_image', array(
		'default' => parallax_get_file('/images/about-us.png'),
		'sanitize_callback' => 'esc_url',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'paralax_one_our_story2_image', array(
	      	'label'    => esc_html__( 'Image', 'parallax-one' ),
	      	'section'  => 'parallax_one_about2_section',
			'active_callback' => 'parallax_one_show_on_front',
			'priority'    => 30,
	)));
	/********************************************************/
	/*******************  EINDE TOEVOEGING PG  **************/
	/********************************************************/
	/********************************************************/
	/****************** stappen OPTIONS  *******************/
	/********************************************************/
require_once ( 'class/parallax-one-general-control.php');


	/* stappen SECTION */
	$wp_customize->add_section( 'parallax_one_stappen_section' , array(
			'title'			=> esc_html__( 'stappen section', 'parallax-one' ),
			'priority'		=> 40,
	));

	$wp_customize->add_setting( 'paralax_one_stappen_pinterest_style', array(
		'sanitize_callback' => 'parallax_one_sanitize_checkbox',
		'default'    		=> '5'
	));
	$wp_customize->add_control(
		'paralax_one_stappen_pinterest_style',
		array(
			'type' 			=> 'checkbox',
			'label' 		=> esc_html__('Use pinterest layout?','parallax-one'),
			'description' 	=> esc_html__('If this box is checked, the stappen section will use pinterest-style layout.','parallax-one'),
			'section' 		=> 'parallax_one_stappen_section',
			'priority'    	=> 1,
		)
	);

	/* stappen title */
	$wp_customize->add_setting( 'parallax_one_our_stappen_title', array(
		'default' => esc_html__('Our stappen','parallax-one'),
		'sanitize_callback' => 'parallax_one_sanitize_input',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'parallax_one_our_stappen_title', array(
		'label'    => esc_html__( 'Main title', 'parallax-one' ),
		'section'  => 'parallax_one_stappen_section',
		'active_callback' => 'parallax_one_show_on_front',
		'priority'    => 10
	));

	/* stappen subtitle */
	$wp_customize->add_setting( 'parallax_one_our_stappen_subtitle', array(
		'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','parallax-one'),
		'sanitize_callback' => 'parallax_one_sanitize_input',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'parallax_one_our_stappen_subtitle', array(
		'type'     => 'textarea',
		'label'    => esc_html__( 'Subtitle', 'parallax-one' ),
		'section'  => 'parallax_one_stappen_section',
		'active_callback' => 'parallax_one_show_on_front',
		'priority'    => 20
	));


    /* stappen content */
	$wp_customize->add_setting( 'parallax_one_stappen_content', array(
		'sanitize_callback' => 'parallax_one_sanitize_repeater',
		'default' => json_encode( array(
			array('choice'=>'parallax_icon','icon_value' => 'icon-basic-webpage-multiple','title' => esc_html__('Lorem Ipsum','parallax-one'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','parallax-one'), 'id' => 'parallax_one_56fd4d93f3013'),
			array('choice'=>'parallax_icon','icon_value' => 'icon-ecommerce-graph3','title' => esc_html__('Lorem Ipsum','parallax-one'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','parallax-one'), 'id' => 'parallax_one_56fd4d94f3014'),
			array('choice'=>'parallax_icon','icon_value' => 'icon-basic-geolocalize-05','title' => esc_html__('Lorem Ipsum','parallax-one'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','parallax-one'), 'id' => 'parallax_one_56fd4d95f3015')
		) )
	) );

	$wp_customize->add_control( new Parallax_One_Specific_Repeater( $wp_customize, 'parallax_one_stappen_content', array(
		'label'   => esc_html__('Add new service box','parallax-one'),
		'section' => 'parallax_one_stappen_section',
		'active_callback' => 'parallax_one_show_on_front',
		'priority' => 30,
        'parallax_image_control' => true,
        'parallax_icon_control' => true,
		'parallax_title_control' => true,
		'parallax_subtitle_control' => true,
        'parallax_text_control' => true,
		'parallax_link_control' => true
	) ) );
	

	/********************************************************/
	/******************** ABOUT OPTIONS PG2  ****************/
	/********************************************************/


	$wp_customize->add_section( 'parallax_one_about3_section' , array(
			'title'       => esc_html__( 'About3', 'parallax-one' ),
			'priority'    => 135,
	));

	/* About title */
	$wp_customize->add_setting( 'parallax_one_our_story3_title', array(
		'default' => esc_html__('Our Story','parallax-one'),
		'sanitize_callback' => 'parallax_one_sanitize_input',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'parallax_one_our_story3_title', array(
		'label'    => esc_html__( 'Main title', 'parallax-one' ),
		'section'  => 'parallax_one_about3_section',
		'active_callback' => 'parallax_one_show_on_front',
		'priority'    => 10,
	));

	/* About Content */

	$wp_customize->add_setting( 'parallax_one_our_story3_text', array(
		'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.','parallax-one'),
		'sanitize_callback' => 'parallax_one_sanitize_input',
		'transport' => 'postMessage'

	));

	$wp_customize->add_control(
			'parallax_one_our_story3_text',
			array(
				'type' => 'textarea',
				'label'   => esc_html__( 'Content', 'parallax-one' ),
				'section' => 'parallax_one_about3_section',
				'active_callback' => 'parallax_one_show_on_front',
				'priority'    => 20,
				'description' => __( 'Allowed html: p,br,em,strong,a,button,ul,li', 'parallax-one' )
			)
	);

	/* About Image	*/
	$wp_customize->add_setting( 'paralax_one_our_story3_image', array(
		'default' => parallax_get_file('/images/about-us.png'),
		'sanitize_callback' => 'esc_url',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'paralax_one_our_story3_image', array(
	      	'label'    => esc_html__( 'Image', 'parallax-one' ),
	      	'section'  => 'parallax_one_about3_section',
			'active_callback' => 'parallax_one_show_on_front',
			'priority'    => 30,
	)));
	/********************************************************/
	/*******************  EINDE TOEVOEGING2 PG  *************/
	/********************************************************/
	
	/********************************************************/
	/***************** RIBBON OPTIONS  *****************/
	/********************************************************/


	/* RIBBON SETTINGS */
	$wp_customize->add_section( 'parallax_one_ribbon_section' , array(
		'title'       => esc_html__( 'Ribbon sectie', 'parallax-one' ),
		'priority'    => 120,
	));


	/* Ribbon Background	*/
	$wp_customize->add_setting( 'paralax_one_ribbon_background', array(
		'default' => parallax_get_file('/images/background-images/parallax-img/parallax-img1.jpg'),
		'sanitize_callback' => 'esc_url',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'paralax_one_ribbon_background', array(
	      	'label'    => esc_html__( 'Ribbon Background', 'parallax-one' ),
	      	'section'  => 'parallax_one_ribbon_section',
			'active_callback' => 'parallax_one_show_on_front',
			'priority'    => 10
	)));

	$wp_customize->add_setting( 'parallax_one_ribbon_title', array(
		'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','parallax-one'),
		'sanitize_callback' => 'parallax_one_sanitize_input',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'parallax_one_ribbon_title', array(
		'type'     => 'textarea',
		'label'    => esc_html__( 'Main title', 'parallax-one' ),
		'section'  => 'parallax_one_ribbon_section',
		'active_callback' => 'parallax_one_show_on_front',
		'priority'    => 20
	));

/* ***********************************************************************
            TOEVOEGING PGE
**************************************************************************/			
	$wp_customize->add_setting( 'parallax_one_ribbon_text', array(
		'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','parallax-one'),
		'sanitize_callback' => 'parallax_one_sanitize_input',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'parallax_one_ribbon_text', array(
		'type'     => 'textarea',
		'label'    => esc_html__( 'Tekst', 'parallax-one' ),
		'section'  => 'parallax_one_ribbon_section',
		'active_callback' => 'parallax_one_show_on_front',
		'priority'    => 25
	));
/* ***********************************************************************
            TOEVOEGING PGE
**************************************************************************/
	$wp_customize->add_setting( 'parallax_one_button_text', array(
		'default' => esc_html__('GET STARTED','parallax-one'),
		'sanitize_callback' => 'parallax_one_sanitize_input',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'parallax_one_button_text', array(
		'label'    => esc_html__( 'Button label', 'parallax-one' ),
		'section'  => 'parallax_one_ribbon_section',
		'active_callback' => 'parallax_one_show_on_front',
		'priority'    => 30
	));
	$wp_customize->add_setting( 'parallax_one_button_link', array(
		'default' => esc_html__('#','parallax-one'),
		'sanitize_callback' => 'esc_url',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'parallax_one_button_link', array(
		'label'    => esc_html__( 'Button link', 'parallax-one' ),
		'section'  => 'parallax_one_ribbon_section',
		'active_callback' => 'parallax_one_show_on_front',
		'priority'    => 40
	));
	/********************************************************/
	/***************** RIBBON2 OPTIONS PG   *****************/
	/********************************************************/

	/* RIBBON SETTINGS */
	$wp_customize->add_section( 'parallax_one_ribbon2_section' , array(
		'title'       => esc_html__( 'Ribbon sectie 2', 'parallax-one' ),
		'priority'    => 140,
	));
	/* Ribbon Background	*/
	$wp_customize->add_setting( 'paralax_one_ribbon2_background', array(
		'default' => parallax_get_file('/images/background-images/parallax-img/parallax-img1.jpg'),
		'sanitize_callback' => 'esc_url',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'paralax_one_ribbon2_background', array(
	      	'label'    => esc_html__( 'Ribbon Background', 'parallax-one' ),
	      	'section'  => 'parallax_one_ribbon2_section',
			'active_callback' => 'parallax_one_show_on_front',
			'priority'    => 10
	)));

	$wp_customize->add_setting( 'parallax_one_ribbon2_title', array(
		'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','parallax-one'),
		'sanitize_callback' => 'parallax_one_sanitize_input',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'parallax_one_ribbon2_title', array(
		'type'     => 'textarea',
		'label'    => esc_html__( 'Main title', 'parallax-one' ),
		'section'  => 'parallax_one_ribbon2_section',
		'active_callback' => 'parallax_one_show_on_front',
		'priority'    => 20
	));

	$wp_customize->add_setting( 'parallax_one_ribbon2_text', array(
		'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','parallax-one'),
		'sanitize_callback' => 'parallax_one_sanitize_input',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'parallax_one_ribbon2_text', array(
		'type'     => 'textarea',
		'label'    => esc_html__( 'Tekst', 'parallax-one' ),
		'section'  => 'parallax_one_ribbon2_section',
		'active_callback' => 'parallax_one_show_on_front',
		'priority'    => 25
	));

	$wp_customize->add_setting( 'parallax_one_button2_text', array(
		'default' => esc_html__('GET STARTED','parallax-one'),
		'sanitize_callback' => 'parallax_one_sanitize_input',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'parallax_one_button2_text', array(
		'label'    => esc_html__( 'Button label', 'parallax-one' ),
		'section'  => 'parallax_one_ribbon2_section',
		'active_callback' => 'parallax_one_show_on_front',
		'priority'    => 30
	));


	$wp_customize->add_setting( 'parallax_one_button2_link', array(
		'default' => esc_html__('#','parallax-one'),
		'sanitize_callback' => 'esc_url',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'parallax_one_button2_link', array(
		'label'    => esc_html__( 'Button link', 'parallax-one' ),
		'section'  => 'parallax_one_ribbon2_section',
		'active_callback' => 'parallax_one_show_on_front',
		'priority'    => 40
	));


	/********************************************************/
	/***************** RIBBON3 OPTIONS PG   *****************/
	/********************************************************/


	/* RIBBON SETTINGS */
	$wp_customize->add_section( 'parallax_one_ribbon3_section' , array(
		'title'       => esc_html__( 'Ribbon sectie 3', 'parallax-one' ),
		'priority'    => 155,
	));
	/* Ribbon Background	*/
	$wp_customize->add_setting( 'paralax_one_ribbon3_background', array(
		'default' => parallax_get_file('/images/background-images/parallax-img/parallax-img1.jpg'),
		'sanitize_callback' => 'esc_url',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'paralax_one_ribbon3_background', array(
	      	'label'    => esc_html__( 'Ribbon Background', 'parallax-one' ),
	      	'section'  => 'parallax_one_ribbon3_section',
			'active_callback' => 'parallax_one_show_on_front',
			'priority'    => 10
	)));
	$wp_customize->add_setting( 'parallax_one_ribbon3_title', array(
		'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','parallax-one'),
		'sanitize_callback' => 'parallax_one_sanitize_input',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'parallax_one_ribbon3_title', array(
		'type'     => 'textarea',
		'label'    => esc_html__( 'Main title', 'parallax-one' ),
		'section'  => 'parallax_one_ribbon3_section',
		'active_callback' => 'parallax_one_show_on_front',
		'priority'    => 20
	));

	$wp_customize->add_setting( 'parallax_one_ribbon3_text', array(
		'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','parallax-one'),
		'sanitize_callback' => 'parallax_one_sanitize_input',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'parallax_one_ribbon3_text', array(
		'type'     => 'textarea',
		'label'    => esc_html__( 'Tekst', 'parallax-one' ),
		'section'  => 'parallax_one_ribbon3_section',
		'active_callback' => 'parallax_one_show_on_front',
		'priority'    => 25
	));
	$wp_customize->add_setting( 'parallax_one_button3_text', array(
		'default' => esc_html__('GET STARTED','parallax-one'),
		'sanitize_callback' => 'parallax_one_sanitize_input',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'parallax_one_button3_text', array(
		'label'    => esc_html__( 'Button label', 'parallax-one' ),
		'section'  => 'parallax_one_ribbon3_section',
		'active_callback' => 'parallax_one_show_on_front',
		'priority'    => 30
	));
	$wp_customize->add_setting( 'parallax_one_button3_link', array(
		'default' => esc_html__('#','parallax-one'),
		'sanitize_callback' => 'esc_url',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'parallax_one_button3_link', array(
		'label'    => esc_html__( 'Button link', 'parallax-one' ),
		'section'  => 'parallax_one_ribbon3_section',
		'active_callback' => 'parallax_one_show_on_front',
		'priority'    => 40
	));
	/********************************************************/
	/************ LATEST NEWS OPTIONS  **************/
	/********************************************************/


	$wp_customize->add_section( 'parallax_one_latest_news_section' , array(
			'title'       => esc_html__( 'Latest news section', 'parallax-one' ),
			'priority'    => 160
	));

	$wp_customize->add_setting( 'parallax_one_latest_news_title', array(
		'default' => esc_html__('Latest news','parallax-one'),
		'sanitize_callback' => 'parallax_one_sanitize_input',
		'transport' => 'postMessage'
	));
	$wp_customize->add_control( 'parallax_one_latest_news_title', array(
		'label'    => esc_html__( 'Main title', 'parallax-one' ),
		'section'  => 'parallax_one_latest_news_section',
		'active_callback' => 'parallax_one_show_on_front',
		'priority'    => 10
	));
}
add_action( 'customize_register', 'startmanagement_customize_register' );
