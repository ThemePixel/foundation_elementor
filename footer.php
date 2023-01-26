<?php global $foundation_elementor; ?>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="footer-heading mb-4"><?php if($foundation_elementor['titleone']){echo esc_attr($foundation_elementor['titleone']); } ?></h2>
                        <p><?php if($foundation_elementor['descone']){echo esc_attr($foundation_elementor['descone']); } ?></p>
                    </div>
                    <div class="col-md-4 ml-auto">
                        <h2 class="footer-heading mb-4"><?php if($foundation_elementor['titletwo']){echo esc_attr($foundation_elementor['titletwo']); } ?></h2>

                       <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer-menu',
                            'menu_id'        => 'footer-menu',
                            'menu_class'  => 'list-unstyled',
                            'container' => ''
                        ) );
                        ?>
                    </div>

                </div>
            </div>
            <div class="col-md-4 ml-auto">

                <div class="mb-5">
                    <div class="mb-5">
                        <h2 class="footer-heading mb-4"><?php if($foundation_elementor['titlethree']){echo esc_attr($foundation_elementor['titlethree']); } ?></h2>
                        <p><?php if($foundation_elementor['desctwo']){echo esc_attr($foundation_elementor['desctwo']); } ?></p>
                    </div>
                    <h2 class="footer-heading mb-4"><?php if($foundation_elementor['titlefour']){echo esc_attr($foundation_elementor['titlefour']); } ?></h2>
                    <?php if($foundation_elementor['widgetshortcode']) echo do_shortcode(esc_attr($foundation_elementor['widgetshortcode'])); ?>
                </div>

                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="border-top pt-5">
                    <p>
                        <?php esc_html_e('All rights reserved','foundation_elementor');?>
                    </p>
                </div>
            </div>

        </div>
    </div>
</footer>

</div>


<?php wp_footer(); ?>

</body>
</html>
