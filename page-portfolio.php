<?php
/*
 Template Name: ST2 Page Without Sidebars
 */
?>
<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper"> 
    <div class="container" id="content" tabindex="-1"> 
        <div class="row" style="display:grid;grid-template-columns:1fr 1fr 1fr 1fr 1fr 1fr;grid-template-rows:100px 1fr 100px 1fr 100px;grid-auto-columns:1fr;grid-auto-rows:1fr;grid-gap:20px;grid-template-areas:&quot;one one . . three three&quot; &quot;one one two two three three&quot; &quot;five five two two six six&quot; &quot;five five four four six six&quot; &quot;. . four four . .&quot;;">
            <div class="card " style="grid-area:one;">
                <img class="card-img-top" alt="Card image cap" src="http://pinegrow.com/placeholders/img19.jpg"/>
                <div class="card-body">
                    <h4 class="card-title"><?php _e( 'Card title', 'blog' ); ?></h4>
                    <p class="card-text"><?php _e( 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'blog' ); ?></p>
                    <a href="#" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                </div>
            </div>
            <div class="card " style="grid-area:two;">
                <img class="card-img-top" alt="Card image cap" src="http://pinegrow.com/placeholders/img19.jpg"/>
                <div class="card-body">
                    <h4 class="card-title"><?php _e( 'Card title', 'blog' ); ?></h4>
                    <p class="card-text"><?php _e( 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'blog' ); ?></p>
                    <a href="#" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                </div>
            </div>
            <div class="card " style="grid-area:three;">
                <img class="card-img-top" alt="Card image cap" src="http://pinegrow.com/placeholders/img19.jpg"/>
                <div class="card-body">
                    <h4 class="card-title"><?php _e( 'Card title', 'blog' ); ?></h4>
                    <p class="card-text"><?php _e( 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'blog' ); ?></p>
                    <a href="#" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                </div>
            </div>
            <div class="card " style="grid-area:six;">
                <img class="card-img-top" alt="Card image cap" src="http://pinegrow.com/placeholders/img19.jpg"/>
                <div class="card-body">
                    <h4 class="card-title"><?php _e( 'Card title', 'blog' ); ?></h4>
                    <p class="card-text"><?php _e( 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'blog' ); ?></p>
                    <a href="#" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                </div>
            </div>
            <div class="card " style="grid-area:four;">
                <img class="card-img-top" alt="Card image cap" src="http://pinegrow.com/placeholders/img19.jpg"/>
                <div class="card-body">
                    <h4 class="card-title"><?php _e( 'Card title', 'blog' ); ?></h4>
                    <p class="card-text"><?php _e( 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'blog' ); ?></p>
                    <a href="#" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                </div>
            </div>
            <div class="card " style="grid-area:five;">
                <img class="card-img-top" alt="Card image cap" src="http://pinegrow.com/placeholders/img19.jpg"/>
                <div class="card-body">
                    <h4 class="card-title"><?php _e( 'Card title', 'blog' ); ?></h4>
                    <p class="card-text"><?php _e( 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'blog' ); ?></p>
                    <a href="#" class="btn btn-primary"><?php _e( 'Go somewhere', 'blog' ); ?></a>
                </div>
            </div>                             
        </div>                         
    </div>                     
</div>                                 

<?php get_footer(); ?>