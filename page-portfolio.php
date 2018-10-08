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
                <h2 class="text-center"><?php the_title(); ?></h2> 
                <?php the_content(); ?> 
            </div>
        </div>
        <div class="row portfolio-grid">
            <?php
                $portfolio_args = array(
                    'category_name' => 'portfolio',
                    'order' => 'DESC'
                )
            ?>
            <?php $portfolio = new WP_Query( $portfolio_args ); ?>
            <?php if ( $portfolio->have_posts() ) : ?>
                <?php $portfolio_item_number = 0; ?>
                <?php while ( $portfolio->have_posts() && $portfolio_item_number++ < 1 ) : $portfolio->the_post(); ?>
                    <div class="card " style="grid-area:one;" id="one">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal', array(
                                'class' => 'card-img-top'
                            ) );
                            }
                         ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php the_title(); ?></h4>
                            <?php the_excerpt( ); ?>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-primary" data-toggle="modal" data-target="#modal1"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
            <?php endif; ?>
            <div class="modal fade pg-show-modal" id="modal1" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"> 
                <div class="modal-dialog modal-lg"> 
                    <div class="modal-content"> 
                        <div class="modal-header"> 
                            <h4 class="modal-title"><?php the_title(); ?></h4> 
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                                             
                        </div>                                         
                        <div class="modal-body"> 
                            <?php the_content(); ?> 
                        </div>                                         
                        <div class="modal-footer"> 
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <?php _e( 'Close', 'blog' ); ?>
                            </button>                                             
                        </div>                                         
                    </div>                                     
                </div>                                 
            </div>
            <?php if ( $portfolio->have_posts() ) : ?>
                <?php $portfolio_item_number = 0; ?>
                <?php while ( $portfolio->have_posts() && $portfolio_item_number++ < 1 ) : $portfolio->the_post(); ?>
                    <div class="card " style="grid-area:two;">
                        <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="true"> 
                            <div class="modal-dialog modal-lg"> 
                                <div class="modal-content"> 
                                    <div class="modal-header"> 
                                        <h4 class="modal-title"><?php the_title(); ?></h4> 
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                                                         
                                    </div>                                                     
                                    <div class="modal-body"> 
                                        <?php the_content(); ?> 
                                    </div>                                                     
                                    <div class="modal-footer"> 
                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                            <?php _e( 'Close', 'blog' ); ?>
                                        </button>                                                         
                                    </div>                                                     
                                </div>                                                 
                            </div>                                             
                        </div>
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal', array(
                                'class' => 'card-img-top'
                            ) );
                            }
                         ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php the_title(); ?></h4>
                            <?php the_excerpt( ); ?>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal2"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
            <?php endif; ?>
            <?php if ( $portfolio->have_posts() ) : ?>
                <?php $portfolio_item_number = 0; ?>
                <?php while ( $portfolio->have_posts() && $portfolio_item_number++ < 1 ) : $portfolio->the_post(); ?>
                    <div class="card " style="grid-area:three;">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal', array(
                                'class' => 'card-img-top'
                            ) );
                            }
                         ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php the_title(); ?></h4>
                            <?php the_excerpt( ); ?>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal3"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
            <?php endif; ?>
            <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="true"> 
                <div class="modal-dialog modal-lg"> 
                    <div class="modal-content"> 
                        <div class="modal-header"> 
                            <h4 class="modal-title"><?php the_title(); ?></h4> 
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                                             
                        </div>                                         
                        <div class="modal-body"> 
                            <?php the_content(); ?> 
                        </div>                                         
                        <div class="modal-footer"> 
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <?php _e( 'Close', 'blog' ); ?>
                            </button>                                             
                        </div>                                         
                    </div>                                     
                </div>                                 
            </div>
            <?php
                $portfolio_args = array(
                    'category_name' => 'portfolio'
                )
            ?>
            <?php $portfolio = new WP_Query( $portfolio_args ); ?>
            <?php if ( $portfolio->have_posts() ) : ?>
                <?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>
                    <div class="card " style="grid-area:six;">
                        <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="true"> 
                            <div class="modal-dialog modal-lg"> 
                                <div class="modal-content"> 
                                    <div class="modal-header"> 
                                        <h4 class="modal-title"><?php the_title(); ?></h4> 
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                                                         
                                    </div>                                                     
                                    <div class="modal-body"> 
                                        <?php the_content(); ?> 
                                    </div>                                                     
                                    <div class="modal-footer"> 
                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                            <?php _e( 'Close', 'blog' ); ?>
                                        </button>                                                         
                                    </div>                                                     
                                </div>                                                 
                            </div>                                             
                        </div>
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal', array(
                                'class' => 'card-img-top'
                            ) );
                            }
                         ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php the_title(); ?></h4>
                            <?php the_excerpt( ); ?>
                            <a href="#" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
            <?php endif; ?>
            <?php if ( $portfolio->have_posts() ) : ?>
                <?php $portfolio_item_number = 0; ?>
                <?php while ( $portfolio->have_posts() && $portfolio_item_number++ < 1 ) : $portfolio->the_post(); ?>
                    <div class="card " style="grid-area:four;">
                        <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="true"> 
                            <div class="modal-dialog modal-lg"> 
                                <div class="modal-content"> 
                                    <div class="modal-header"> 
                                        <h4 class="modal-title"><?php the_title(); ?></h4> 
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                                                         
                                    </div>                                                     
                                    <div class="modal-body"> 
                                        <?php the_content(); ?> 
                                    </div>                                                     
                                    <div class="modal-footer"> 
                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                            <?php _e( 'Close', 'blog' ); ?>
                                        </button>                                                         
                                    </div>                                                     
                                </div>                                                 
                            </div>                                             
                        </div>
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal', array(
                                'class' => 'card-img-top'
                            ) );
                            }
                         ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php the_title(); ?></h4>
                            <?php the_excerpt( ); ?>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal4"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
            <?php endif; ?>
            <?php if ( $portfolio->have_posts() ) : ?>
                <?php $portfolio_item_number = 0; ?>
                <?php while ( $portfolio->have_posts() && $portfolio_item_number++ < 1 ) : $portfolio->the_post(); ?>
                    <div class="card " style="grid-area:five;">
                        <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="true"> 
                            <div class="modal-dialog modal-lg"> 
                                <div class="modal-content"> 
                                    <div class="modal-header"> 
                                        <h4 class="modal-title"><?php the_title(); ?></h4> 
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                                                         
                                    </div>                                                     
                                    <div class="modal-body"> 
                                        <?php the_content(); ?> 
                                    </div>                                                     
                                    <div class="modal-footer"> 
                                        <button type="button" class="btn btn-default" data-dismiss="modal">
                                            <?php _e( 'Close', 'blog' ); ?>
                                        </button>                                                         
                                    </div>                                                     
                                </div>                                                 
                            </div>                                             
                        </div>
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal', array(
                                'class' => 'card-img-top'
                            ) );
                            }
                         ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php the_title(); ?></h4>
                            <?php the_excerpt( ); ?>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modal6"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
            <?php endif; ?> 
        </div>                         
    </div>                     
</div>                                 

<?php get_footer(); ?>