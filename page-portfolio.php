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
        <?php
            $portfolio_args = array(
                'category_name' => 'portfolio',
                'order' => 'DESC'
            )
        ?>
        <?php $portfolio = new WP_Query( $portfolio_args ); ?>
        <?php if ( $portfolio->have_posts() ) : ?>
            <?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>
                <div style="display:grid;grid-template-columns:1fr 1fr 1fr;grid-template-rows:100px 100px 100px 100px;grid-gap:21px;" <?php post_class( 'row' ); ?> id="post-<?php the_ID(); ?>">
                    <figure class="snip1543">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'normal' );
                            }
                         ?>
                        <figcaption>
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt( ); ?>
                        </figcaption>
                        <a href="#" data-toggle="modal" data-target="#modal1"></a>
                        <div class="modal fade pg-show-modal" id="modal1" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="true"> 
                            <div class="modal-dialog modal-dialog-centered modal-lg"> 
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
                    </figure>
                    <figure class="snip1543" style="grid-area:1 / 3 / 3 / 4;">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample101.jpg" alt="sample101"/>
                        <figcaption>
                            <h3><?php _e( 'Indigo Violet', 'blog' ); ?></h3>
                            <p><?php _e( 'But Calvin is no kind and loving god! He\'s one of the old gods! He demands sacrifice!', 'blog' ); ?> </p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                    <figure class="snip1543" style="grid-area:3 / 1 / 5 / 2;">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample101.jpg" alt="sample101"/>
                        <figcaption>
                            <h3><?php _e( 'Indigo Violet', 'blog' ); ?></h3>
                            <p><?php _e( 'But Calvin is no kind and loving god! He\'s one of the old gods! He demands sacrifice!', 'blog' ); ?> </p>
                        </figcaption>
                        <a href="#"></a>
                    </figure>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
        <?php endif; ?>
    </div>                     
</div>                                 

<?php get_footer(); ?>