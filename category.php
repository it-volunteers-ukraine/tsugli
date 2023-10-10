<?php get_header();?>
<main class='main'>
    <h1 class='visually-hidden'>Події та заходи </h1>
    
 <section class="hero section" style="background:linear-gradient(100deg, #D9D9D9 15.95%, rgba(217, 217, 217, 0.00) 57.19%), url(<?php the_field('hero-img', '16'); ?>);  background-size: cover; background-repeat: no-repeat; background-position: center;">
     <div class="container section">
     <h1 class="hero__title"><?php the_field('hero-title', '16');?></h1>
     </div>
 </section>

    <section class='events section container'>
 <h2 class="events-title">
    <?php printf( esc_html__( 'Категорія: %s', 'tsugli' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>

     </h2> 
<div class='events__container'>
<div class='events__posts'>
    <ul class="posts__list">
        <?php
        if (have_posts()) {
        while (have_posts()) {
     the_post();             
     get_template_part( 'template-parts/content', 'search' );

            }
        } else { echo '<li class="not-found"> Нічого не знайдено.</li>';}
        wp_reset_postdata(); ?>
        </ul>
</div>

<div class='events__sidebar'>
    <?php get_sidebar(); ?>
</div>

        </div>
    </section>

<?php get_template_part( 'template-parts/buttonTop'); ?>

</main>

<?php get_footer(); ?>
