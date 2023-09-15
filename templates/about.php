<?php
/*
Template Name: about
*/
get_header();
?>
<main class="container">
        <h1 class='visually-hidden'>Основними напрямки  діяльності організації Щербаті Цуглі  </h1>
    <section class="about-hero section" style="background: linear-gradient(100deg, #D9D9D9 15.95%, rgba(217, 217, 217, 0.00) 57.19%), url(<?php the_field('img') ?>);  background-size: cover; background-repeat: no-repeat; background-position: center; ">
<h2 class="about-hero__title"><?php the_field('title') ?></h2>
    </section>

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
    <div class="about__section box">
        <div class="about__img">

        <img src="<?php  the_field('museum-img')?>" alt=""/>
    </div>
    <h3 class="about__title"><?php  the_field('museum-title')?></h3>
        <input type="checkbox" id="expanded1">

    <p class="about__text"><?php  the_field('museum-text')?></p>
        <label class="about__button" for="expanded1" role="button">Читати Далі</label>
           <a href="<?php echo get_permalink(38); ?>" class="about__link"><?php  the_field('museum-button')?>     
       <svg class="posts__icon" width="24px" height="24px">
          <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow"></use>
       </svg>
    </a>
    </div>
    
</section>

<section class="section">
    <div class="about__section box">
        <div class="about__img">
        <img src="<?php  the_field('horses-img')?>" alt=""/>
    </div>
    <h3 class="about__title"><?php  the_field('horses-title')?></h3>
    <input type="checkbox" id="expanded2">
    <p class="about__text"><?php  the_field('horses-text')?></p>
    <label class="about__button" for="expanded2" role="button">Читати Далі</label>

        <a href="<?php echo get_permalink(38); ?>" class="about__link"><?php  the_field('horses-button')?>     
       <svg class="posts__icon" width="24px" height="24px">
          <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow"></use>
       </svg>
    </a>
    </div>
    
</section>

<section class="section">
    <div class="about__section box">
        <div class="about__img">
        <img src="<?php  the_field('nature-img')?>" alt=""/>
    </div>
    <h3 class="about__title"><?php  the_field('nature-title')?></h3>
      <input type="checkbox" id="expanded3">
    <p class="about__text"><?php  the_field('nature-text')?></p>
      <label class="about__button" for="expanded3" role="button">Читати Далі</label>
    
        <a href="<?php echo get_permalink(38); ?>" class="about__link"><?php  the_field('nature-button')?>     
       <svg class="posts__icon" width="24px" height="24px">
          <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow"></use>
       </svg>
    </a>
    </div>
    
</section>


    </div>
</main>


<?php get_footer(); ?>