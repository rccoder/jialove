<?php get_header(); ?>
<div class="container">
		<div class="row">
			<div class="col-md-8" id="middle">
				<!--start post-excerpt-->
				<div class="post-excerpt">
				<?php include_once 'post_list.php' ?>
				
				<!--end post-excerpt-->
				<!--start pagination-->
				<?php wp_pagenavi(); ?>
			</div>
			</div>
				<!--end pagination-->
			<div class="col-md-1"></div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>