<?php
/**
* @package jialove
* @author rccoder
* @version 1.0
* @link http://www.rccoder.net
*/
/**
 * Filter the page title.
 *
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 * @since jialove 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 */
function jialove_wp_title( $title, $sep ) {
	global $paged, $page;
	if ( is_feed() )
		return $title;
	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );
	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";
	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );
	return $title;
}
add_filter( 'wp_title', 'jialove_wp_title', 10, 2 );
/**
* Some easy
*
* define the nav-menu
* define the kind of the post
* define the excerpt of the post
*define the widget in the sidebar
*
* @since jialove1.0
*/
//define the nav-menu
register_nav_menus(
		array(
			'primary' => __('主题菜单')
		)
	);
//define the kind of the post
add_theme_support( 'post-formats', array('status','image','quote','video','audio') );
//define the excerpt of the post
function jialove_excerpt_length($length){
  return 200;
}
add_filter('excerpt_length', 'jialove_excerpt_length');
//define the widget in the sidebar
function jialove_widgets() {
		register_sidebar(array(
			'name' => 'sidebar1',
			'description' => __('主题侧边栏'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));
	}
	add_action( 'widgets_init', 'jialove_widgets' );	
?>