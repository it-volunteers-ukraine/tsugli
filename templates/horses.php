<?php
/*
Template Name: horses
*/
get_header();
?>
<main class="main">
    <h1 class='visually-hidden'>Поліський кінь-унікальна аборигенна порода</h1>
        
  <?php get_template_part( 'template-parts/hero'); ?>

    <section class="section horses container">
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

<section class="horses-video section container">
<div class="horses-video__wrapper">
  
  
<?php if(have_rows('video-gallery')):?>
       <div class="horses-video__container videoLightBox swiper-video">
        <div class="swiper-wrapper">
        <?php while(have_rows('video-gallery')): the_row();?>
                <?php   
        $video=get_sub_field('video');
        $title = get_sub_field('video-title');
        $text = get_sub_field('video-text');
        ?>
      <div class="horses-video__card swiper-slide">
        <div class="horses-video__content">
          <video data-source="<?php echo $video['url']; ?>">
			     <source src="<?php echo $video['url']; ?>" type="video/mp4"  >
          </video>

       
          <img class="horses-video__icon" src="<?php bloginfo('template_url'); ?>/assets/images/btn_video.svg" width="82px" height="82px" alt="Іконка програвання плеєра">

       </div>

        <div class="horses-video__box">
            <h3 class="horses-video__title"><?php echo $title; ?></h3>
            <p class="horses__text"><?php echo $text; ?></p>
       </div>
  
      </div>

    
<?php endwhile; ?>
       </div>
       </div>
 <?php endif; ?> 
 
<div class="horses-video__pagination">
  <button class="horses-video__button button-prev">
     <svg  class="icon__prev" width="24px" height="24px" aria-label="Кнопка назад для гортання відео">
          <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow-right"></use>
       </svg>
  </button>
  <button class="horses-video__button button-next"> 
    <svg  width="24px" height="24px" aria-label="Кнопка вперед для гортання відео">
          <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow-right"></use>
    </svg>
  </button>
</div>

</div>
</section>

<?php get_template_part( 'template-parts/buttonTop'); ?>

</main>


<?php get_footer(); ?>