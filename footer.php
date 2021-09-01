 </div> <!-- .content -->

<footer id="footer">
    <div class="container">
        <div class="row">
            <div id="footer-logo" class="col-12 col-lg-6">

                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $image = wp_get_attachment_image_src($custom_logo_id , 'full');
                    ?>
                    <img class="logo img-fluid" src="<?php echo $image[0]; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" draggable="false">
                </a>
            </div>
            
            <div id="footer-social" class="col-12 col-lg-6">
                <span>Follow us</span>
                <ul class="socials">
                    <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            
            <div id="copy" class="col-12">
                &copy; <?php echo date('Y'); ?> <span class="sep"> | </span> <a href="<?php echo home_url( '/' ); ?>"><?php echo get_bloginfo('name'); ?></a>
            </div>
        </div>
    </div>
</footer>

    <?php wp_footer(); ?>
</body>
</html>