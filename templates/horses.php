<?php
/*
Template Name: horses
*/
get_header();
?>
<main class="main container">
    <h1 class='visually-hidden'>Коні української породи Щербаті Цуглі  </h1>
        
  <?php get_template_part( 'template-parts/hero'); ?>


    <section class="section horses">
    <div class="horses__section box">
     <div class="horses__img">
       <img src="<?php  the_field('img')?>" alt="<?php the_field('alt')?> "/>
    </div>
    <h3 class="horses__title"><?php  the_field('title')?></h3>
    <input type="checkbox" id="expanded1">
    <p class="horses__text truncated"><?php  the_field('text')?></p>
    <label class="horses__button" for="expanded1" role="button">Читати Далі</label>
    </div>
    
</section>

<?php get_template_part( 'template-parts/gallery'); ?>

<section class="horses-video section">
<div class="horses-video__wrapper">


</div>

</section>

<?php get_template_part( 'template-parts/buttonTop'); ?>

</main>


<?php get_footer(); ?>