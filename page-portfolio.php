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
        <div class="row no-gutters pt-5">
            <?php
                $portfolio_args = array(
                    'category_name' => 'portfolio',
                    'order' => 'DESC'
                )
            ?>
            <?php $portfolio = new WP_Query( $portfolio_args ); ?>
            <?php if ( $portfolio->have_posts() ) : ?>
                <section class="cards">
                    <?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>
                        <article class="card card--1">
                            <div class="card__info-hover">
                                <svg class="card__like" viewbox="0 0 24 24">
                                    <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z"/>
                                </svg>
                                <div class="card__clock-info">
                                    <svg class="card__clock" viewbox="0 0 24 24">
                                        <path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z"/>
                                    </svg>
                                    <span class="card__time"><?php _e( '15 min', 'blog' ); ?></span>
                                </div>
                            </div>
                            <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal' ) : null; ?>
                            <div class="card__img" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                            <a href="#" class="card_link">
                                <div class="card__img--hover"></div>
                            </a>
                            <div class="card__info">
                                <span class="card__category"><?php single_tag_title(); ?></span>
                                <h3 class="card__title"><?php the_title(); ?></h3>
                                <span class="card__by"><?php _e( 'by', 'blog' ); ?> <a href="#" class="card__author" title="author"><?php the_author(); ?></a></span>
                                <a class="btn btn-outline-warning" href="<?php echo esc_url( get_permalink() ); ?>"><?php _e( 'Label', 'blog' ); ?></a>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <article class="card card--2 shake-top">
                        <div class="card__info-hover">
                            <svg class="card__like" viewbox="0 0 24 24">
                                <path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z"/>
                            </svg>
                            <div class="card__clock-info">
                                <svg class="card__clock" viewbox="0 0 24 24">
                                    <path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z"/>
                                </svg>
                                <span class="card__time"><?php _e( '5 min', 'blog' ); ?></span>
                            </div>
                        </div>
                        <div class="card__img"></div>
                        <a href="#" class="card_link">
                            <div class="card__img--hover"></div>
                        </a>
                        <div class="card__info">
                            <span class="card__category"> <?php _e( 'Travel', 'blog' ); ?></span>
                            <h3 class="card__title"><?php _e( 'Discover the sea', 'blog' ); ?></h3>
                            <span class="card__by"><?php _e( 'by', 'blog' ); ?> <a href="#" class="card__author" title="author"><?php _e( 'John Doe', 'blog' ); ?></a></span>
                        </div>
                    </article>                                     
                </section>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
            <?php endif; ?>
        </div>
    </div>                     
</div>                                 

<?php get_footer(); ?>