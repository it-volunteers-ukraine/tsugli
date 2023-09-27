<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wp-it-volunteers
 */

get_header();
?>

<main id="primary" class="container main">

	<section class="not-found__section section">
     	 <img src="<?php bloginfo('template_url'); ?>/assets/images/horse-big.svg" alt="Кумедний кінь">
        <div class="not-found__container">
			<p class="not-found__title">Ой-йой! Такої сторінки не знайдено!</p>
			<div class="not-found__text" id="timer">Через <span id="countdown">10</span> секунд ви будете перенаправлені на Головну сторінку.</div>
		</div>
	</section>
		    
	<?php get_template_part( 'template-parts/buttonTop'); ?>
		
	</main>

<?php
get_footer();


