 
    <div class="row">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class( 'mb-5 col-md-6' ); ?> id="post-<?php the_ID(); ?>"> 
                    <header class="entry-header"> 
                        <?php if ( is_singular() ) : ?>
                            <h2 class="pl-4 pt-1"><?php the_title(); ?></h2>
                        <?php else : ?>
                            <h2 class="pl-4 pt-1"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
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
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
        <?php endif; ?>
    </div>     
    <nav aria-label="Posts navigation"> 
        <?php posts_nav_link( null, __( '&#xAB; Newer Posts', 'blog' ), __( 'Older Posts &#xBB;', 'blog' ) ); ?> 
    </nav>     
