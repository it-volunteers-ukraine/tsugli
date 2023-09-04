<?php
/*
Template Name: home
*/
get_header();
?>
<main class="container">
<div class="hero-wrapper"></div>
<section class="hero section" style="background: linear-gradient(100deg, #D9D9D9 15.95%, rgba(217, 217, 217, 0.00) 57.19%), url(<?php the_field('hero-img') ?>); background-size: cover; background-repeat: no-repeat; background-position: center; ">
    <h1 class="title">Коні породи Щербаті Цуглі</h1>
    <h2 class="hero__title"><?php the_field('hero-title'); ?></h2>
    <p class="hero__text"><?php the_field('hero-text'); ?></p>
    <a class="hero__button" href="<?php echo get_permalink(12); ?>"><?php the_field('hero-button'); ?> 
        <svg class="hero__icon" width="24px" height="24px">
          <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow"></use>
       </svg>
    </a>
</section> 

<section class="about-us">
     <div class="activities swiper">
    <ul class="activities__list swiper-wrapper">
        
        <li class="activities__item swiper-slide">
        <div class="activities__img">
            <img src='<?php  the_field('img_1')?>' alt=''/>
        </div>
        <p class="activities__text"><?php  the_field('text_1')?></p>
        </li>

        <li class="activities__item swiper-slide" >
        <div class="activities__img">
            <img src='<?php  the_field('img_2')?>' alt=''/>
        </div>
        <p class="activities__text"><?php  the_field('text_2')?></p>
        </li>

        <li class="activities__item swiper-slide">
        <div class="activities__img">
            <img src='<?php  the_field('img_3')?>' alt=''/>
        </div>
        <p class="activities__text"><?php  the_field('text_3')?></p>
        </li>

    </ul> 
     </div>
</section>
      

</main>




<?php get_footer(); ?>