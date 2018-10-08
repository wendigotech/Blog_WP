<?php
get_header(); ?>

<div class="wrapper" id="error-404-wrapper" tabindex="-1"> 
    <div class="container " id="content" tabindex="-1"> 
        <div class="row"> 
            <div class="col-md-12 content-area" id="primary"> 
                <main class="site-main mb-5" id="main"> 
                    <section class="error-404 not-found"> 
                        <header class="page-header"> 
                            <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'blog' ); ?></h1> 
                        </header>                                         
                        <!-- .page-header -->                                         
                        <div class="page-content"> 
                            <p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'blog' ); ?></p> 
                            <?php get_search_form( true ); ?> 
                            <div class="mt-4 mb-2"></div>                                             
                            <?php the_widget( 'WP_Widget_Recent_Posts', array(
                                    'number' => '5'
                            ) ); ?> 
                            <div class="mt-4 mb-2"></div>                                             
                            <h2 class="widget-title"><?php _e( 'Most Used Categories', 'blog' ); ?></h2> 
                            <div class="widget widget_categories"> 
                                <ul>
                                    <?php wp_list_categories( array(
                                            'orderby' => 'count',
                                            'order' => 'DESC',
                                            'show_count' => true,
                                            'title_li' => ''
                                    ) ); ?>
                                </ul>                                                 
                            </div>                                             
                            <div class="mt-4 mb-2"></div>                                             
                            <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?> 
                            <!-- .widget -->                                             
                        </div>                                         
                        <!-- .page-content -->                                         
                    </section>                                     
                    <!-- .error-404 -->                                     
                </main>                                 
            </div>                             
        </div>                         
    </div>                     
</div>                                 

<?php get_footer(); ?>