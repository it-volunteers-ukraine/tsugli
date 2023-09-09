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

<?php
  $formDescription = get_field('contact_form_description');
  $formHeader = get_field('contact_form_header');
  $formShortcode = get_field('contact_form_shortcode');
?>
  <div class='wrapper--center'>
  <div class='form-map__container'>
    <div class='form__container'>
      <h2><?php echo $formHeader;?></h2>
      <p><?php echo $formDescription;?></p>
      <?php echo do_shortcode($formShortcode);?>
    </div>
    <div class='map__container'>
    </div>
  </div>
  </div>


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

<?php get_footer(); ?>