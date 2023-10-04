<?php
/*
Template Name: donate
*/
get_header();
?>

<main id="primary" class="container main">
        <h1 class='visually-hidden'>Задонатити </h1>
    
  <?php get_template_part( 'template-parts/hero'); ?>

	<section class="donate__section section">
            <?php if (get_field('qr')) : ?>
                <img src="<?php the_field('qr'); ?>" alt="QR - код">
            <?php else : ?>
                <img src="<?php bloginfo('template_url'); ?>/assets/images/donate-horse.jpg" alt="Жінка з рук кормить коня">
            <?php endif; ?>        

           <div class="donate__container">
			<p class="donate__title"><?php the_field('title'); ?> </p>
			<div class="donate__text"> <?php the_field('text'); ?> </div>
            <a class="donate__link" href="<?php the_field('link'); ?> " target="_blank"><?php the_field('button'); ?> 
                <svg class="offering__icon" width="24px" height="24px">
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow"></use>
                </svg>
            </a>
        </div>


	</section>
		      
	<?php get_template_part( 'template-parts/buttonTop'); ?>
		
	</main>


<?php get_footer(); ?>