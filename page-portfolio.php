<?php
/*
 Template Name: ST2 Page Without Sidebars
 */
?>
<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper portfolio-body"> 
    <div class="container" id="content" tabindex="-1"> 
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center"><?php the_title(); ?></h3> 
                <?php the_excerpt( ); ?> 
            </div>
        </div>
        <div class="modal fade pg-show-modal" id="modal1" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="true"> 
            <div class="modal-dialog modal-lg"> 
                <div class="modal-content"> 
                    <div class="modal-header"> 
                        <h4 class="modal-title"><?php _e( 'Modal title', 'blog' ); ?></h4> 
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                                         
                    </div>                                     

                    <div class="modal-body"> 
                        <p><?php _e( 'One fine body&hellip;', 'blog' ); ?></p> 
                    </div>                                     

                    <div class="modal-footer"> 
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            <?php _e( 'Close', 'blog' ); ?>
                        </button>                                         

                        <button type="button" class="btn btn-primary">
                            <?php _e( 'Save changes', 'blog' ); ?>
                        </button>                                         
                    </div>                                     
                </div>                                 
            </div>                             
        </div>
        <?php
            $portfolio_args = array(
                'category_name' => 'portfolio',
                'order' => 'DESC'
            )
        ?>
        <?php $portfolio = new WP_Query( $portfolio_args ); ?>
        <?php if ( $portfolio->have_posts() ) : ?>
            <div class="row portfolio-grid">
                <?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>
                    <div class="card " style="grid-area:one;" id="1">
                        <?php if ( is_singular() ) : ?>
                            <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail( 'normal', array(
                                    'class' => 'card-img-top'
                                ) );
                                }
                             ?>
                        <?php elseif ( has_post_thumbnail( get_the_ID() ) ) : ?>
                            <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail( 'normal', array(
                                        'class' => 'card-img-top'
                                ) ); ?></a>
                        <?php endif; ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php the_title(); ?></h4>
                            <?php the_excerpt( ); ?>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-primary" data-toggle="modal" data-target="#modal1"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                        </div>
                    </div>
                    <div class="card " style="grid-area:two;" id="2">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal', array(
                                'class' => 'card-img-top'
                            ) );
                            }
                         ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php the_title(); ?></h4>
                            <p class="card-text"><?php _e( 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'blog' ); ?></p>
                            <a href="#" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <div class="card " style="grid-area:three;">
                    <img class="card-img-top" alt="Card image cap" src="http://pinegrow.com/placeholders/img19.jpg"/>
                    <div class="card-body">
                        <h4 class="card-title"><?php _e( 'Card title', 'blog' ); ?></h4>
                        <p class="card-text"><?php _e( 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'blog' ); ?></p>
                        <a href="#" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                    </div>
                </div>
                <div class="card " style="grid-area:six;">
                    <img class="card-img-top" alt="Card image cap" src="http://pinegrow.com/placeholders/img19.jpg"/>
                    <div class="card-body">
                        <h4 class="card-title"><?php _e( 'Card title', 'blog' ); ?></h4>
                        <p class="card-text"><?php _e( 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'blog' ); ?></p>
                        <a href="#" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                    </div>
                </div>
                <div class="card " style="grid-area:four;">
                    <img class="card-img-top" alt="Card image cap" src="http://pinegrow.com/placeholders/img19.jpg"/>
                    <div class="card-body">
                        <h4 class="card-title"><?php _e( 'Card title', 'blog' ); ?></h4>
                        <p class="card-text"><?php _e( 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'blog' ); ?></p>
                        <a href="#" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                    </div>
                </div>
                <div class="card " style="grid-area:five;">
                    <img class="card-img-top" alt="Card image cap" src="http://pinegrow.com/placeholders/img19.jpg"/>
                    <div class="card-body">
                        <h4 class="card-title"><?php _e( 'Card title', 'blog' ); ?></h4>
                        <p class="card-text"><?php _e( 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'blog' ); ?></p>
                        <a href="#" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                    </div>
                </div>                                 
            </div>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
        <?php endif; ?> 
    </div>                     
</div>                                 

<?php get_footer(); ?>