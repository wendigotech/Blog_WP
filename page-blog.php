<?php
get_header(); ?>

<div class="jumbotron jumbotron-2 circles jumbotron-fluid"> 
    <div class="row flex-wrap justify-content-center align-items-start align-content-center no-gutters">
        <div class="d-flex justify-content-center align-items-end flex-column col-md-2 col-sm-2 col-2 col-lg-6"> 
            <h2 class="display-5"><?php _e( 'Welcome @ Wendigo', 'blog' ); ?></h2>
        </div>
        <div class="col-md-10 col-sm-10 col-10 col-lg-8"> 
            <p class="text-light lead"><?php _e( 'My personal design and development collection. Usefull tutorials, software tests, personal work.', 'blog' ); ?></p>
        </div>
    </div>
    <ul> 
        <li></li>                         
        <li></li>                         
        <li></li>
        <li></li>
        <li></li>
        <li></li>                                                  
    </ul>
</div>
<div class="wrapper" id="index-wrapper"> 
    <div id="content" tabindex="-1" class="container thetop"> 
        <div class="row d-flex flex-row align-content-center"> 
            <div class="content-area col-md-9" id="primary"> 
                <main class="site-main" id="main"> 
                    <?php get_template_part( 'loop-templates/content' ); ?> 
                </main>                                 
            </div>
            <?php if ( get_theme_mod( 'show_right_sidebar' ) ) : ?>
                <div class="widget-area col-md-3" role="complementary" id="right-sidebar"> 
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