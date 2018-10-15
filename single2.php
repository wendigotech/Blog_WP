<?php
get_header(); ?>

<div class="wrapper" id="single-wrapper"> 
    <div class="container" id="content" tabindex="-1"> 
        <div class="row"> 
            <?php if ( get_theme_mod( 'show_left_sidebar' ) ) : ?>
                <div class="col-md-4 widget-area" role="complementary" id="left-sidebar"> 
                    <?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
                        <?php dynamic_sidebar( 'left-sidebar' ); ?>
                    <?php endif; ?>                                                                           
                </div>
            <?php endif; ?> 
            <div class="content-area col-md-8 content-area" id="primary"> 
                <main class="site-main" id="main"> 
                    <?php get_template_part( 'loop-templates/content-single' ); ?> 
                </main>                                 
            </div>                             
            <?php if ( get_theme_mod( 'show_right_sidebar' ) ) : ?>
                <div class="col-md-4 widget-area" role="complementary" id="right-sidebar"> 
                    <?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
                        <?php dynamic_sidebar( 'right-sidebar' ); ?>
                    <?php endif; ?>                                                                           
                </div>
            <?php endif; ?> 
        </div>                         
    </div>                     
</div>                                 

<?php get_footer(); ?>