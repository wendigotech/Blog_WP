<?php
get_header(); ?>

<div class="jumbotron jumbotron-2 circles jumbotron-fluid d-flex flex-column justify-content-center align-items-center"> 
    <ul> 
        <li></li>                         
        <li></li>                         
        <li></li>
        <li></li>
        <li></li>
        <li></li>                         
    </ul>
</div>
<div class="wrapper wrapper-single" id="index-wrapper"> 
    <div id="content" tabindex="-1" class="container thetop"> 
        <div class="row d-flex flex-row align-content-center"> 
            <div class="content-area col-md-9" id="primary"> 
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div <?php post_class( 'd-flex flex-column align-items-center justify-content-center' ); ?> id="post-<?php the_ID(); ?>"> 
                            <div class="row site-main">
                                <div class="col-md-12 mt-3"> 
                                    <?php
                                        if ( has_post_thumbnail() ) {
                                            the_post_thumbnail( 'normal', array(
                                            'class' => 'w-100'
                                        ) );
                                        }
                                     ?> 
                                </div>
                                <div class="col-md-12 mt-5">
                                    <h3><?php the_title(); ?></h3> 
                                    <?php the_content(); ?> 
                                </div>
                            </div>                                             
                            <nav aria-label="Posts navigation"> 
                                <?php posts_nav_link( null, __( '&#xAB; Newer Posts', 'blog' ), __( 'Older Posts &#xBB;', 'blog' ) ); ?> 
                            </nav>                                             
                        </div>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
                <?php endif; ?> 
            </div>
            <?php if ( get_theme_mod( 'show_right_sidebar' ) ) : ?>
                <div class="widget-area col-md-3 single" role="complementary" id="right-sidebar"> 
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