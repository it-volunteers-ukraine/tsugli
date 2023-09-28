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
     	 <img src="<?php the_field('qr'); ?> " alt="QR - код">
        <div class="donate__container">
			<p class="donate__title"><?php the_field('text'); ?> </p>
			<!-- <div class="donate__text">секунд Ви будете перенаправлені на Головну сторінку.</div> -->
            <a class="donate__link" href="<?php the_field('link'); ?> ">Задонатити
                <svg class="offering__icon" width="24px" height="24px">
                    <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow"></use>
                </svg>
            </a>
        </div>


	</section>
		      
	<?php get_template_part( 'template-parts/buttonTop'); ?>
		
	</main>


<?php get_footer(); ?>