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

<?php if( get_field('contacts_header_image') ): ?>
  <div class='header-image'>
    <div class='wrapper--center'>
      <div class='content-container'>
        <h1>
          <?php
            the_title();
          ?>
        </h1>
      </div>
    </div>
  </div>
<?php endif; ?>


<?php
  $formDescription = get_field('contact_form_description');
  $formHeader = get_field('contact_form_header');
  $formShortcode = get_field('contact_form_shortcode');
  $adress = get_field('adress');
?>
  <div class='wrapper--center'>
    <div class='content-container'>

      <?php
        wp_nav_menu(
          array(
            'menu' => 'contacts',
            'theme_location' => 'contacts',
            'items_wrap' => '<ul id ="contacts__list" class ="contacts__list">%3$s</ul>',
          )
        )
      ?>

      <div class='form-map__container'>
        <div class='form__container'>
          <h2><?php echo $formHeader;?></h2>
          <p><?php echo $formDescription;?></p>
          <?php echo do_shortcode($formShortcode);?>
        </div>
        <div class='map__container'>
          <?php if( $adress ) : ?>
            <div class='adress'>
              <img src='<?php echo get_template_directory_uri(); ?>/assets/images/location_icon.svg'/>
              <p><?php echo $adress; ?></p>
            </div>
          <?php endif; ?>
        </div>
      </div>

    </div>
  </div>

<style>
/*Temporary using separate svg files, looking for an approach to use svg sprite in pseudo elements
*/

/*Header background image*/
/*Pseudo elements for the contacts menu*/
  .contacts__item--messengers:before {
    width: 180px;
    content: url('<?php echo get_template_directory_uri(); ?>/assets/images/messengers_icon.svg');
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

/*Pseudo elements for the contacts form inputs*/
  span[data-name='your-name']:after {
    content: url('<?php echo get_template_directory_uri(); ?>/assets/images/input_avatar_icon.svg');
  }

  span[data-name='your-email']:after {
    content: url('<?php echo get_template_directory_uri(); ?>/assets/images/input_email_icon.svg');
  }

  span[data-name='your-number']:after {
    content: url('<?php echo get_template_directory_uri(); ?>/assets/images/input_phone_icon.svg');
  }

  span[data-name='your-message']:after {
    content: url('<?php echo get_template_directory_uri(); ?>/assets/images/input_pen_icon.svg');
  }

/*Pseudo element for form button */

.wpcf7-submit:after {
  content: url('<?php echo get_template_directory_uri(); ?>/assets/images/button_arrow_icon.svg');
}

.header-image {
  background-image: url('<?php the_field('contacts_header_image'); ?>');
}

</style>

<?php get_footer(); ?>