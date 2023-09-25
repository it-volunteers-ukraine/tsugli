<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-it-volunteers
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">

<ul class="sidebar__search ">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</ul>

<div class="sidebar__section">
	<h3 class="sidebar__title">Категорії</h3>
  <ul class="categories__list sidebar__wrapp">

		<?php
$categories = get_categories(); ?>
<li class="categories__item categories__item--contrast"><a href="<?php echo get_permalink(17); ?>">
<span>Всі </span> 
    <span class="categories__count categories__count--contrast"><?php echo wp_count_posts()->publish; ?></span>

<?php
foreach ($categories as $category) {
    echo '<li class="categories__item"><a href="' . get_category_link($category->term_id) . '"><span>' . $category->name . '</span> <span class="categories__count">' . $category->count . '</span></a></li>';
}
?>
</ul>

</div>

<div class="sidebar__section">
   <h3 class="sidebar__title">Останні Пости</h3>
    <ul class="latest-posts sidebar__wrapp">
           <?php
            global $post;

            $myposts = get_posts([ 
              'posts_per_page' => 5,
              'order' => 'DESC',  
              'orderby' => 'date',  
              'paged' => get_query_var('paged') ? get_query_var('paged') : 1 

            ]);

            if( $myposts ){
              foreach( $myposts as $post ){
                setup_postdata( $post );
                ?>

    <li class="latest-posts__item">
     
    <div class="latest-posts__img">
      
    <?php
 if (has_post_thumbnail()) {
      the_post_thumbnail();
  } else {
    echo '<img src="' . get_template_directory_uri() . '/assets/images/no-photo.jpg" alt="Кінь">';
  }
  ?>
    </div>

         <div class="latest-posts__description">
            
			<a href="<?php the_permalink(); ?>">
				<h3 class="latest-posts__title"><?php the_title(); ?></h3>
			</a>

          <div class="latest-posts__info">
              <div class="latest-posts__category">
                  <svg  width="24px" height="24px">
                      <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-folder"></use>
                  </svg>  
              <?php the_category(', '); ?></div>
              <div class="latest-posts__date">
                   <svg  width="24px" height="24px">
                      <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-calendar"></use>
                    </svg>  
                <?php the_field('date'); ?></div>
           </div>
      </div>
    </li>
                <?php 
              }
            } else {
        echo '<li class="posts__title"> Подій не заплановано.</li>';
            }
            wp_reset_postdata(); 
            ?>
            </ul>
</div>

<div class="sidebar__section">
	<h3 class="sidebar__title">Підпишись</h3>
	<div class="sidebar-form sidebar__wrapp">
		<p class="sidebar-form__text">Будь у курсі, не пропусти цікаві події.</p>
		<?php echo do_shortcode('[contact-form-7 id="d7c96d9" title="Контактна форма-футер"]'); ?>
	</div>
</div>

<div class="sidebar__section">
	<h3 class="sidebar__title">Підтримай</h3>

	<div class="sidebar-donate sidebar__wrapp">
			<div class="sidebar-donate__img">
          <img  src="<?php bloginfo('template_url'); ?>/assets/images/pov-woman-feeds-wild-horse 1.jpg" alt="Жінка з рук кормить коня ">
	</div>
	    <a class="sidebar-donate__link" href="<?php echo get_permalink(20); ?>">Задонатити
        <svg class="events__icon" width="24px" height="24px">
          <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow"></use>
       </svg>
    </a>
	</div>

</div>

</aside>
