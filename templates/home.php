<?php
	/*
	Template Name: home
	*/
	get_header();
?>
<main class="main">
    <section class="hero-home"
             style="background: linear-gradient(100deg, #D9D9D9 15.95%, rgba(217, 217, 217, 0.00) 57.19%), url(<?php the_field( 'hero-img' ) ?>); background-size: cover; background-repeat: no-repeat; background-position: center; ">
        <div class="container section">
            <h1 class="visually-hidden">Коні української Поліської породи</h1>
            <h2 class="hero-home__title"><?php the_field( 'hero-title' ); ?></h2>
            <p class="hero__text"><?php the_field( 'hero-text' ); ?></p>
            <a class="hero__button" href="<?php echo get_permalink( 7 ); ?>"><?php the_field( 'hero-button' ); ?>
                <svg class="hero__icon" width="24px" height="24px">
                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-arrow"></use>
                </svg>
            </a>
        </div>
    </section>

    <section class="activities container">
        <div class="swiper swiperActivities">
            <div class="activities__list swiper-wrapper">

                <div class="activities__item swiper-slide">
                    <div class="activities__img">
                        <img src='<?php the_field( 'img_1' ) ?>' alt='<?php the_field( 'alt_1' ) ?>'/>
                    </div>
                    <p class="activities__text"><?php the_field( 'text_1' ) ?></p>
                </div>

                <div class="activities__item swiper-slide">
                    <div class="activities__img">
                        <img src='<?php the_field( 'img_2' ) ?>' alt='<?php the_field( 'alt_2' ) ?>'/>
                    </div>
                    <p class="activities__text"><?php the_field( 'text_2' ) ?></p>
                </div>

                <div class="activities__item swiper-slide">
                    <div class="activities__img">
                        <img src='<?php the_field( 'img_3' ) ?>' alt='<?php the_field( 'alt_3' ) ?>'/>
                    </div>
                    <p class="activities__text"><?php the_field( 'text_3' ) ?></p>
                </div>

            </div>
        </div>
    </section>

    <section class="about-us section container">
        <div class="about-us__container">
            <div class="about-us__logo">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/logo.svg" alt="Логотип"
                     class='about-us__sign'>
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/text.svg" alt="Щербаті Цуглі"
                     class='about-us__name'>
            </div>
            <p class="about-us__text"><?php the_field( 'about-us__text' ); ?> </p>

        </div>
    </section>

    <section class="gallery-desktop  section container">
        <div class="gallery-home__wrapper ">

            <div class="gallery__head">
                <h2 class="gallery__title"><?php the_field( 'gallery-text' ); ?></h2>
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
            </div>


			<?php if ( have_rows( 'gallery' ) ): ?>
            <div class="gallery-home__container lightBox">
				<?php while ( have_rows( 'gallery' ) ): the_row(); ?>
					<?php
					$image    = get_sub_field( 'img' );
					$category = get_sub_field( 'category' );
					$alt      = get_sub_field( 'alt' );
					?>

                    <a class="gallery__link gallery__item" data-category="<?php echo $category; ?>"
                       href="<?php echo $image['url']; ?>">
                        <img class="gallery__image" src="<?php echo $image['url']; ?>" alt="<?php echo $alt; ?>"
                             data-source="<?php echo $image['url']; ?>"/>
                    </a>

				<?php endwhile; ?>
				<?php endif; ?>
            </div>

            <div class="gallery-pagination__box">
                <ul class="gallery-pagination__list">
					<?php
						$total_images    = count( get_field( 'gallery' ) );
						$images_per_page = 12;
						$total_pages     = ceil( $total_images / $images_per_page );

						for ( $i = 1; $i <= $total_pages; $i ++ ) {
							echo '<li><a  " data-page="' . $i . '">' . $i . '</a></li>';
						}
					?>
            </div>
    </section>


    <section class="gallery-mob">
        <div class="gallery-mob-wrapper">
            <div class="section container">
                <div class="gallery-home__wrapper">
                    <h2 class="gallery__title"><?php the_field( 'gallery-text' ); ?></h2>
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
            </div>

			<?php if ( have_rows( 'gallery' ) ) : ?>
                <div class="swiper swiperHomeGallery">
                    <div class="swiper-wrapper">
						<?php while ( have_rows( 'gallery' ) ) : the_row(); ?>
							<?php
							$image    = get_sub_field( 'img' );
							$category = get_sub_field( 'category' );
							?>
                            <div class="gallery__item swiper-slide" data-category="<?php echo $category; ?>">
                                <img src="<?php echo $image['url']; ?>"
                                     alt="<?php echo $image['alt']; ?>"/>
                            </div>

						<?php endwhile; ?>
                    </div>
                </div>
			<?php endif; ?>

        </div>

    </section>

    <section class="section events-section container">
		<?php if ( have_posts() ) : ?>

			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content-events' );

			endwhile;
		endif;
		?>
    </section>

	<?php get_template_part( 'template-parts/buttonTop' ); ?>

</main>

<?php get_footer(); ?>





