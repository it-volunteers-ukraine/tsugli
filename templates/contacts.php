<?php
	/*
	Template Name: contacts
	*/
	get_header();
?>

<main class="container">

    <h1 class='visually-hidden'>Зв'яжіться з нами</h1>
	<?php get_template_part( 'template-parts/hero' ); ?>


    <!--        Social links-->
    <section class="section">
        <div class="socials">
            <ul>
                <li class="social-box">
                    <div class="messengers">
                        <a href="viber://chat?number=+380978955553" rel="noopener noreferrer" target="_blank">
                            <svg>
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-viber"></use>
                            </svg>
                        </a>
                        <a href="https://t.me/+30978955553" rel="noopener noreferrer" target="_blank">
                            <svg>
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-telegram"></use>
                            </svg>
                        </a>
                        <a href="https://wa.me/+380978955553" rel="noopener noreferrer" target="_blank">
                            <svg>
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-whatsapp"></use>
                            </svg>
                        </a>
                    </div>
                    <span> (097) 895 55 53</span>
                </li>


                <li>
                    <a class="social-box" href="tel:+380937451349" target="_blank">
                        <svg>
                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-carbon_phone"></use>
                        </svg>
                        <span>(093) 745 13 49</span>
                    </a>
                </li>

                <li>
                    <a class="social-box" href="mailto:tsugli.ngo@gmail.com" rel="noopener noreferrer"
                       target="_blank">
                        <svg>
                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-mail"></use>
                        </svg>
                        <span>tsugli.ngo@gmail.com</span>
                    </a>
                </li>

                <li>
                    <a class="social-box" href="https://www.instagram.com/shche_tsugli/" rel="noopener noreferrer"
                       target="_blank">
                        <svg>
                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-instagram"></use>
                        </svg>
                        <span>shche_tsugli</span>
                    </a>
                </li>

                <li>
                    <a class="social-box" href="https://www.facebook.com/shche.tsugli/" rel="noopener noreferrer"
                       target="_blank"
                    >
                        <svg>
                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-fb"></use>
                        </svg>
                        <span>shche.tsugli</span>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <!--    Contact form + location map-->
    <section class="section">
        <div class="contact">
            <div class="location-wrapper">
                <div class="address">
                <span>
                <svg>
                    <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-location"></use>
                </svg>
                </span>
                    <p>Хмельницька область, 32432, Кам'янець-Подільський р-н,
                        с. Слобідка-Маліївецька, вул. Лісова 23.
                    </p>
                </div>

                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d21028.16555892187!2d27.027787656674914!3d48.98766603035668!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473246634da3ed57%3A0xa32610c2812f5a40!2sSlobidka-Malijevets&#39;ka%2C%20Khmelnytskyi%20Oblast%2C%20Ukraine%2C%2032432!5e0!3m2!1sen!2spl!4v1695319573377!5m2!1sen!2spl"
                            title="Розташування стайні Щербаті цуглі"
                            width="100%"
                            height="100%"
                            style="border:0;" allowfullscreen loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="form-wrapper">
                <h2 class="form-title">Контактна форма</h2>
                <p class="form-text">Якщо Ви маєте коментарі чи запитання, зв`яжіться з нами зручним способом.</p>

				<?php echo do_shortcode( '[contact-form-7 id="01ba850" title="Контактна форма - сторінка контактів"]' ); ?>
            </div>
        </div>
    </section>


</main>

<?php get_footer(); ?>

