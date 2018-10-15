<?php
/*
 Template Name: ST2 Page Without Sidebars
 */
?>
<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper portfolio-body color-change-2x"> 
    <div class="container" id="content" tabindex="-1"> 
        <div class="row text-light">
            <div class="col-md-12">
                <h2 class="text-center text-light"><?php the_title(); ?></h2> 
                <?php the_content(); ?> 
            </div>
        </div>                         
        <div class="row mt-5 mb-5">
            <section class="cards cards-grid">
                <?php
                    $portfolio_args = array(
                        'category_name' => 'portfolio',
                        'order' => 'DESC'
                    )
                ?>
                <?php $portfolio = new WP_Query( $portfolio_args ); ?>
                <?php if ( $portfolio->have_posts() ) : ?>
                    <?php $portfolio_item_number = 0; ?>
                    <?php while ( $portfolio->have_posts() && $portfolio_item_number++ < 1 ) : $portfolio->the_post(); ?>
                        <article class="card card--1" style="grid-area:1 / 2 / 4 / 3;">
                            <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal', 'with-image' ) : null; ?>
                            <div class="card__img <?php if($image_attributes) echo 'with-image'; ?>" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="card_link" data-toggle="modal" data-target="#modal1">
                                <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal', 'with-image' ) : null; ?>
                                <div class="card__img--hover <?php if($image_attributes) echo 'with-image'; ?>" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                            </a>
                            <div class="card__info">
                                <span class="card__category"><?php the_tags(); ?></span>
                                <h3 class="card__title"><?php the_title(); ?></h3>
                                <span class="card__by"><?php _e( 'by', 'blog' ); ?> <a href="#" class="card__author" title="author"><?php the_author(); ?></a></span>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
                <?php endif; ?>
                <?php if ( $portfolio->have_posts() ) : ?>
                    <?php $portfolio_item_number = 0; ?>
                    <?php while ( $portfolio->have_posts() && $portfolio_item_number++ < 1 ) : $portfolio->the_post(); ?>
                        <article class="card card--1" style="grid-area:2 / 3 / 5 / 4;">
                            <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal', 'with-image' ) : null; ?>
                            <div class="card__img <?php if($image_attributes) echo 'with-image'; ?>" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="card_link" data-toggle="modal" data-target="#modal1">
                                <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal', 'with-image' ) : null; ?>
                                <div class="card__img--hover <?php if($image_attributes) echo 'with-image'; ?>" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                            </a>
                            <div class="card__info">
                                <span class="card__category"><?php single_tag_title(); ?></span>
                                <h3 class="card__title"><?php the_title(); ?></h3>
                                <span class="card__by"><?php _e( 'by', 'blog' ); ?> <a href="#" class="card__author" title="author"><?php the_author(); ?></a></span>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
                <?php endif; ?>
                <?php if ( $portfolio->have_posts() ) : ?>
                    <?php $portfolio_item_number = 0; ?>
                    <?php while ( $portfolio->have_posts() && $portfolio_item_number++ < 1 ) : $portfolio->the_post(); ?>
                        <article class="card card--1" style="grid-area:1 / 4 / 4 / 6;">
                            <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal', 'with-image' ) : null; ?>
                            <div class="card__img <?php if($image_attributes) echo 'with-image'; ?>" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="card_link" data-toggle="modal" data-target="#modal1">
                                <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal', 'with-image' ) : null; ?>
                                <div class="card__img--hover <?php if($image_attributes) echo 'with-image'; ?>" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                            </a>
                            <div class="card__info">
                                <span class="card__category"><?php single_tag_title(); ?></span>
                                <h3 class="card__title"><?php the_title(); ?></h3>
                                <span class="card__by"><?php _e( 'by', 'blog' ); ?> <a href="#" class="card__author" title="author"><?php the_author(); ?></a></span>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
                <?php endif; ?>
                <?php if ( $portfolio->have_posts() ) : ?>
                    <?php $portfolio_item_number = 0; ?>
                    <?php while ( $portfolio->have_posts() && $portfolio_item_number++ < 1 ) : $portfolio->the_post(); ?>
                        <article class="card card--1" style="grid-area:4 / 5 / 7 / 6;">
                            <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal', 'with-image' ) : null; ?>
                            <div class="card__img <?php if($image_attributes) echo 'with-image'; ?>" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="card_link" data-toggle="modal" data-target="#modal1">
                                <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal', 'with-image' ) : null; ?>
                                <div class="card__img--hover <?php if($image_attributes) echo 'with-image'; ?>" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                            </a>
                            <div class="card__info">
                                <span class="card__category"><?php single_tag_title(); ?></span>
                                <h3 class="card__title"><?php the_title(); ?></h3>
                                <span class="card__by"><?php _e( 'by', 'blog' ); ?> <a href="#" class="card__author" title="author"><?php the_author(); ?></a></span>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
                <?php endif; ?>
                <?php if ( $portfolio->have_posts() ) : ?>
                    <?php $portfolio_item_number = 0; ?>
                    <?php while ( $portfolio->have_posts() && $portfolio_item_number++ < 1 ) : $portfolio->the_post(); ?>
                        <article class="card card--1" style="grid-area:5 / 2 / 8 / 3;">
                            <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal', 'with-image' ) : null; ?>
                            <div class="card__img <?php if($image_attributes) echo 'with-image'; ?>" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="card_link" data-toggle="modal" data-target="#modal1">
                                <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal', 'with-image' ) : null; ?>
                                <div class="card__img--hover <?php if($image_attributes) echo 'with-image'; ?>" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                            </a>
                            <div class="card__info">
                                <span class="card__category"><?php single_tag_title(); ?></span>
                                <h3 class="card__title"><?php the_title(); ?></h3>
                                <span class="card__by"><?php _e( 'by', 'blog' ); ?> <a href="#" class="card__author" title="author"><?php the_author(); ?></a></span>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
                <?php endif; ?>
                <?php if ( $portfolio->have_posts() ) : ?>
                    <?php $portfolio_item_number = 0; ?>
                    <?php while ( $portfolio->have_posts() && $portfolio_item_number++ < 1 ) : $portfolio->the_post(); ?>
                        <article class="card card--1" style="grid-area:5 / 3 / 7 / 5;">
                            <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal', 'with-image' ) : null; ?>
                            <div class="card__img <?php if($image_attributes) echo 'with-image'; ?>" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="card_link" data-toggle="modal" data-target="#modal1">
                                <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal', 'with-image' ) : null; ?>
                                <div class="card__img--hover <?php if($image_attributes) echo 'with-image'; ?>" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                            </a>
                            <div class="card__info">
                                <span class="card__category"><?php single_tag_title(); ?></span>
                                <h3 class="card__title"><?php the_title(); ?></h3>
                                <span class="card__by"><?php _e( 'by', 'blog' ); ?> <a href="#" class="card__author" title="author"><?php the_author(); ?></a></span>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
                <?php endif; ?>
                <?php if ( $portfolio->have_posts() ) : ?>
                    <?php $portfolio_item_number = 0; ?>
                    <?php while ( $portfolio->have_posts() && $portfolio_item_number++ < 1 ) : $portfolio->the_post(); ?>
                        <article class="card card--1" style="grid-area:8 / 2 / 11 / 4;">
                            <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal', 'with-image' ) : null; ?>
                            <div class="card__img <?php if($image_attributes) echo 'with-image'; ?>" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="card_link" data-toggle="modal" data-target="#modal1">
                                <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal', 'with-image' ) : null; ?>
                                <div class="card__img--hover <?php if($image_attributes) echo 'with-image'; ?>" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                            </a>
                            <div class="card__info">
                                <span class="card__category"><?php single_tag_title(); ?></span>
                                <h3 class="card__title"><?php the_title(); ?></h3>
                                <span class="card__by"><?php _e( 'by', 'blog' ); ?> <a href="#" class="card__author" title="author"><?php the_author(); ?></a></span>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
                <?php endif; ?>
                <?php if ( $portfolio->have_posts() ) : ?>
                    <?php $portfolio_item_number = 0; ?>
                    <?php while ( $portfolio->have_posts() && $portfolio_item_number++ < 1 ) : $portfolio->the_post(); ?>
                        <article class="card card--1" style="grid-area:7 / 4 / 10 / 6;">
                            <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal', 'with-image' ) : null; ?>
                            <div class="card__img <?php if($image_attributes) echo 'with-image'; ?>" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="card_link" data-toggle="modal" data-target="#modal1">
                                <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal', 'with-image' ) : null; ?>
                                <div class="card__img--hover <?php if($image_attributes) echo 'with-image'; ?>" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                            </a>
                            <div class="card__info">
                                <span class="card__category"><?php single_tag_title(); ?></span>
                                <h3 class="card__title"><?php the_title(); ?></h3>
                                <span class="card__by"><?php _e( 'by', 'blog' ); ?> <a href="#" class="card__author" title="author"><?php the_author(); ?></a></span>
                            </div>
                        </article>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'blog' ); ?></p>
                <?php endif; ?> 
            </section>
        </div>
    </div>                     
</div>                                 

<?php get_footer(); ?>