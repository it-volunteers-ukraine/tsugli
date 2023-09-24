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
  wp_enqueue_style( 'lightbox-style','https://cdn.jsdelivr.net/npm/basiclightbox@5.0.4/dist/basicLightbox.min.css', array('main') );
  wp_enqueue_style( 'toastify-style','https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css', array('main') );


  wp_enqueue_script( 'wp-it-volunteers-scripts', get_template_directory_uri() . '/assets/scripts/main.js', array(), false, true );
  wp_enqueue_script( 'swiper-scripts', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), false, true );
  wp_enqueue_script( 'lightbox-scripts', 'https://cdn.jsdelivr.net/npm/basiclightbox@5.0.4/dist/basicLightbox.min.js', array(), false, true );
  wp_enqueue_script( 'toastify-scripts', 'https://cdn.jsdelivr.net/npm/toastify-js', array(), false, true );
  wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), false, true );


  if ( is_page_template('templates/home.php') ) {
    wp_enqueue_style( 'home-style', get_template_directory_uri() . '/assets/styles/template-styles/home.css', array('main') );
    wp_enqueue_script( 'home-scripts', get_template_directory_uri() . '/assets/scripts/template-scripts/home.js', array('swiper-scripts'), false, true );
    wp_enqueue_script( 'home-gallery', get_template_directory_uri() . '/assets/scripts/template-scripts/home-gallery.js', array('swiper-scripts'), false, true );
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

    if (is_singular() && locate_template('template-parts/content-events.php')) {
    wp_enqueue_style( 'events-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/content-events.css', array('main') );
    }

    if (is_singular() && locate_template('template-parts/content-posts.php')) {
    wp_enqueue_style( 'posts-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/content-posts.css', array('main') );
    }

    if (is_singular() && locate_template('template-parts/hero.php')) {
    wp_enqueue_style( 'hero-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/hero.css', array('main') );
    }

    if (is_singular() && locate_template('template-parts/gallery.php')) {
    wp_enqueue_style( 'gallery-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/gallery.css', array('main') );
    wp_enqueue_script( 'gallery-scripts', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/gallery.js', array(), false, true );
    }
    if (is_singular() && locate_template('template-parts/buttonTop.php')) {
    wp_enqueue_style( 'buttonTop-style', get_template_directory_uri() . '/assets/styles/template-parts-styles/buttonTop.css', array('main') );
    wp_enqueue_script( 'buttonTop-scripts', get_template_directory_uri() . '/assets/scripts/template-parts-scripts/buttonTop.js', array(), false, true );
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

/*Require custom walker
*/

require get_template_directory() . '/template-parts/contacts-walker.php';


/*register img for posts
*/
add_theme_support( 'post-thumbnails' );



/*Register sidebar
*/
add_action( 'widgets_init', 'register_tsugli_sidebar' );

function register_tsugli_sidebar(){
	register_sidebar( array(
		'name' => 'Сайдбар',
		'id' => 'sidebar',
		'before_widget' => '<li class="sidebar-block">',
		'after_widget' => '</li>',
		) );
}

// Comments


function tsugli_comments($comment, $args, $depth) {
    $author_name = get_comment_author();
    $comment_date = get_comment_date();
    $comment_text = get_comment_text();

    echo '<li class="comment__item">';
    echo '<div class="comment__info">';
    echo '<span class="comment__autor">' . esc_html($author_name) . '</span>';
    echo '<span class="comment__date">' . esc_html($comment_date) . '</span>';
    echo '</div>';
    echo '<span class="comment__text">' . esc_html($comment_text). '</span>';
    echo '</li>';
}


add_action( 'comment_form_fields', 'tsugli_change_all_fields_order', 25 );
 
function tsugli_change_all_fields_order( $comment_fields ) {
 
	$order = array( 'author', 'email', 'comment' );
 
	$new_fields = array();
 
	foreach( $order as $index ) {
		$new_fields[ $index ] = $comment_fields[ $index ];
	}
 
	return $new_fields;
 
}

add_filter('comment_form_defaults', 'tsugli_comment_form_defaults');

function tsugli_comment_form_defaults($defaults) {
    $defaults['comment_field'] = '<div class="comment-form-comment">
        <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="Текст"></textarea>
        </div>';
    return $defaults;
}


add_filter('comment_form_defaults', 'tsugli_remove_comment_form_label');

function tsugli_remove_comment_form_label($defaults) {
    $defaults['comment_notes_before'] = '';
    return $defaults;
}

