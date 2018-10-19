<?php
get_header(); ?>

<div class="wrapper" id="index-wrapper"> 
    <div id="content" tabindex="-1" class="container thetop"> 
        <div class="row d-flex flex-row align-content-center">                              
            <div class="content-area col-md-10" id="primary"> 
                <main class="site-main" id="main"> 
                    <?php get_template_part( 'loop-templates/content' ); ?> 
                </main>                                 
            </div>                                                          
            <?php if ( get_theme_mod( 'show_right_sidebar' ) ) : ?>
                <div class="widget-area col-md-2" role="complementary" id="right-sidebar"> 
                    <?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
                        <?php dynamic_sidebar( 'right-sidebar' ); ?>
                    <?php endif; ?>                                                                           
                </div>
            <?php endif; ?>
        </div>                         
    </div>                     
</div>                 
<button class="btn btn-primary scroll-top" data-scroll="up" type="button">
    <i class="fa fa-chevron-up"></i>
</button>                

<?php get_footer(); ?>