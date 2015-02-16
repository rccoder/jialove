<?php get_header(); ?>
<div class="row">
    <div class="col-sm-8 blog-main">
    	<div class="blog-post">
    		<?php if(have_posts()):while(have_posts()):the_post(); ?>
    		<h2 class="blog-post-title"><?php the_title(); ?></h2>
    		<p class="blog-post-meta">
    			<div class="data_author">
    				<span><?php the_time('m月d日'); ?></span>&nbsp;&nbsp;<span>By</span>&nbsp;&nbsp;<span><?php the_author(''); ?></span>
    				<span>
						<?php if( current_user_can( 'manage_options' ) ) { ?>
							<a href="<?php echo get_edit_post_link(); ?>" target="_blank">编辑文章</a>
						<?php } ?>
    				</span>
    			</div>
    			<br>
    		</p>
    		<div class="single-content">
    		<p>
    			<?php the_content(); ?>
    		</p>
    		</div>
    		<?php endwhile; endif; ?>
    	</div>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>