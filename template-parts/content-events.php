 <div class="events">
    <div class="events__wrapper">
  <h2 class="events__title">Події</h2>
    <a class="events__button" href="<?php echo get_permalink(11112); ?>">Всі
        <svg class="events__icon" width="24px" height="24px">
          <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow"></use>
       </svg>
    </a>
  </div>


<div class="events__container">
  <ul class="events__list">

 <?php global $post;
 $myposts= get_posts([
 'numberposts' => 3, 
  'order' => 'DESC',  
  'orderby' => 'date'  
 ]);

 if ($myposts){
  foreach ($myposts as $post){
    setup_postdata($post);
  ?>

    <li class="events__item">
      <div class="events__img">
      
    <?php
 if (has_post_thumbnail()) {
      the_post_thumbnail();
  } else {
    echo '<img src="' . get_template_directory_uri() . '/assets/images/no-photo.jpg" alt="Кінь">';
  }
  ?>
   </div>
         <div class="events__description">
           <div class="events__info">
              <div class="events__category">
                  <svg  width="24px" height="24px">
                      <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-folder"></use>
                  </svg>  
              <?php the_category(', '); ?></div>
              <div class="events__date">
                   <svg  width="24px" height="24px">
                      <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-calendar"></use>
                    </svg>  
                <?php the_field('date'); ?></div>
           </div>
           
<h3 class="events__subtitle"><?php the_title(); ?></h3>
<?php the_content(); ?>
    <a href="<?php the_permalink(); ?>" class="events__link">Дізнатися Більше     
       <svg class="events__icon" width="24px" height="24px">
          <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow"></use>
       </svg>
    </a>
      </div>
    </li>

 <?php }
 }
 wp_reset_postdata();?>
  
   </ul>
  </div>

 </div>