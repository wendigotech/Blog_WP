 
    <?php if ( have_posts() ) : ?>
        <div <?php post_class( 'row' ); ?> id="post-<?php the_ID(); ?>">
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="mb-5 col-md-6"> 
                    <header class="entry-header"> 
                        <?php if ( is_singular() ) : ?>
                            <h3 class="pl-4 pt-1"><?php the_title(); ?></h3>
                        <?php else : ?>
                            <h3 class="pl-4 pt-1"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
                        <?php endif; ?> 
                        <div class="entry-meta"> 
                            <p><?php _e( 'Posted on', 'blog' ); ?> <span><?php the_modified_date(); ?></span> <?php _e( 'by', 'blog' ); ?> <span><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span></p> 
                        </div>                         
                    </header>                     
                    <figure class="snip1573">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'large', array(
                                'class' => 'mb-4'
                            ) );
                            }
                         ?>
                        <figcaption>
                            <h3><i class="fas fa-eye fa-3x fa-rotate-180"></i><i class="fas fa-eye fa-3x fa-rotate-180"></i><?php _e( 'More', 'blog' ); ?></h3>
                        </figcaption>
                        <a href="<?php echo esc_url( get_permalink() ); ?>"></a>
                    </figure>                     
                    <div class="entry-content"> 
                        <?php the_excerpt( ); ?> 
                        <a class="btn btn-secondary" href="<?php echo esc_url( get_permalink() ); ?>"><?php _e( 'Read More', 'blog' ); ?></a> 
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
