<?php get_header(); ?>
<div class="container">
		<div class="row">
			<div class="col-md-8">
				<!--start post-excerpt-->
				<div class="post-excerpt">
					<div class="post-excerpt-post">
						<?php if(have_posts()):while(have_posts()):the_post(); ?>
						<div class="title">
							<p><span class="glyphicon glyphicon-file"></span><h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1></p>
						</div>
						<div class="information">
							<span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<span><?php the_author(''); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-time"></span>&nbsp;&nbsp;<span><?php the_time('m月d日'); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;<span><?php the_category(' '); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-tag"></span> &nbsp;&nbsp;<span><?php the_tags(' '); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;<span><?php comments_popup_link('0条', '1 条', '% 条', '', '评论已关闭'); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;
						</div>
						<div class="clear"></div>
						<div class="excerpt">
							<p><?php the_content(); ?></p>
							<div class="share">
								<p>转载请注明文章地址：<a href="<?php get_permalink() ?>" title="<?php the_title() ?>"><?php the_title() ?>-<?php bloginfo('name'); ?></a></p>
								<p>如果你觉得本文值得分享或者mark，不妨点点下面的链接</p>
								<p style="float:right">
									<a class="sharetoweibo" href="javascript:share.weibo();">微博</a>
									<a class="sharetoqq"href="javascript:share.tqq();">QQ</a>
									<a class="sharetoqzone" href="javascript:share.qzone();">Qzone</a>
									<a class="sharetorenren" href="javascript:share.renren();">人人</a>
									<a class="sharetodouban" href="javascript:share.douban();">豆瓣</a>
								</p>
							</div>
						</div>
						<?php endwhile; endif; ?>
					</div>
					<nav class="next-prev">
						<ul class="pager">
							<li style="float:left"><?php next_post_link('%link','%title',false); ?></li>
							<li style="float:right"><?php previous_post_link('%link','%title',false); ?></li>
						</ul>
					</nav>
					<div class="comment">
						<com>Comment:</com>
						<?php comments_template(); ?>
					</div>
				</div>
			</div>
				<!--end pagination-->
			<div class="col-md-1"></div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>