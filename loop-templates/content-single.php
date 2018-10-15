 
    <section class="hero mt-5 pt-5 mb-5">
        <div>
            <div class="img">
                <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'large', array(
                        'class' => 'rellax'
                    ) );
                    }
                 ?>
            </div>
            <h1><?php the_title(); ?></h1>
        </div>
    </section>
    <main>
        <?php the_content(); ?>
    </main>     
    <nav class="container navigation post-navigation pt-3 pb-3"> 
        <h2 class="sr-only"><?php _e( 'Post navigation', 'blog' ); ?></h2> 
        <div class="row nav-links justify-content-between"> 
            <span class="nav-previous"><?php previous_post_link( '%link', __( '&laquo; %title', 'blog' ) ); ?></span> 
            <span class="nav-next"><?php next_post_link( '%link', __( '%title &raquo;', 'blog' ) ); ?></span> 
        </div>         
        <!-- .nav-links -->         
    </nav>     
    <?php if ( comments_open() || get_comments_number() || is_single() ) : ?>
        <?php comments_template( '/comments.php' ); ?>
    <?php endif; ?> 
