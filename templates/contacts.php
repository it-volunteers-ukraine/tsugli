<?php
	/*
	Template Name: contacts
	*/
	get_header();
?>

<main class="main">

    <h1 class='visually-hidden'>Адреса, контакти ГО Щербаті Цуглі</h1>
	<?php get_template_part( 'template-parts/hero' ); ?>

    <!--        Social links-->
    <section class="section container">
        <div class="socials">
            <ul>
                <li class="social-box">
                    <div class="messengers">
                        <a href="<?php the_field( 'viber' ); ?>" rel="noopener noreferrer"
                           target="_blank" aria-label="Зв'язатись за допомогою мессенджера Вайбер">
                            <svg>
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-viber"></use>
                            </svg>
                        </a>
                        <a href="<?php the_field( 'telegram' ); ?>" rel="noopener noreferrer"
                           target="_blank" aria-label="Зв'язатись за допомогою мессенджера Телеграм">
                            <svg>
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-telegram"></use>
                            </svg>
                        </a>
                        <a href="<?php the_field( 'whatsapp' ); ?>" rel="noopener noreferrer"
                           target="_blank" aria-label="Зв'язатись за допомогою мессенджера Вотсапп">
                            <svg>
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-whatsapp"></use>
                            </svg>
                        </a>
                    </div>
                    <span> <?php the_field( 'messengers_display' ); ?></span>
                </li>

                <li>
                    <a class="social-box" href="tel:<?php the_field( 'telephone' ); ?>" target="_blank"
                       aria-label="Зв'язатись за допомогою телефону">
                        <svg>
                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-carbon_phone"></use>
                        </svg>
                        <span><?php the_field( 'telephone_display' ); ?></span>
                    </a>
                </li>

                <li>
                    <a class="social-box" href="mailto:<?php the_field( 'email' ); ?>"
                       rel="noopener noreferrer"
                       target="_blank" aria-label="Зв'язатись за допомогою електронної пошти">
                        <svg>
                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-mail"></use>
                        </svg>
                        <span><?php the_field( 'email' ); ?></span>
                    </a>
                </li>

                <li>
                    <a class="social-box" href="<?php the_field( 'instagram' ); ?>/"
                       rel="noopener noreferrer"
                       target="_blank" aria-label="Перейти на сторінку в Інстаграм">
                        <svg>
                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-instagram"></use>
                        </svg>
                        <span><?php the_field( 'instagram_display' ); ?></span>
                    </a>
                </li>

                <li>
                    <a class="social-box" href="<?php the_field( 'facebook' ) ?>/"
                       rel="noopener noreferrer"
                       target="_blank" aria-label="Перейти на сторінку в Фейсбук"
                    >
                        <svg>
                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-fb"></use>
                        </svg>
                        <span><?php the_field( 'facebook_display' ); ?></span>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!--    Contact form + location map-->
    <section class="section container ">
        <div class="contact">
            <div class="location-wrapper">
                <div class="address">
                <span>
                <svg>
                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-location"></use>
                </svg>
                </span>
                    <p><?php the_field( 'address' ) ?></p>
                </div>

                <div class="map">
                    <iframe src="<?php the_field( 'address_link' ) ?>"
                            title="Розташування стайні Щербаті цуглі"
                            width="100%"
                            height="100%"
                            style="border:0;" allowfullscreen loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="form-wrapper">
                <h2 class="form-title"><?php the_field( 'form_title' ) ?></h2>
                <p class="form-text"><?php the_field( 'form_text' ) ?></p>

				<?php echo do_shortcode( '[contact-form-7 id="290315b" title="Контактна форма - сторінка контактів"]' ); ?>
            </div>
        </div>
    </section>

 <?php get_template_part( 'template-parts/buttonTop'); ?>

</main>

<?php get_footer(); ?>

