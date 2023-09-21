<?php
/*
Template Name: home
*/
get_header();
?>
<main class="container" >
<section class="hero-home section" style="background: linear-gradient(100deg, #D9D9D9 15.95%, rgba(217, 217, 217, 0.00) 57.19%), url(<?php the_field('hero-img') ?>); background-size: cover; background-repeat: no-repeat; background-position: center; ">
    <h1 class="title">Коні породи Щербаті Цуглі</h1>
    <h2 class="hero-home__title"><?php the_field('hero-title'); ?></h2>
    <p class="hero__text"><?php the_field('hero-text'); ?></p>
    <a class="hero__button" href="<?php echo get_permalink(12); ?>"><?php the_field('hero-button'); ?> 
        <svg class="hero__icon" width="24px" height="24px">
          <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow"></use>
       </svg>
    </a>
</section> 

<section class="activities ">
     <div class="swiper swiper-activities">
    <ul class="activities__list swiper-wrapper">
        
        <li class="activities__item swiper-slide">
        <div class="activities__img">
            <img src='<?php  the_field('img_1')?>' alt='<?php  the_field('alt_1')?>'/>
        </div>
        <p class="activities__text"><?php  the_field('text_1')?></p>
        </li>

        <li class="activities__item swiper-slide" >
        <div class="activities__img">
            <img src='<?php  the_field('img_2')?>' alt='<?php  the_field('alt_2')?>'/>
        </div>
        <p class="activities__text"><?php  the_field('text_2')?></p>
        </li>

        <li class="activities__item swiper-slide">
        <div class="activities__img">
            <img src='<?php  the_field('img_3')?>' alt='<?php  the_field('alt_3')?>'/>
        </div>
        <p class="activities__text"><?php  the_field('text_3')?></p>
        </li>

    </ul> 
     </div>
</section>

<section class="about-us section">
    <div class="about-us__container">
        <div class="about-us__logo">
            <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.svg" alt="Логотип" class='about-us__sign'>
            <img src="<?php bloginfo('template_url'); ?>/assets/images/text.svg" alt="Щербаті Цуглі" class='about-us__name'>
        </div>
     <p class="about-us__text"><?php the_field('about-us__text'); ?> </p>

</div>
 </section>

 <section class="gallery section">
   <div class="gallery-home__wrapper ">

          <div class="gallery__head">
              <h2 class="gallery__title"><?php the_field('gallery-text'); ?></h2>
              <ul class="gallery__buttons">
                <li>
                  <button class="gallery__button" data-category="museum">Музей-Хаб</button>
                </li>
                <li>
                  <button class="gallery__button" data-category="horses">Поліські Коні</button>
                </li>
                <li>
                  <button class="gallery__button" data-category="events">Події</button>
                </li>
                <li>
                  <button class="gallery__button" data-category="excursions">Екскурсії</button>
                </li>
                <li>
                  <button class="gallery__button active" data-category="all">Всі</button>
                </li>
              </ul>
              <div class="swiper-pagination"></div>
          </div>



<?php if(have_rows('gallery')):?>
        <div class="gallery-home__container">
        <?php while(have_rows('gallery')): the_row();?>
                <?php   
        $image=get_sub_field('img');
        $category = get_sub_field('category'); 
        $alt = get_sub_field('alt');
      ?>

          <a class="gallery__link gallery__item" data-category="<?php echo $category; ?>"  href="<?php echo $image['url']; ?>">
            <img class="gallery__image" src="<?php echo $image['url']; ?>" alt="<?php echo $alt; ?>"  data-source="<?php echo $image['url']; ?>"/>
          </a>

<?php endwhile; ?>
<?php endif; ?> 
    </div>

  <div class="gallery-pagination">
    <ul class="gallery-pagination__list">
        <?php
        $total_images = count(get_field('gallery')); // Отримуємо загальну кількість зображень
        $images_per_page = 12; // Кількість зображень на сторінці
        $total_pages = ceil($total_images / $images_per_page); // Загальна кількість сторінок

        for ($i = 1; $i <= $total_pages; $i++) {
            echo '<li><a  "href="#" data-page="' . $i . '">' . $i . '</a></li>';
        }
        ?>
  </div>

<?php if (have_rows('gallery')) : ?>
    <div class="galerry-home__container--mob swiper-gallery">
        <div class="gallery__wrap swiper-wrapper">
            <?php while (have_rows('gallery')) : the_row(); ?>
                <?php
                $image = get_sub_field('img');
                $category = get_sub_field('category');
                $alt = get_sub_field('alt');
                ?>

                <div class="gallery__item swiper-slide" data-category="<?php echo $category; ?>">
                    <img class="gallery__img" src="<?php echo $image['url']; ?>" alt="<?php echo $alt; ?>" />
                </div>
                
            <?php endwhile; ?>

        </div>
    </div>
<?php endif; ?>

</section>

<section class="section ">
		<?php if ( have_posts() ) : ?>

				<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content-events');

			endwhile;
		endif;
		?>
</section>
</main>

<?php get_footer(); ?>





