
<div class="pop-up">
    <div class="pop-up__wrapper"> 
      <button class="pop-up__button" type="button" > 
        <svg  width="44px" height="44px" aria-label="Перемикач мобільного меню">
         <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-x"></use>
        </svg>
      </button>

    <p class="pop-up__greetings">Вітаємо!</p>
    <p class="pop-up__text">Ви успішно підписалися на розсилку</p>
    <div  class="pop-up__img">
          <img  src="<?php bloginfo('template_url'); ?>/assets/images/pov-woman-feeds-wild-horse 1.jpg" alt="Жінка з рук кормить коня ">
    </div>
  
  
    <a href="<?php the_permalink(); ?>" class="pop-up__link">До Подій    
       <svg class="pop-up__icon" width="24px" height="24px">
          <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-arrow"></use>
       </svg>
    </a></div>

</div>

<footer class="footer">
    <div class="container section">

    <div class="footer__wrapper">

       <div class="footer-menu">
            <div class="footer-menu__logo">
              <?php if ( has_custom_logo() ) {
                echo get_custom_logo();
                      }
               ?>  
            </div>
              
          <?php wp_nav_menu( [
                'theme_location'       => 'footer',                          
                'container'            => false,                           
                'menu_class'           => 'footer-menu__list',
                'menu_id'              => false,    
                'echo'                 => true,                            
                'items_wrap'           => '<ul id="%1$s" class="footer_list %2$s">%3$s</ul>'  
                 ] ); 
             ?>   

       </div>

        <div class="footer-info">

           <?php echo do_shortcode('[contact-form-7 id="d7c96d9" title="Контактна форма-футер"]'); ?>

                             <ul class="footer-networks">
                                <li class="footer-networks__item" >
                                    <a href="<?php echo esc_attr(get_field('viber', 18));?>">
                                    <svg class="footer-networks__icon" width="44px" height="44px">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-viber"></use>
                                    </svg>
                                    </a>
                                </li>
                                <li class="footer-networks__item">
                                    <a href="<?php echo esc_attr(get_field('facebook', 18));?>">
                                    <svg class="footer-networks__icon" width="44px" height="44px">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-fb"></use>
                                    </svg>
                                    </a>
                                </li>
                                <li class="footer-networks__item">
                                    <a href="mailto: <?php echo esc_attr(get_field('email', 18));?>"
                                    ><svg class="footer-networks__icon" width="44px" height="44px">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-mail"></use></svg></a>
                                </li>
                                <li class="footer-networks__item">
                                    <a href="<?php echo esc_attr(get_field('instagram', 18));?>">
                                    <svg class="footer-networks__icon" width="44px" height="44px">
                                    <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-instagram"></use>
                                    </svg>
                                    </a>
                                </li>
                                <li class="footer-networks__item">
                                    <a href="<?php echo esc_attr(get_field('whatsapp', 18));?>">
                                    <svg class="footer-networks__icon" width="44px" height="44px">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-whatsapp"></use></svg></a>
                                </li>
                                </ul>
        </div>

    </div>
 
    <span class="footer__rigths"> &copy 2023 Щербаті Цуглі. All rights reserved.</span>
    </div>


    </footer>
<?php wp_footer(); ?>  
</body>
</html>
