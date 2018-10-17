<div> 
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <div <?php post_class( 'blog-item' ); ?> id="post-<?php the_ID(); ?>">
                <div class="row no-gutters text-center">
                    <h2 class="title text-center"><?php the_title(); ?></h2>
                </div>
                <div class="content col-lg-12">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
    <?php endif; ?> 
    <nav class="container navigation post-navigation pt-3 pb-3"> 
        <h2 class="sr-only"><?php _e( 'Post navigation', 'blog' ); ?></h2> 
        <div class="row nav-links justify-content-between"> 
            <span class="nav-previous"><?php previous_post_link( '%link', __( '&laquo; %title', 'blog' ) ); ?></span> 
            <span class="nav-next"><?php next_post_link( '%link', __( '%title &raquo;', 'blog' ) ); ?></span> 
        </div>         
        <!-- .nav-links -->         
    </nav>     
</div>