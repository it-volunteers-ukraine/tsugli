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

<div class='article__container'>

<div class="article-header">
<a  href="<?php echo get_permalink(16); ?>" class="article-header__button" aria-label="Кнопка для поверенення на сторінку подій">
  <svg width="24px" height="24px">
     <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow"></use>
  </svg>
</a>

<div class="article-header__networks">
	<span class="article-header__text" >Поділитися</span>
	 <ul class="article-header__list">
                                <li class="article-header__item" >
                                    <a href="#" aria-label="Поділитися у вайбер">
                                    <svg class="article-header__icon" width="44px" height="44px">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-viber"></use>
                                    </svg>
                                    </a>
                                </li>
                                <li class="article-header__item">
                                    <a href="#" aria-label="Поділитися у фейсбук">
                                    <svg class="article-header__icon" width="44px" height="44px" >
                                        <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-fb"></use>
                                    </svg>
                                    </a>
                                </li>
                                <li class="article-header__item">
                                    <a href="#" aria-label="Поділитися через електорнну пошту"
                                    ><svg class="article-header__icon" width="44px" height="44px">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-mail"></use></svg></a>
                                </li>
                                <li class="article-header__item">
                                    <a href="#" aria-label="Поділитися у інстаграм">
                                    <svg class="article-header__icon" width="44px" height="44px">
                                    <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-instagram"></use>
                                    </svg>
                                    </a>
                                </li>
                                <li class="article-header__item">
                                    <a href="#"aria-label="Поділитися у вотсапп">
                                    <svg class="article-header__icon" width="44px" height="44px">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-whatsapp"></use></svg></a>
                                </li>
                                </ul>
</div>
</div>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

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
