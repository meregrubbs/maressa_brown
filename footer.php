<footer>
    <div class="social-media">
        <a href="https://www.facebook.com/maressasbrown/" target="_blank"><img src="<?php bloginfo('template_url') ?>/images/social-media/facebook_maressa_brown.svg" alt="maressa brown facebook"></a>

        <a href="https://www.instagram.com/maressasylvie/?hl=en" target="_blank"><img src="<?php bloginfo('template_url') ?>/images/social-media/instagram_maressa_brown.svg" alt="maressa brown instagram"></a>

        <a href="https://twitter.com/MaressaSylvie?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><img src="<?php bloginfo('template_url') ?>/images/social-media/twitter_maressa_brown.svg" alt="maressa brown twitter"></a>

        <a href="https://www.linkedin.com/in/maressa/" target="_blank"><img src="<?php bloginfo('template_url') ?>/images/social-media/linkedin_maressa_brown.svg" alt="maressa brown linkedin"></a>   
        
        <a href="mailto:maressa.brown@gmail.com" target="_blank"><img src="<?php bloginfo('template_url') ?>/images/social-media/email_maressa_brown.svg" alt="email maressa brown"></a>
    </div>

    <nav>
        <?php
        wp_nav_menu( array(
            'theme_location'  => 'primary',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'bs-example-navbar-collapse-1',
            'menu_class'      => 'navbar-nav mr-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </nav>

    <div class="insta-background">
        <div class="container">
            <a href="https://www.instagram.com/maressasylvie/?hl=en" class="insta-link">@MaressaSylvie</a>
            <div id="instafeed">
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
                <div class="four"></div>
            </div>
        </div>
    </div>  
</footer>


<?php wp_footer(); ?>


<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/app.js"></script>


</body>
</html>