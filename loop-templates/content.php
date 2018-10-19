<div class="d-flex flex-column align-items-center justify-content-center"> 
    <?php if ( have_posts() ) : ?>
        <div <?php post_class( 'row flex-row-reverse justify-content-center' ); ?> id="post-<?php the_ID(); ?>">
            <div id="carousel1" class="carousel slide" data-ride="carousel"> 
                <ol class="carousel-indicators"> 
                    <li data-target="#carousel1" data-slide-to="0" class="active"></li>                     

                    <li data-target="#carousel1" data-slide-to="1"></li>                     

                    <li data-target="#carousel1" data-slide-to="2"></li>                     
                </ol>                 

                <div class="carousel-inner"> 
                    <div class="carousel-item active"> 
                        <img class="d-block w-100" src="http://pinegrow.com/placeholders/img16.jpg" alt="First slide"> 
                        <div class="carousel-caption d-none d-md-block"> 
                            <h3><?php _e( 'Slide label 1', 'blog' ); ?></h3> 
                            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'blog' ); ?></p> 
                        </div>                         
                    </div>                     

                    <div class="carousel-item"> 
                        <img class="d-block w-100" src="http://pinegrow.com/placeholders/img13.jpg" alt="Second slide"> 
                        <div class="carousel-caption d-none d-md-block"> 
                            <h3><?php _e( 'Slide label 2', 'blog' ); ?></h3> 
                            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'blog' ); ?></p> 
                        </div>                         
                    </div>                     

                    <div class="carousel-item"> 
                        <img class="d-block w-100" src="http://pinegrow.com/placeholders/img18.jpg" alt="Third slide"> 
                        <div class="carousel-caption d-none d-md-block"> 
                            <h3><?php _e( 'Slide label 3', 'blog' ); ?></h3> 
                            <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'blog' ); ?></p> 
                        </div>                         
                    </div>                     
                </div>                 

                <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Previous', 'blog' ); ?></span> </a> 
                <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Next', 'blog' ); ?></span> </a> 
            </div>
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="col-md-5"> 
                    <header class="entry-header"> 
                        <?php if ( is_singular() ) : ?>
                            <h3 class="text-center"><?php the_title(); ?></h3>
                        <?php else : ?>
                            <h3 class="text-center"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
                        <?php endif; ?> 
                    </header>
                    <figure class="snip1573 float-right">
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
                        <?php the_excerpt( ); ?>
                        <div class="entry-meta"> 
                            <p class="text-center"><span><?php the_modified_date(); ?></span></p>
                            <p class="text-center"><?php _e( '&nbsp;by', 'blog' ); ?> <span><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span></p> 
                        </div>                         
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
</div>