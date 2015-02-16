<?php get_header(); ?>
<div class="row">
    <div class="col-sm-8 blog-main">
    	<div class="blog-post">
    		<?php if(have_posts()):while(have_posts()):the_post(); ?>
    		<h2 class="blog-post-title"><?php the_title(); ?></h2>
    		<p class="blog-post-meta">
    			<div class="data_author">
    				<span><?php the_time('m月d日'); ?></span>&nbsp;&nbsp;<span>By</span>&nbsp;&nbsp;<span><?php the_author(''); ?></span>
    			</div>
    			<br>
    			<div>
    				<span>分类：<?php the_category(' '); ?></span>
					<span>标签：<?php the_tags(' '); ?></span>
					<span>评论：<?php comments_popup_link('0条', '1 条', '% 条', '', '评论已关闭'); ?></span>
					<?php if( current_user_can( 'manage_options' ) ) { ?>
						<a href="<?php echo get_edit_post_link(); ?>" target="_blank">编辑文章</a>
					<?php } ?>
    			</div>
    			<br>
    		</p>
    		<div class="single-content">
    		<p>
    			<?php the_content(); ?>
    		</p>
    		<p>
    				转载请注明本文链接：<a href="<?php the_permalink(); ?>"><?php the_title(); ?>【<?php the_permalink(); ?>】</a><br />
    		</p>
    		</div>
    		<?php endwhile; endif; ?>
            <br><br>
            <nav>
                <ul class="pager">
                    <li style="float:left;"><?php next_post_link('%link','%title',false); ?></li>
                    <li style="float:right;"><?php previous_post_link('%link','%title',false); ?></li>
                </ul>
            </nav>
    	</div>
        <div class="part"><?php comments_template(); ?></div>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>