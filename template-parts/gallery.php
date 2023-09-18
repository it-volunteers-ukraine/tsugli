<section class= "gallery section">
<div class= "gallery__wrapper">

        <?php if(have_rows('gallery')):?>
        <div class="gallery__container">
        <?php while(have_rows('gallery')): the_row();?>
                <?php   
        $image=get_sub_field('gallery-img');
        $alt = get_sub_field('gallery-alt');
        ?>

          <a class="gallery__link gallery__item"  href="<?php echo $image['url']; ?>">
            <img class="gallery__image" src="<?php echo $image['url']; ?>" alt="<?php echo $alt; ?>" data-source="<?php echo $image['url']; ?>"/>
          </a>

<?php endwhile; ?>
       </div>
<?php endif; ?> 


<?php if (have_rows('gallery')) : ?>
    <div class="galerry__container--mob swiper-gallery">
        <div class="gallery__wrap swiper-wrapper">
            <?php while (have_rows('gallery')) : the_row(); ?>
                <?php
                $image = get_sub_field('gallery-img');
                $alt = get_sub_field('gallery-alt');
                ?>

                <div class="gallery__item swiper-slide" >
                    <img class="gallery__img" src="<?php echo $image['url']; ?>" alt="<?php echo $alt; ?>" />
                </div>
                
            <?php endwhile; ?>
        </div>
    </div>
<?php endif; ?>
</div>
</section>