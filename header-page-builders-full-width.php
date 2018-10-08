<!doctype html> 
<html <?php language_attributes(); ?>> 
    <head>          
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <meta name="mobile-web-app-capable" content="yes"> 
        <meta name="apple-mobile-web-app-capable" content="yes"> 
        <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>"> 
        <link rel="profile" href="http://gmpg.org/xfn/11"> 
        <meta name="description" content="<?php bloginfo( 'description' ); ?>"> 
        <meta name="author" content="The Pinegrow Team">          
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">                                     
        <?php wp_head(); ?>
    </head>     
    <body class="<?php echo implode(' ', get_body_class()); ?>"> 
        <div class="hfeed site" id="page"> 
            <header> 
                <div itemscope="" itemtype="http://schema.org/WebSite" id="wrapper-navbar"> 
                    <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'blog' ); ?></a> 
                    <nav class="navbar bg-primary navbar-dark navbar-expand-lg"> 
                        <div class="container"> 
                            <?php if ( ! has_custom_logo() ) : ?>
                                <div> 
                                    <a rel="home" class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a> 
                                </div>                                 
                            <?php else : ?>
                                <?php the_custom_logo(); ?>
                            <?php endif; ?> 
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler6" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"> 
                                <span class="navbar-toggler-icon"></span> 
                            </button>                             
                            <div class="collapse navbar-collapse" id="navbarToggler6"> 
                                <?php if ( has_nav_menu( 'primary' ) ) : ?>
                                    <?php wp_nav_menu( array(
                                            'menu' => 'primary',
                                            'menu_class' => 'navbar-nav mt-2 mt-lg-0 ml-auto ',
                                            'container' => '',
                                            'depth' => '2',
                                            'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                                            'walker' => new wp_bootstrap4_navwalker()
                                    ) ); ?>
                                <?php endif; ?> 
                            </div>                             
                        </div>                         
                    </nav>                     
                </div>                 
            </header>             
            <div>