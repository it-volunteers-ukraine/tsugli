<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package wp-it-volunteers
 */

get_header();
?>

	<main id="primary" class="main container">

 <section class="hero section" style="background:linear-gradient(100deg, #D9D9D9 15.95%, rgba(217, 217, 217, 0.00) 57.19%), url(<?php the_field('hero-img', '17'); ?>);  background-size: cover; background-repeat: no-repeat; background-position: center;">
      <h1 class="hero__title"><?php the_field('hero-title', '17');?></h1>
 </section>

 <section class='article-section section'>

<div class='article__container '>

<div class="article-header">

</div>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'wp-it-volunteers' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'wp-it-volunteers' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

				// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template('/comments.php');
			endif;

		endwhile; // End of the loop.
		?>
</div>

	<div class='events__sidebar'>
		<?php get_sidebar(); ?>
	</div>

</section>

    <?php get_template_part( 'template-parts/buttonTop'); ?>

	</main>

<?php
get_sidebar();
get_footer();
