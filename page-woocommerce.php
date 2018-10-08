<?php
/*
 Template Name: ST2 Page WooCommerce
 */
?>
<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper"> 
    <div class="container" id="content" tabindex="-1"> 
        <div class="row"> 
            <div class="content-area col-md-12" id="primary"> 
                <main class="site-main" id="main"> 
                    <?php get_template_part( 'loop-templates/content-page-woocommerce' ); ?> 
                </main>                                 
            </div>                             
        </div>                         
    </div>                     
</div>                                 

<?php get_footer(); ?>