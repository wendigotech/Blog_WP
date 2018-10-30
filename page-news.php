<?php
get_header(); ?>

<div class="jumbotron jumbotron-2 circles jumbotron-fluid"> 
    <div class="row flex-wrap justify-content-center align-content-center no-gutters align-items-start">
        <div class="justify-content-center align-items-end flex-column col-10"> 
            <h2 class="display-5 text-light"><?php _e( 'Welcome @ Wendigo', 'blog' ); ?></h2>
            <p class="lead"><?php _e( 'My personal design and development collection. Usefull tutorials, software tests, experiments.', 'blog' ); ?></p>
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
                <main id="main"> 
                    <div class="d-flex flex-column align-items-center justify-content-center"> 
                        <?php
                            $news_args = array(
                                'category_name' => 'news',
                                'order' => 'DESC'
                            )
                        ?>
                        <?php $news = new WP_Query( $news_args ); ?>
                        <?php if ( $news->have_posts() ) : ?>
                            <div <?php post_class( 'row flex-row-reverse justify-content-center site-main' ); ?> id="post-<?php the_ID(); ?>">
                                <?php while ( $news->have_posts() ) : $news->the_post(); ?>
                                    <article class="flex-wrap-reverse align-items-center d-flex col-md-4 flex-column"> 
                                        <figure class="snip1573">
                                            <?php
                                                if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail( 'large' );
                                                }
                                             ?>
                                            <figcaption>
                                                <h3><i class="fas fa-eye fa-3x fa-rotate-180"></i><?php _e( 'More', 'blog' ); ?></h3>
                                            </figcaption>
                                            <a href="<?php echo esc_url( get_permalink() ); ?>"></a>
                                        </figure>                                                         
                                        <div class="entry-content"> 
                                            <header class="entry-header"> 
                                                <?php if ( is_singular() ) : ?>
                                                    <h3 class="text-center"><?php the_title(); ?></h3>
                                                <?php else : ?>
                                                    <h3 class="text-center"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
                                                <?php endif; ?> 
                                            </header>
                                            <hr/>
                                            <?php the_excerpt( ); ?>
                                            <hr/>
                                            <div class="entry-meta justify-content-between align-items-center"> 
                                                <p class="text-center"><?php _e( '&nbsp;by', 'blog' ); ?> <span><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span><span><?php the_modified_date(); ?></span></p>
                                                <a class="btn btn-secondary mt-2 btn-sm" href="<?php echo esc_url( get_permalink() ); ?>"><?php _e( 'Open', 'blog' ); ?></a> 
                                            </div>                                                             
                                        </div>                                                         
                                        <footer class="entry-footer"></footer>                                                         
                                    </article>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            </div>
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
                        <?php endif; ?> 
                        <nav aria-label="Posts navigation"> 
                            <?php posts_nav_link( null, __( '&#xAB; Newer Posts', 'blog' ), __( 'Older Posts &#xBB;', 'blog' ) ); ?> 
                        </nav>                                         
                    </div>                                     
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