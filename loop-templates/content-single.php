<div> 
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>"> 
                <header class="entry-header"> 
                    <h1><?php the_title(); ?></h1> 
                    <div class="entry-meta"> 
                        <p><?php _e( 'Posted on', 'blog' ); ?> <span><?php the_modified_date(); ?></span> <?php _e( 'by', 'blog' ); ?> <span><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span></p> 
                    </div>                     
                </header>                 
                <div class="entry-content"> 
                    <?php the_content(); ?> 
                    <?php wp_link_pages( array() ); ?> 
                </div>                 
                <footer class="entry-footer"> 
                    <?php if ( has_tag() ) : ?>
                        <span class="tags-links"><?php the_tags( 'Tags: ', ', ' ); ?></span>
                    <?php endif; ?> 
                    <?php edit_post_link( '<b class="text-success">Edit Post</b>' ); ?> 
                </footer>                 
            </article>
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
    <?php if ( comments_open() || get_comments_number() || is_single() ) : ?>
        <?php comments_template( '/comments.php' ); ?>
    <?php endif; ?> 
</div>