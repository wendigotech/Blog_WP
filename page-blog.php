<?php
get_header(); ?>

                <div id="page-wrapper" class="wrapper"> 
                    <div class="container" id="content" tabindex="-1"> 
                        <div class="row"> 
                            <?php if ( get_theme_mod( 'show_left_sidebar' ) ) : ?>
                                <div class="col-md-4 widget-area" role="complementary" id="left-sidebar"> 
                                    <?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
                                        <?php dynamic_sidebar( 'left-sidebar' ); ?>
                                    <?php endif; ?>                                                                           
                                </div>
                            <?php endif; ?> 
                            <div class="content-area col-md-8" id="primary"> 
                                <main class="site-main" id="main"> 
                                    <div> 
                                        <?php if ( have_posts() ) : ?>
                                            <?php while ( have_posts() ) : the_post(); ?>
                                                <article <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                                                    <header class="entry-header"> 
                                                        <h1><?php the_title(); ?></h1> 
                                                        <div class="entry-meta">                                                              
</div>                                                         
                                                    </header>                                                     
                                                    <div class="entry-content"> 
                                                        <?php the_content(); ?> 
                                                        <?php wp_link_pages( array() ); ?> 
                                                    </div>                                                     
                                                    <footer class="entry-footer"> 
                                                        <?php if ( has_tag() ) : ?>
                                                            <span class="tags-links"><?php the_tags( 'Tags: ', ', ' ); ?></span>
                                                        <?php endif; ?> 
                                                        <?php edit_post_link( '<b class="text-success">Edit Post</b>' ); ?> 
                                                    </footer>                                                     
                                                </article>
                                            <?php endwhile; ?>
                                        <?php else : ?>
                                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
                                        <?php endif; ?> 
                                        <?php if ( comments_open() || get_comments_number() || is_page() ) : ?>
                                            <?php comments_template( '/comments.php' ); ?>
                                        <?php endif; ?> 
                                    </div>                                     
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