<?php 
	$postnun = 1;
	if(have_posts()):while(have_posts()):the_post();
 ?>
 <?php 
 	if(has_post_format('status')):
  ?>
<div class="post-list status">
	<div class="avatar"><a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/essay.png" width="40" height="40" alt="文字杂笔"></a></div>
	<div class="post-list-text"><?php the_content(); ?></div>
	<ul class="post-list-info">
		<li>标签：<?php the_tags(' '); ?></li>
		<li class="more"><a href="<?php the_permalink(); ?>">点击评论</a></li>
	</ul>
</div>
<?php  else: ?>
<div class="blog-post">
	<h2 class="blog-post-title">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
	</h2>
	<div class="blog-post-meta date_author">
		<span><?php the_time('m月d日'); ?></span>&nbsp;&nbsp;<span>By</span>&nbsp;&nbsp;<span><?php the_author(''); ?></span>
	</div>
	<p><?php the_excerpt(); ?></p>
	<p class="blog-post-meta">
		<span>分类：<?php the_category(' '); ?></span>
		<span>标签：<?php the_tags(' '); ?></span>
		<span>评论：<?php comments_popup_link('0条', '1 条', '% 条', '', '评论已关闭'); ?></span>
	</p>
</div>
<?php endif; ?>	

<?php $postnun++; endwhile; else: ?>

	<h1 style="border:1px solid #ccc; border-radius: 3px; padding: 50px; font-size: 20px; color: #f00; text-align: center; background: #fff;">客官太深了~~~ 已经没有更多的文章可以显示了</h1>

<?php endif; ?>