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
</main>

<?php get_footer(); ?>

