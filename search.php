<?php get_header();?>

<main class='container'>
    <h1 class='visually-hidden'>Події та заходи </h1>
    
  <?php get_template_part( 'template-parts/hero'); ?>


    <section class='events section'>
      <h2 class="events__title">
        <?php printf( esc_html__( 'Результат пошуку за фразою: %s', 'tsugli' ), '<span>' . get_search_query() . '</span>' ); ?>
        <?php $search_query = new WP_Query( array( 's' => get_search_query(), 'post_type' => 'post' ) ); ?>
      </h2> 

        <div class='events__container'>
<div class='events__posts'>
             <?php
        if ($search_query->have_posts()) {
            while ($search_query->have_posts()) {
            $search_query->the_post(); 
            get_template_part( 'template-parts/content-posts' );
            }
        } else { echo '<p class="events__title"> Нічого не знайдено.</p>';}
        wp_reset_postdata(); ?>

</div>

<div class='events__sidebar'>
    <?php get_sidebar(); ?>
</div>

        </div>
    </section>
</main>

<?php get_footer(); ?>