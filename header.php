<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset='<?php bloginfo( 'charset' ); ?>'/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
    <title>Щербаті Цуглі</title>
</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="container section">


            <div class="header__wrapper">
				<?php
					if ( has_custom_logo() ) {
						echo get_custom_logo();
					}
				?>
                <button class="button-menu is-open"
                        type="button"
                        aria-controls="menu-container"
                        data-menu-button>
                    <svg class="button-menu__icon" width="44px" height="44px" aria-label="Перемикач мобільного меню">
                        <use class="button-menu__burger"
                             href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-menu"></use>
                        <use class="button-menu__cros"
                             href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-x"></use>
                    </svg>
                </button>

                <div class="menu-container" id="menu-container" data-menu>
                    <div class="menu-wrapper">
                        <nav class="nav-menu">
							<?php wp_nav_menu( [
								'theme_location' => 'header',
								'container'      => false,
								'menu_class'     => 'nav-menu__list',
								'menu_id'        => false,
								'echo'           => true,
								'items_wrap'     => '<ul id="%1$s" class="header_list %2$s">%3$s</ul>'
							] );
								/*
								Temporary put # instead of <?php echo esc_attr(get_field('instagram_link', 16));?> in the a tags in mobile menu to prevent project crush when run locally.
								*/
							?>
                        </nav>

                        <div class="header__mobile">
                            <a class="header__button" href="<?php echo get_permalink( 20 ); ?>"
                            >Задонатити
                            </a>
                            <ul class="header-networks">
                                <li class="header-networks__item">
                                    <a href="viber://add?number=<?php echo esc_attr( get_field( 'viber', 18 ) ); ?>"
                                       aria-label="Посилання на вайбер">
                                        <svg class="header-networks__icon" width="44px" height="44px">
                                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-viber"></use>
                                        </svg>
                                    </a>
                                </li>
                               <li class="header-networks__item">
                                    <a href="<?php echo esc_attr( get_field( 'facebook', 18 ) ); ?>" target="_blank"
                                       aria-label="Посилання на фейсбук">
                                        <svg class="header-networks__icon" width="44px" height="44px">
                                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-fb"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="header-networks__item">
                                    <a href="mailto: <?php echo esc_attr( get_field( 'email', 18 ) ); ?>"
                                       aria-label="Посилання на адресу електорнної пошти"
                                    >
                                        <svg class="header-networks__icon" width="44px" height="44px">
                                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-mail"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="header-networks__item">
                                    <a href="<?php echo esc_attr( get_field( 'instagram', 18 ) ); ?>" target="_blank"
                                       aria-label="Посилання на інстаграм">
                                        <svg class="header-networks__icon" width="44px" height="44px">
                                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-instagram"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="header-networks__item">
                                    <a href="<?php echo esc_attr( get_field( 'whatsapp', 18 ) ); ?>" target="_blank"
                                       aria-label="Посилання на вотсапп">
                                        <svg class="header-networks__icon" width="44px" height="44px">
                                            <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-whatsapp"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <a class="header__link" href="<?php echo get_permalink( 20 ); ?>"
                >Задонатити
                    <svg class="offering__icon" width="24px" height="24px">
                        <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#icon-arrow"></use>
                    </svg>
                </a>
            </div>


        </div>
    </header>
    <body <?php body_class(); ?>>