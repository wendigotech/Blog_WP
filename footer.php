
            </div>             
            <?php if ( is_active_sidebar( 'footerfull' ) ) : ?>
                <div class="wrapper" id="wrapper-footer-full"> 
                    <div id="footer-full-content" tabindex="-1" class="container"> 
                        <div class="row"> 
                            <?php if ( is_active_sidebar( 'footerfull' ) ) : ?>
                                <?php dynamic_sidebar( 'footerfull' ); ?>
                            <?php endif; ?>                                                           
                        </div>                         
                    </div>                     
                </div>
            <?php endif; ?> 
            <div class="wrapper bg-dark text-light" id="wrapper-footer"> 
                <button class="btn btn-primary scroll-top" data-scroll="up" type="button">
                    <i class="fa fa-chevron-up"></i>
                </button>
                <div class="container"> 
                    <div class="row"> 
                        <div class="col-md-6"> 
                            <footer class="site-footer" id="colophon"> 
                                <div class="site-info"> 
                                    <p><?php echo get_theme_mod( 'footer_text', 'Proudly powered by WordPress | Theme: Starter Theme 2 by Pinegrow 2018. (Version: 0.0.0)' ); ?></p> 
                                </div>                                 
                                <!-- .site-info -->                                 
                            </footer>                             
                            <!-- #colophon -->                             
                        </div>
                        <?php if ( is_active_sidebar( 'footerbottom' ) ) : ?>
                            <?php dynamic_sidebar( 'footerbottom' ); ?>
                        <?php endif; ?> 
                        <!--col end -->                         
                    </div>                     
                </div>                 
                <!-- container end -->                 
            </div>             
        </div>                                             
        <script>
$(document).ready(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $('.scroll-top').fadeIn();
    } else {
      $('.scroll-top').fadeOut();
    }
  });

  $('.scroll-top').click(function () {
    $("html, body").animate({
      scrollTop: 0
    }, 100);
      return false;
  });

});
</script>
        <?php wp_footer(); ?>
    </body>     
</html>
