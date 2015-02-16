<!DOCTYPE html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>index</title>
	<!--Bootstrap-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
	<!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
	<!--[if lt IE 9]>
		<script src="js/respond.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>
<body>
	<!--start logo-->
	<div class="title">
		<div class="container">
			<div class="logo">
				<h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<p><?php bloginfo('description'); ?></p>
			</div>
			<div class="announcement">
				<p>在线解决相关WordPress难题！</p>
			</div>
		</div>
	</div>
	<!--end logo-->
	<?php if(is_home()) {?>
	<!--start introduce-->
	<div class="introduce">
		<div class="container">
			<div class="word">
				<p><a href="#">avatar</a></p>
				<p>HI！我是rccoder</p>
				<p>喜欢code，热爱生活</p>
				<p>了解更多，滑动你的鼠标</p>
			</div>
		</div>
	</div>
	<!--end introduce-->
	<?php } ?>
	<!--start navbar-->
	<div class="navbar-warpper">
		<div class="container">
			<div class="navbar navbar-inverse" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only"> Toggle navigation</span>
							<sapn class="icon-bar"></sapn>
							<sapn class="icon-bar"></sapn>
							<sapn class="icon-bar"></sapn>
						</button>
						<a href="#" class="navbar-brand">导航栏<span class="glyphicon glyphicon-pushpin"></span></a>
					</div>

					<!--静态菜单
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">首页</a></li>
							<li><a href="#">分类一</a></li>
							<li><a href="#">分类二</a></li>
							<li><a href="#">页面</a></li>
							<li><a href="#">关于我</a></li>
						</ul>
					</div>
				-->
					<?php 
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'container' => 'div',
							'container_class' => 'navbar-collapse collapse',
							'container_id' => 'nav-menu'
							)
							);
					 ?>
				</div>
			</div>
		</div>
	</div>
	<!--end navbar-->