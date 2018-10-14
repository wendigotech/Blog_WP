<?php
/*
 Template Name: ST2 Page Without Sidebars
 */
?>
<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper portfolio-body color-change-2x"> 
    <div class="container" id="content" tabindex="-1"> 
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center"><?php the_title(); ?></h2> 
                <?php the_content(); ?> 
            </div>
        </div>
        <div class="row no-gutters port-grid">
            <div class="p-4 col-lg-12">
                <div class="mb-4">
                    <button class="btn js-toggle-grid-gap">
                        <?php _e( 'toggle', 'blog' ); ?> 
                        <code><?php _e( 'grid-gap', 'blog' ); ?></code>
                    </button>
                    <button class="btn js-toggle-grid-columns">
                        <?php _e( 'toggle', 'blog' ); ?> 
                        <code><?php _e( 'grid-template-columns', 'blog' ); ?></code>
                    </button>
                </div>
                <?php
                    $portfolio_args = array(
                        'category_name' => 'portfolio',
                        'order' => 'DESC'
                    )
                ?>
                <?php $portfolio = new WP_Query( $portfolio_args ); ?>
                <?php if ( $portfolio->have_posts() ) : ?>
                    <div <?php post_class( 'grid mb-4' ); ?> id="post-<?php the_ID(); ?>">
                        <?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>
                            <div class="card" style="grid-area:1 / 1 / 4 / 3;" id="1"> 
                                <img class="card-img-top" src="http://pinegrow.com/placeholders/img15.jpg" alt="Card image cap"> 
                                <div class="card-body"> 
                                    <h4 class="card-title"><?php _e( 'Card title', 'blog' ); ?></h4> 
                                    <h6 class="card-subtitle mb-2 text-muted"><?php _e( 'Card subtitle', 'blog' ); ?></h6> 
                                    <p class="card-text"><?php _e( 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'blog' ); ?></p> 
                                    <a href="#" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a> 
                                </div>                                                 
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <div class="card" id="2" style="grid-area:1 / 3 / 4 / 5;"> 
                            <img class="card-img-top" src="http://pinegrow.com/placeholders/img15.jpg" alt="Card image cap"> 
                            <div class="card-body"> 
                                <h4 class="card-title"><?php _e( 'Card title', 'blog' ); ?></h4> 
                                <h6 class="card-subtitle mb-2 text-muted"><?php _e( 'Card subtitle', 'blog' ); ?></h6> 
                                <p class="card-text"><?php _e( 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'blog' ); ?></p> 
                                <a href="#" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a> 
                            </div>                                             
                        </div>
                        <div class="card"> 
                            <img class="card-img-top" src="http://pinegrow.com/placeholders/img15.jpg" alt="Card image cap"> 
                            <div class="card-body"> 
                                <h4 class="card-title"><?php _e( 'Card title', 'blog' ); ?></h4> 
                                <h6 class="card-subtitle mb-2 text-muted"><?php _e( 'Card subtitle', 'blog' ); ?></h6> 
                                <p class="card-text"><?php _e( 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'blog' ); ?></p> 
                                <a href="#" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a> 
                            </div>                                             
                        </div>
                        <div class="card"> 
                            <img class="card-img-top" src="http://pinegrow.com/placeholders/img15.jpg" alt="Card image cap"> 
                            <div class="card-body"> 
                                <h4 class="card-title"><?php _e( 'Card title', 'blog' ); ?></h4> 
                                <h6 class="card-subtitle mb-2 text-muted"><?php _e( 'Card subtitle', 'blog' ); ?></h6> 
                                <p class="card-text"><?php _e( 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'blog' ); ?></p> 
                                <a href="#" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a> 
                            </div>                                             
                        </div>
                        <div class="card"> 
                            <img class="card-img-top" src="http://pinegrow.com/placeholders/img15.jpg" alt="Card image cap"> 
                            <div class="card-body"> 
                                <h4 class="card-title"><?php _e( 'Card title', 'blog' ); ?></h4> 
                                <h6 class="card-subtitle mb-2 text-muted"><?php _e( 'Card subtitle', 'blog' ); ?></h6> 
                                <p class="card-text"><?php _e( 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'blog' ); ?></p> 
                                <a href="#" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a> 
                            </div>                                             
                        </div>
                        <div class="card"> 
                            <img class="card-img-top" src="http://pinegrow.com/placeholders/img15.jpg" alt="Card image cap"> 
                            <div class="card-body"> 
                                <h4 class="card-title"><?php _e( 'Card title', 'blog' ); ?></h4> 
                                <h6 class="card-subtitle mb-2 text-muted"><?php _e( 'Card subtitle', 'blog' ); ?></h6> 
                                <p class="card-text"><?php _e( 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'blog' ); ?></p> 
                                <a href="#" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a> 
                            </div>                                             
                        </div>
                        <div class="card"> 
                            <img class="card-img-top" src="http://pinegrow.com/placeholders/img15.jpg" alt="Card image cap"> 
                            <div class="card-body"> 
                                <h4 class="card-title"><?php _e( 'Card title', 'blog' ); ?></h4> 
                                <h6 class="card-subtitle mb-2 text-muted"><?php _e( 'Card subtitle', 'blog' ); ?></h6> 
                                <p class="card-text"><?php _e( 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'blog' ); ?></p> 
                                <a href="#" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a> 
                            </div>                                             
                        </div>
                        <div class="card"> 
                            <img class="card-img-top" src="http://pinegrow.com/placeholders/img15.jpg" alt="Card image cap"> 
                            <div class="card-body"> 
                                <h4 class="card-title"><?php _e( 'Card title', 'blog' ); ?></h4> 
                                <h6 class="card-subtitle mb-2 text-muted"><?php _e( 'Card subtitle', 'blog' ); ?></h6> 
                                <p class="card-text"><?php _e( 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'blog' ); ?></p> 
                                <a href="#" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a> 
                            </div>                                             
                        </div>
                        <div class="card"> 
                            <img class="card-img-top" src="http://pinegrow.com/placeholders/img15.jpg" alt="Card image cap"> 
                            <div class="card-body"> 
                                <h4 class="card-title"><?php _e( 'Card title', 'blog' ); ?></h4> 
                                <h6 class="card-subtitle mb-2 text-muted"><?php _e( 'Card subtitle', 'blog' ); ?></h6> 
                                <p class="card-text"><?php _e( 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'blog' ); ?></p> 
                                <a href="#" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a> 
                            </div>                                             
                        </div>
                    </div>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
                <?php endif; ?>
                <button class="btn js-add-card">
                    <?php _e( 'add a card', 'blog' ); ?>
                </button>
            </div>
        </div>                         
    </div>                     
</div>                                 

<?php get_footer(); ?>