<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package savinilib
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function savinilib_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'type'      => 'click',
		'container' => 'main',
		'footer'    => 'page',
		'render'	=> 'savinilib_jetpack_post_template',
	) );
}
add_action( 'after_setup_theme', 'savinilib_jetpack_setup' );

function savinilib_jetpack_post_template(){
	while( have_posts() ) {
	    the_post();
	    get_template_part( 'template-parts/content' );
	}
	
}