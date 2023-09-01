<?php
/*
Template Name: contacts
*/
get_header();
?>

<?php
  if (have_posts() ) {
    while (have_posts()) {
        the_post();
        the_content();
    }
  }

?>

<?php
  wp_nav_menu(
    array(
      'menu' => 'contacts',
      'container' => '',
      'theme_location' => 'contacts',
      'items_wrap' => '<ul id ="contacts__list" class ="contacts__list">%3$s</ul>',
      'walker' => new Contacts_Menu_Walker(),
    )
  )
?>



<?php get_footer(); ?>