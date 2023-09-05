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

<?php if ( get_header_image() ) : ?>
  <img src="<?php header_image(); ?>">
<?php endif; ?>

<?php
  wp_nav_menu(
    array(
      'menu' => 'contacts',
      'theme_location' => 'contacts',
      'items_wrap' => '<ul id ="contacts__list" class ="contacts__list">%3$s</ul>',
    )
  )
?>

<style>
/*Temporary using separate svg files, looking for an approach to use svg sprite in pseudo elements
*/
  .contacts__item--messengers:before {
    width: 180px;
    background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/messengers_icon.svg');
  }
  .contacts__item--phone:before {
    content: url('<?php echo get_template_directory_uri(); ?>/assets/images/phone_icon.svg');
  }
  .contacts__item--email:before {
    content: url('<?php echo get_template_directory_uri(); ?>/assets/images/email_icon.svg');
  }
  .contacts__item--instagram:before {
    content: url('<?php echo get_template_directory_uri(); ?>/assets/images/instagram_icon.svg');
  }
  .contacts__item--facebook:before {
    content: url('<?php echo get_template_directory_uri(); ?>/assets/images/facebook_icon.svg');
  }
</style>

<?php
  echo do_shortcode(
    '[contact-form-7 id="16576e7" title="Contact form 1"]'
  );
?>

<?php get_footer(); ?>