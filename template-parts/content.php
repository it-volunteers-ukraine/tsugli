<article class='article'>
    <div class="article__wrapper">

    <div class='article__img'>
  <?php
  if (has_post_thumbnail()) {
    the_post_thumbnail();
  } else {
    echo '<img src="' . get_template_directory_uri() . '/assets/images/no-photo.jpg" alt="Кінь">';
  }
  ?>
    </div>

    <div class='article__wrapp'>
       <ul class='article__info'>
        
          <li class="article__item article__item--orange">
             <svg  width="24px" height="24px">
              <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-folder"></use>
             </svg>
          <?php the_category(', '); ?>
          </li>  

          <li class="article__item">
             <svg  width="24px" height="24px">
               <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-calendar"></use>
             </svg>
          <span><?php the_field('date'); ?></span>
          </li>  

          <li class="article__item">
             <svg width="24px" height="24px">
                 <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-chat"></use>
              </svg>
             <span><?php comments_number('Без коментарів', '1 коментар', '% коментарів'); ?></span>
          </li>  
       </ul>

    <h2 class="article__title"><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </div>
    </div>

    <div class="article-gallery">

    <?php if (have_rows('images')) : ?>
    <div class="article-galerry__container swiper-article">
        <div class="article-gallery__wrap swiper-wrapper">
            <?php while (have_rows('images')) : the_row(); ?>
                <?php
                $image = get_sub_field('photo');
                $alt = get_sub_field('text');
                ?>

                <div class="article-gallery__img swiper-slide" >
                    <img class="article-gallery__img" src="<?php echo $image['url']; ?>" alt="<?php echo $alt; ?>" />
                </div>
                
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>


    </div>
</article>



   