<?php
get_header(); ?>

<div class="wrapper" id="woocommerce-wrapper"> 
    <div tabindex="-1" id="content" class="container"> 
        <div class="row">                              
            <div id="primary" class="content-area col-md-12"> 
                <main class="site-main" id="main"> 
                    <?php get_template_part( 'loop-templates/content-woocommerce' ); ?> 
                </main>                                 
            </div>                                                          
        </div>                         
    </div>                     
</div>                                 

<?php get_footer(); ?>