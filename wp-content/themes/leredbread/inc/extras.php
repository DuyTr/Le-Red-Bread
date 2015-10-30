<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );


function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/images/lrb-logo.svg);
						background-size: 269px 62px;
						width: 269px;
						height:62px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function le_red_bread_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'le_red_bread_logo_url' );

function le_red_bread_url_title() {
    return 'Le Red Bread';
}
add_filter( 'login_headertitle', 'le_red_bread_url_title' );
