<?php
get_header(); ?>

<div class="jumbotron jumbotron-2 circles jumbotron-fluid"> 
    <div class="row flex-wrap justify-content-center align-items-start align-content-center">
        <div class="d-flex justify-content-center align-items-end flex-column col-lg-2 col-md-2 col-sm-2 col-2"> 
            <h1 class="text-light display-5"><?php _e( 'Welcome @ Wendigo', 'blog' ); ?></h1>
        </div>
        <div class="col-sm-10 col-10 d-flex flex-column-reverse col-md-9 col-lg-8"> 
            <?php
                $Top_args = array(
                    'tag' => 'top',
                    'order' => 'DESC'
                )
            ?>
            <?php $Top = new WP_Query( $Top_args ); ?>
            <?php if ( $Top->have_posts() ) : ?>
                <div id="carousel1" class="carousel slide carousel-fade col-sm-12 col-md-10 col col-lg-11" data-ride="carousel" data-pause="hover"> 
                    <ol class="carousel-indicators"> 
                        <li class="active"></li>                                         
                        <li></li>                                         
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>                                         
                    </ol>
                    <div class="carousel-inner"> 
                        <?php $Top_item_number = 0; ?>
                        <?php while ( $Top->have_posts() ) : $Top->the_post(); ?>
                            <div class="carousel-item<?php if( $Top_item_number == 0) echo ' active'; ?>"> 
                                <a href="<?php echo esc_url( get_permalink() ); ?>"> <?php the_post_thumbnail( 'normal', array(
                                            'class' => 'd-block w-100'
                                    ) ); ?> </a> 
                                <div class="carousel-caption text-truncate"> 
                                    <h3 class="animated rollIn"><?php the_title(); ?></h3> 
                                    <?php the_excerpt( ); ?> 
                                </div>                                                 
                            </div>
                            <?php $Top_item_number++; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>                                                                                   
                    </div>                                     
                    <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Previous', 'blog' ); ?></span> </a> 
                    <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Next', 'blog' ); ?></span> </a> 
                </div>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="wrapper" id="index-wrapper"> 
    <div id="content" tabindex="-1" class="container thetop"> 
        <div class="row d-flex flex-row align-content-center"> 
            <div class="content-area col-md-9" id="primary"> 
                <main id="main"> 
                    <?php get_template_part( 'loop-templates/content' ); ?> 
                </main>                                 
            </div>
            <?php if ( get_theme_mod( 'show_right_sidebar' ) ) : ?>
                <div class="widget-area col-sm col-md-2" role="complementary" id="right-sidebar"> 
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