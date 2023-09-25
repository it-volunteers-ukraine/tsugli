<?php
/*
Template Name: museum
*/

get_header();
?>
<main class="main container">
    <h1 class='visually-hidden'>Музей</h1>
<?php get_template_part( 'template-parts/hero'); ?>

<section class="section museum">
    <div class="museum__section box ">
        <div class="museum__img">
        <img src="<?php  the_field('img')?>" alt="<?php  the_field('alt')?>"/>
    </div>
    <h3 class="museum__title"><?php  the_field('title')?></h3>
    <input type="checkbox" id="expanded2">
    <p class="museum__text truncated"><?php  the_field('text')?></p>
    <label class="museum__button" for="expanded2" role="button">Читати Далі</label>

     </div>
    
</section>

<?php get_template_part( 'template-parts/gallery'); ?>

<section class="events-section section ">
		<?php if ( have_posts() ) : ?>

				<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content-events');

			endwhile;
		endif;
		?>
</section>

<?php get_template_part( 'template-parts/buttonTop'); ?>


</main>
				




<?php get_footer(); ?>