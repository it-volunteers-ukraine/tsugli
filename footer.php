<footer class="footer">
    <div class="container section">

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
            
            <?php echo do_shortcode('[contact-form-7 id="e76af3c" title="Контактна форма"]'); ?>
                  
                       <ul class="footer-networks">
                                <li class="footer-networks__item" >
                                    <a href="#">
                                    <svg class="footer-networks__icon" width="44px" height="44px">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-viber"></use>
                                    </svg>
                                    </a>
                                </li>
                                <li class="footer-networks__item">
                                    <a href="#">
                                    <svg class="footer-networks__icon" width="44px" height="44px">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-fb"></use>
                                    </svg>
                                    </a>
                                </li>
                                <li class="footer-networks__item">
                                    <a href="#"
                                    ><svg class="footer-networks__icon" width="44px" height="44px">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-mail"></use></svg></a>
                                </li>
                                <li class="footer-networks__item">
                                    <a href="#">
                                    <svg class="footer-networks__icon" width="44px" height="44px">
                                    <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-instagram"></use>
                                    </svg>
                                    </a>
                                </li>
                                <li class="footer-networks__item">
                                    <a href="#">
                                    <svg class="footer-networks__icon" width="44px" height="44px">
                                        <use href="<?php bloginfo('template_url'); ?>/assets/images/symbol-defs.svg#icon-whatsapp"></use></svg></a>
                                </li>
                                </ul>
        </div>


    </div>
</footer>
<?php wp_footer(); ?>  
</body>
</html>
