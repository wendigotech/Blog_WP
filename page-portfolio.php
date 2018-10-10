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
                                    <div class="card justify-content-center flex-wrap-reverse mh-100 clearfix col-lg-12" style="grid-area:1 / 1 / 3 / 3;">
                                        <div id="card-inner" class="tracking-in-expand">
                                            <div class="row">
                                                <div class="col-md-10">                                                      

                                                    <?php
                                                        if ( has_post_thumbnail() ) {
                                                            the_post_thumbnail( 'large', array(
                                                            'class' => 'card-img-top img-fluid'
                                                        ) );
                                                        }
                                                     ?>
                                                </div>
                                                <div class="col-md-2 d-inline-flex align-items-end justify-content-end flex-column">
                                                    <h4 class="card-title font-weight-bold"><?php the_title(); ?></h4>                                                      
                                                </div>
                                                <div class="card-body ">
                                                    <?php the_excerpt( ); ?>
                                                    <a class="btn btn-dark heartbeat mt-5" id="1" data-toggle="modal" data-target="#modal1" href="#"><?php _e( 'Read more', 'blog' ); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">                                                  
</div>
                                        </div>
                                        <div class="modal" id="modal1" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="true"> 
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
                                                        <button type="button" class="btn btn-default" data-dismiss="modal" id="1">
                                                            <?php _e( 'Close', 'blog' ); ?>
                                                        </button>                                                         
                                                    </div>                                                     
                                                </div>                                                 
                                            </div>                                             
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
                                        <div id="card-inner">
                                            <?php
                                                if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail( 'large', array(
                                                    'class' => 'card-img-top'
                                                ) );
                                                }
                                             ?>
                                            <div class="card-body">
                                                <h4 class="card-title"><?php the_title(); ?></h4>
                                                <?php the_excerpt( ); ?>
                                            </div>
                                        </div>
                                        <button class="btn btn-dark btn-lg" id="2" data-toggle="modal" data-target="#modal2" type="button">
                                            <?php _e( 'Go somewhere', 'blog' ); ?>
                                        </button>
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
                                        <div id="card-inner">
                                            <?php
                                                if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail( 'large', array(
                                                    'class' => 'card-img-top'
                                                ) );
                                                }
                                             ?>
                                            <div class="card-body">
                                                <h4 class="card-title"><?php the_title(); ?></h4>
                                                <?php the_excerpt( ); ?>
                                                <a href="#" class="btn btn-dark" id="3" data-toggle="modal" data-target="#modal3"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                                            </div>
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
                                        <div id="card-inner">
                                            <?php
                                                if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail( 'large', array(
                                                    'class' => 'card-img-top'
                                                ) );
                                                }
                                             ?>
                                            <div class="card-body">
                                                <h4 class="card-title"><?php the_title(); ?></h4>
                                                <?php the_excerpt( ); ?>
                                                <a href="#" class="btn btn-dark" id="4" data-toggle="modal" data-target="#modal4"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                                            </div>
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
                                        <div id="card-inner">
                                            <?php
                                                if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail( 'large', array(
                                                    'class' => 'card-img-top'
                                                ) );
                                                }
                                             ?>
                                            <div class="card-body">
                                                <h4 class="card-title"><?php the_title(); ?></h4>
                                                <?php the_excerpt( ); ?>
                                                <a href="#" class="btn btn-dark" id="5" data-toggle="modal" data-target="#modal5"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                                            </div>
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
                                        <div id="card-inner">
                                            <?php
                                                if ( has_post_thumbnail() ) {
                                                    the_post_thumbnail( 'large', array(
                                                    'class' => 'card-img-top'
                                                ) );
                                                }
                                             ?>
                                            <div class="card-body">
                                                <h4 class="card-title"><?php the_title(); ?></h4>
                                                <?php the_excerpt( ); ?>
                                                <a href="#" class="btn btn-dark" id="6" data-toggle="modal" data-target="#modal6"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                                            </div>
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