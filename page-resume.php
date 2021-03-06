<?php
/*
 Template Name: ST2 Page Without Sidebars
 */
?>
<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper"> 
    <div class="container" id="content" tabindex="-1"> 
        <?php if ( have_posts() ) : ?>
            <div <?php post_class( 'row portfolio-grid' ); ?> id="post-<?php the_ID(); ?>">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="card " style="grid-area:one;">
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
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
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