<?php get_header();?>
<main class='container'>
    <h1 class='visually-hidden'>Події та заходи </h1>
    
 <section class="hero section" style="background:linear-gradient(100deg, #D9D9D9 15.95%, rgba(217, 217, 217, 0.00) 57.19%), url(<?php the_field('hero-img', '17'); ?>);  background-size: cover; background-repeat: no-repeat; background-position: center;">
      <h1 class="hero__title"><?php the_field('hero-title', '17');?></h1>
 </section>

    <section class='events section'>
 <h2 class="events-title">
        <?php printf( esc_html__( 'Результат пошуку за фразою: %s', 'tsugli' ), '<span>' . get_search_query() . '</span>' ); ?>
        <?php $search_query = new WP_Query( array( 's' => get_search_query(), 'post_type' => 'post' ) ); ?>
      </h2>         <div class='events__container'>
<div class='events__posts'>
    <ul class="posts__list">
        <?php
        if ($search_query->have_posts()) {
            while ($search_query->have_posts()) {
            $search_query->the_post(); 
            get_template_part( 'template-parts/content', 'search' );
            }
        } else { echo '<li class="events__title"> Нічого не знайдено.</li>';}
        wp_reset_postdata(); ?>
    </ul>
</div>

<div class='events__sidebar'>
    <?php get_sidebar(); ?>
</div>

        </div>
    </section>
</main>

<?php get_footer(); ?>
