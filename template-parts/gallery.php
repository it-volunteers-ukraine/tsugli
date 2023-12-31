<section class="gallery">
    <div class="gallery-mob-wrapper">
        <div class="section container">
            <div class="gallery__wrapper">
				<?php if ( have_rows( 'gallery' ) ): ?>
                    <div class="gallery__container lightBox">
						<?php while ( have_rows( 'gallery' ) ): the_row(); ?>
							<?php
							$image = get_sub_field( 'gallery-img' );
							$alt   = get_sub_field( 'gallery-alt' );
							?>

                            <a class="gallery__link gallery__item" href="<?php echo $image['url']; ?>">
                                <img class="gallery__image" src="<?php echo $image['url']; ?>" alt="<?php echo $alt; ?>"
                                     data-source="<?php echo $image['url']; ?>" loading="lazy"/>
                            </a>

						<?php endwhile; ?>

                    </div>
				<?php endif; ?>


                <div class="gallery-pagination">
                    <ul class="gallery-pagination__list">
						<?php
							$total_images    = count( get_field( 'gallery' ) ); // Отримуємо загальну кількість зображень
							$images_per_page = 8; // Кількість зображень на сторінці
							$total_pages     = ceil( $total_images / $images_per_page ); // Загальна кількість сторінок

							for ( $i = 1; $i <= $total_pages; $i ++ ) {
								echo '<li><a  " data-page="' . $i . '">' . $i . '</a></li>';
							}
						?>
                    </ul>
                </div>
            </div>
        </div>

		<?php if ( have_rows( 'gallery' ) ) : ?>

        <!--Mobile carousel-->
        <div class="swiper swiperGallery">
            <div class="swiper-wrapper">
				<?php while ( have_rows( 'gallery' ) ) : the_row(); ?>
					<?php
					$image = get_sub_field( 'gallery-img' );
					$alt   = get_sub_field( 'gallery-alt' );
					?>

                    <div class="gallery__item swiper-slide">
                        <img src="<?php echo $image['url']; ?>"
                             alt="<?php echo $alt; ?>"/>
                    </div>

				<?php endwhile; ?>
            </div>
        </div>
    </div>

	<?php endif; ?>

</section>