<?php
/*
Template Name: about
*/
get_header();
?>
<main class="main container">
        <h1 class='visually-hidden'>Основними напрямки  діяльності організації Щербаті Цуглі  </h1>
  <?php get_template_part( 'template-parts/hero'); ?>


    <div class="about__container">

    <section class="section">
     <div class="about-history">
        <div class="about-history__logo">
            <div class="about-history__box">
                <div class="about-history__img about-history__img--old ">
                    <img  src="<?php bloginfo('template_url'); ?>/assets/images/logo-old.svg" alt="Логотип Ореолі">
                </div>
                <span class="about-history__text">2003</span>
            </div>
            <div class="about-history__box about-history__box--small">
                <div class="about-history__img about-history__img--new ">
                <img  src="<?php bloginfo('template_url'); ?>/assets/images/logo-new.svg" alt="Логотип з тавром">
                </div>
                <span class="about-history__text">2023</span>
            </div>
        </div>
        <p class="about-history__description"><?php  the_field('text')?></p>
     <div class="about-history__box  about-history__box--desktop ">
                <div class="about-history__img about-history__img--new ">
                <img  src="<?php bloginfo('template_url'); ?>/assets/images/logo-new.svg" alt="Логотип з тавром">
                </div>
                <span class="about-history__text">2023</span>
            </div>  
     </div>
    </section>

<section class="section">
    <div class="about__section box about_museum">
        <div class="about__img museum__img">

        <img src="<?php  the_field('museum-img')?>" alt="<?php the_field('museum_alt')?> "/>
    </div>
    <h3 class="about__title"><?php  the_field('museum-title')?></h3>
        <input type="checkbox" id="expanded1">

    <p class="about__text truncated"><?php  the_field('museum-text')?></p>
        <label class="about__button" for="expanded1" role="button">Читати Далі</label>
           <a href="<?php echo get_permalink(13); ?>" class="about__link"><?php the_field('museum-button')?>     
       <svg class="posts__icon" width="24px" height="24px">
          <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow"></use>
       </svg>
    </a>
    </div>
    
</section>

<section class="section">
    <div class="about__section box about__horses">
        <div class="about__img horses__img">
        <img src="<?php  the_field('horses-img')?>" alt="<?php  the_field('horses_alt')?>"/>
    </div>
    <h3 class="about__title"><?php  the_field('horses-title')?></h3>
    <input type="checkbox" id="expanded2">
    <p class="about__text truncated"><?php  the_field('horses-text')?></p>
    <label class="about__button" for="expanded2" role="button">Читати Далі</label>

        <a href="<?php echo get_permalink(11); ?>" class="about__link"><?php  the_field('horses-button')?>     
       <svg class="posts__icon" width="24px" height="24px">
          <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow"></use>
       </svg>
    </a>
    </div>
    
</section>

<section class="section">
    <div class="about__section box about__nature">
        <div class="about__img  nature__img">
        <img src="<?php  the_field('nature-img')?>" alt="<?php  the_field('nature_alt')?>"/>
    </div>
    <h3 class="about__title"><?php  the_field('nature-title')?></h3>
      <input type="checkbox" id="expanded3">
    <p class="about__text truncated"><?php  the_field('nature-text')?></p>
    <label class="about__button" for="expanded3" role="button">Читати Далі</label>
    
        <a href="<?php echo get_permalink(13); ?>" class="about__link"><?php  the_field('nature-button')?>     
       <svg class="posts__icon" width="24px" height="24px">
          <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow"></use>
       </svg>
    </a>
    </div>
    
</section>

<section class="about-gallery section">
  <div class="about-gallery__container">

     <h3 class="about__title about-gallery__title"><?php  the_field('gallery-title')?></h3>
    <a class="about-gallery__button" href="<?php echo esc_attr(get_field('instagram', 18));?>"><?php the_field('gallery-button'); ?> 
      <svg class="about-gallery__icon" width="24px" height="24px">
          <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow"></use>
       </svg>
    </a>

      <div class="about-gallery__wrapper about-swiper">

        <ul class="about-gallery__list swiper-wrapper">
            
           <li class="about-gallery__item swiper-slide">
             <div class="about-gallery__img">
               <img src='<?php  the_field('img_1')?>' alt='<?php  the_field('alt_1')?>'/>
             </div>
           </li>
           <li class="about-gallery__item swiper-slide">
             <div class="about-gallery__img">
               <img src='<?php  the_field('img_2')?>' alt='<?php  the_field('alt_2')?>'/>
             </div>
           </li>
           <li class="about-gallery__item swiper-slide">
             <div class="about-gallery__img">
               <img src='<?php  the_field('img_3')?>' alt='<?php  the_field('alt_3')?>'/>
             </div>
           </li>
           <li class="about-gallery__item swiper-slide">
             <div class="about-gallery__img">
               <img src='<?php  the_field('img_4')?>' alt='<?php  the_field('alt_4')?>'/>
             </div>
           </li>
         </ul>
      </div>
  </div>
   
</section>

    </div>

    <?php get_template_part( 'template-parts/buttonTop'); ?>

</main>


<?php get_footer(); ?>