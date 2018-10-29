<div class="d-flex flex-column align-items-center justify-content-center"> 
    <?php if ( have_posts() ) : ?>
        <div <?php post_class( 'row flex-row-reverse justify-content-center site-main' ); ?> id="post-<?php the_ID(); ?>">
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="flex-wrap-reverse align-items-center d-flex col-md-4 flex-column"> 
                    <figure class="snip1573">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'large' );
                            }
                         ?>
                        <figcaption>
                            <h3><i class="fas fa-eye fa-3x fa-rotate-180"></i><?php _e( 'More', 'blog' ); ?></h3>
                        </figcaption>
                        <a href="<?php echo esc_url( get_permalink() ); ?>"></a>
                    </figure>                     
                    <div class="entry-content"> 
                        <header class="entry-header"> 
                            <?php if ( is_singular() ) : ?>
                                <h3 class="text-center"><?php the_title(); ?></h3>
                            <?php else : ?>
                                <h3 class="text-center"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
                            <?php endif; ?> 
                        </header>
                        <?php the_excerpt( ); ?>
                        <div class="entry-meta justify-content-between align-items-center"> 
                            <p class="text-center"><?php _e( '&nbsp;by', 'blog' ); ?> <span><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span><span><?php the_modified_date(); ?></span></p>
                            <a class="btn btn-secondary mt-2" href="<?php echo esc_url( get_permalink() ); ?>"><?php _e( 'Read More', 'blog' ); ?></a> 
                        </div>                         
                    </div>                     
                    <footer class="entry-footer"></footer>                     
                </article>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
    <?php endif; ?> 
    <nav aria-label="Posts navigation"> 
        <?php posts_nav_link( null, __( '&#xAB; Newer Posts', 'blog' ), __( 'Older Posts &#xBB;', 'blog' ) ); ?> 
    </nav>     
</div>