<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package WordPress
 * @subpackage jialove
 * @since jialove 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<title><?php wp_title( '-', true, 'right' ); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo( 'template_url' ); ?>/images/favicon.ico" />	
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" type="text/css" media="screen" />
    <!--Style CSS-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <!-- low brower notice-->
    <script src="<?php bloginfo('template_url');?>/js/ie-emulation-modes-warning.js"></script>
    <?php wp_head();?>
</head>
<body>
	<div class="blog-masthead">
      <div class="container">
                <?php wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'       => 'nav',
                    'container_class' => 'blog-nav',
                    'container_id'    => 'nav-menu'                   
                )); ?>
            </div>
      </div>
    </div>
    <div class="container">
    	<div class="blog-header">
    		<h1 class="blog-title"><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" rel="home"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" /></a></h1>
    		<p class="lead blog-description"><?php bloginfo('description'); ?></p>
    	</div>
        <!--
        <?php if(is_home()) {?>
        <div id="carousell" class="carousel slide">
              <div class="carousel-inner">
                  <div class="item active">
                      <img src="<?php bloginfo('template_url'); ?>/images/tb1.jpg" alt="" width="1000" height="667">
                      <div class="carousel-caption">
                          <p>First</p>
                      </div>
                  </div>
                  <div class="item">
                      <img src="<?php bloginfo('template_url'); ?>/images/tb1.jpg" alt="" width="1000" height="667">
                      <div class="carousel-caption">
                          <p>Second</p>
                      </div>
                  </div>
                  <div class="item">
                      <img src="<?php bloginfo('template_url'); ?>/images/tb1.jpg" alt="" width="1000" height="667">
                      <div class="carousel-caption">
                          <p>Third</p>
                      </div>
                  </div>
              </div>
              <a href="#carousell" data-silde="prev" class="left carousel-control"><</a>
              <a href="#carousell" data-silde="next" class="right carousel-control"><</a>
        </div>
        <?php } ?>
    		-->