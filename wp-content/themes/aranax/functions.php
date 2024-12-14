<?php
include 'wp_bootstrap_navwalker.php';

function aranax_scripts_with_jquery()
{
	wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), 3.0, true );
	
	//wp_enqueue_script( 'news-scroller-script', get_template_directory_uri() . '/js/jquery.vticker.min.js', array ( 'jquery' ), 1.0, true);
	wp_enqueue_script( 'aranax-script', get_template_directory_uri() . '/js/aranax.js', array ( 'jquery' ), 1.0, true);
}
add_action( 'wp_enqueue_scripts', 'aranax_scripts_with_jquery' );


function aranax_register_menu() {
  register_nav_menu('side-menu',__( 'Side Menu' ));
}
add_action( 'init', 'aranax_register_menu' );


/**
 * Filter the "read more" excerpt string link to the post.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function aranax_excerpt_more( $more ) {
    return sprintf( '<a class="read-more" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'textdomain' )
    );
}
add_filter( 'excerpt_more', 'aranax_excerpt_more' );

?>