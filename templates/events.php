<?php
/*
Template Name: events
*/
get_header();

?>

<main class='container'>
    <h1 class='visually-hidden'>Події та заходи </h1>
    
  <?php get_template_part( 'template-parts/hero'); ?>


    <section class='events section'>
        <p class="events__title"><?php the_field('text') ?></p>
        <div class='events__container'>
<div class='events__posts'>
	<?php if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content-posts' );

			endwhile;
		endif;
		?>
<?php

$posts_per_page = 6;

$total_posts = wp_count_posts()->publish;

// Вычисляем общее количество страниц пагинации
$total_pages = ceil($total_posts / $posts_per_page);

// Получаем текущий номер страницы
$current_page = get_query_var('paged') ? get_query_var('paged') : 1;

// Формируем массив с аргументами для функции paginate_links()
$pagination_args = array(
  'base' => get_pagenum_link(1) . '%_%',
  'format' => '/page/%#%',
  'current' => $current_page,
  'total' => $total_pages,
  'prev_next' => false,
);

// Выводим пагинацию
echo '<div class="events__pagination">';
echo paginate_links($pagination_args);
echo '</div>';
?>
</div>

<div class='events__sidebar'>
    <?php get_sidebar(); ?>
</div>

        </div>
    </section>
</main>

<?php get_footer(); ?>