     <ul class="posts__list">
           <?php
            global $post;

            $myposts = get_posts([ 
              'numberposts' => -1,
              'posts_per_page' => 6,
              'order' => 'DESC',  
              'orderby' => 'date',  
              'paged' => get_query_var('paged') ? get_query_var('paged') : 1 

            ]);

            if( $myposts ){
              foreach( $myposts as $post ){
                setup_postdata( $post );
                ?>

    <li class="posts__item">
     
    <div class="posts__img">
      
    <?php
 if (has_post_thumbnail()) {
      the_post_thumbnail();
  } else {
    echo '<img src="' . get_template_directory_uri() . '/assets/images/no-photo.jpg" alt="Кінь">';
  }
  ?>
    </div>

         <div class="posts__description">
           <div class="posts__info">
              <div class="posts__category">
                  <svg  width="24px" height="24px">
                      <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-folder"></use>
                  </svg>  
              <?php the_category(', '); ?></div>
              <div class="posts__date">
                   <svg  width="24px" height="24px">
                      <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-calendar"></use>
                    </svg>  
                <?php the_field('date'); ?></div>
           </div>
           
<h3 class="posts__subtitle"><?php the_title(); ?></h3>
<?php the_content(); ?>
    <a href="<?php the_permalink(); ?>" class="posts__link">Дізнатися Більше     
       <svg class="posts__icon" width="24px" height="24px">
          <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow"></use>
       </svg>
    </a>
      </div>
    </li>
                <?php 
              }
            } else {
        echo '<li class="posts__subtitle"> Подій не заплановано.</li>';
            }
            wp_reset_postdata(); 
            ?>
            </ul>

            