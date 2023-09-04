<?php
if ( ! function_exists('wp_it_volunteers_setup')) {
  function wp_it_volunteers_setup() {
    add_theme_support( 'custom-logo',
      array(
        'height'      => 64,
        'width'       => 64,
        'flex-width'  => true,
        'flex-height' => true,
      )
    );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'custom-header',
      array(
        'width'              => 1000,
		    'height'             => 250,
		    'flex-width'         => true,
		    'flex-height'        => true,
      )
  );
  }
  add_action( 'after_setup_theme', 'wp_it_volunteers_setup' );
}

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'wp_it_volunteers_scripts' );

function wp_it_volunteers_scripts() {
  wp_enqueue_style( 'main', get_stylesheet_uri() );
  wp_enqueue_style( 'wp-it-volunteers-style', get_template_directory_uri() . '/assets/styles/main.css', array('main') );
  wp_enqueue_script( 'wp-it-volunteers-scripts', get_template_directory_uri() . '/assets/scripts/main.js', array(), false, true );


  if ( is_page_template('templates/home.php') ) {
    wp_enqueue_style( 'home-style', get_template_directory_uri() . '/assets/styles/template-styles/home.css', array('main') );
    wp_enqueue_script( 'home-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/home.js', array(), false, true );
  }

  if ( is_page_template('templates/about.php') ) {
    wp_enqueue_style( 'about-style', get_template_directory_uri() . '/assets/styles/template-styles/about.css', array('main') );
    wp_enqueue_script( 'about-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/about.js', array(), false, true );
  }

  if ( is_page_template('templates/horses.php') ) {
    wp_enqueue_style( 'horses-style', get_template_directory_uri() . '/assets/styles/template-styles/horses.css', array('main') );
    wp_enqueue_script( 'horses-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/horses.js', array(), false, true );
  }

  if ( is_page_template('templates/events.php') ) {
    wp_enqueue_style( 'events-style', get_template_directory_uri() . '/assets/styles/template-styles/events.css', array('main') );
    wp_enqueue_script( 'events-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/events.js', array(), false, true );
  }

  if ( is_page_template('templates/museum.php') ) {
    wp_enqueue_style( 'museum-style', get_template_directory_uri() . '/assets/styles/template-styles/museum.css', array('main') );
    wp_enqueue_script( 'museum-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/museum.js', array(), false, true );
  }

  if ( is_page_template('templates/contacts.php') ) {
    wp_enqueue_style( 'contacts-style', get_template_directory_uri() . '/assets/styles/template-styles/contacts.css', array('main') );
    wp_enqueue_script( 'contacts-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/contacts.js', array(), false, true );
  }

  if ( is_page_template('templates/donate.php') ) {
    wp_enqueue_style( 'donate-style', get_template_directory_uri() . '/assets/styles/template-styles/donate.css', array('main') );
    wp_enqueue_script( 'donate-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/donate.js', array(), false, true );
  }
 }

/** add fonts */
function add_google_fonts() {
    wp_enqueue_style( 'amatic-sc', 'https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap' );
    wp_enqueue_style( 'fira-sans-500', 'https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&display=swap' );
    wp_enqueue_style( 'fira-sans-400', 'https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400&display=swap' );
    wp_enqueue_style( 'fira-sans-600', 'https://fonts.googleapis.com/css2?family=Fira+Sans:wght@600&display=swap' );
}

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

/** Register menus */
function wp_it_volunteers_menus() {
  $locations = array(
    'header' => __( 'Header Menu', 'wp-it-volunteers' ),
    'footer' => __( 'Footer Menu', 'wp-it-volunteers' ),
    'contacts' => __( 'Contacts Menu', 'wp-it-volunteers' ),
  );

  register_nav_menus( $locations );
}

add_action( 'init', 'wp_it_volunteers_menus');

/**Register logo */
add_theme_support( 'custom-logo' );

/**SVG */
add_filter( 'upload_mimes', 'svg_upload_allow' );

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

/**Fix MIME type for SVG files */
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	if( $dosvg ){

		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
};
