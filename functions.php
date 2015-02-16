<?php 
//注册导航菜单
register_nav_menus(
		array(
			'primary' => __('主菜单')
		)
	);
//调节摘要字数
function jialove_excerpt_length($length){
  return 400;
}
add_filter('excerpt_length', 'jialove_excerpt_length');
//注册文章类型
add_theme_support( 'post-formats', array('status','image','quote','video','audio') );
//注册边栏sidebar
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
function wp_pagenavi( $before = '', $after = '', $p = 2 ) {
	if ( is_singular() ) return;
	global $wp_query, $paged;
	$max_page = $wp_query->max_num_pages;
	if ( $max_page == 1 ) return;
	if ( empty( $paged ) ) $paged = 1;
	echo $before.'<div class="pagination">';
	echo '<li><a href="#">第 ' . $paged . ' 页,共 ' . $max_page . ' 页</li>';
	if ( $paged > 1 ) p_link( $paged - 1, '上一页', '«' );
	if ( $paged > $p + 1 ) p_link( 1, '最前一页' );
	if ( $paged > $p + 2 ) echo '... ';
	for( $i = $paged - $p; $i <= $paged + $p; $i++ ) {
	if ( $i > 0 && $i <= $max_page ) $i == $paged ? print "<li>{$i}</li>" : p_link( $i );
	}
	if ( $paged < $max_page - $p - 1 ) echo '... ';
	if ( $paged < $max_page - $p ) p_link( $max_page, '最后一页' );
	if ( $paged < $max_page ) p_link( $paged + 1,'下一页', '»' );
	echo '</div>'.$after;
	}
	function p_link( $i, $title = '', $linktype = '' ) {
	if ( $title == '' ) $title = "Page {$i}";
	if ( $linktype == '' ) { $linktext = $i; } else { $linktext = $linktype; }
	echo "<li><a href='", esc_html( get_pagenum_link( $i ) ), "' title='{$title}'>{$linktext}</a></li>";
	}
 ?>