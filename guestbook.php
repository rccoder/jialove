<?php
/*
Template Name: Guessbook
*/
?>
<?php get_header(); ?>
<div class="row">
    <div class="col-sm-8 blog-main">
    	<div class="blog-post">
    		<?php if(have_posts()):while(have_posts()):the_post(); ?>
    		<h2 class="blog-post-title"><?php the_title(); ?></h2>
    		<p class="blog-post-meta">
    			<div class="data_author">
    				<span><?php the_time('m月d日'); ?></span>&nbsp;&nbsp;<span>By</span>&nbsp;&nbsp;<span><?php the_author(' '); ?></span>
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
            <!--guessbook-->
            <div class="guestbook">
                <?php $query="SELECT COUNT(comment_ID) AS cnt, comment_author, comment_author_url, comment_author_email FROM (SELECT * FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->posts.ID=$wpdb->comments.comment_post_ID) WHERE comment_date > date_sub( NOW(), INTERVAL 24 MONTH ) AND user_id='0' AND comment_author_email != 'ysbinang@qq.com' AND post_password='' AND comment_approved='1' AND comment_type='') AS tempcmt GROUP BY comment_author_email ORDER BY cnt DESC LIMIT 50"; $wall = $wpdb->get_results($query); $maxNum = $wall[0]->cnt; foreach ($wall as $comment) { $width = round(40/($maxNum / $comment->cnt),2); if( $comment->comment_author_url ) $url = $comment->comment_author_url; else $url="#"; $avatar = get_avatar( $comment->comment_author_email, $size = '36',$default = get_bloginfo('wpurl').'/default.jpg'); $tmp = "<li><a target=\"_blank\" href=\"".$comment->comment_author_url."\">".$avatar."<em>".$comment->comment_author."</em> <strong>+".$comment->cnt."</strong></br>".$comment->comment_author_url."</a></li>"; $output .= $tmp; } $output = "<ul class=\"readers-list\">".$output."</ul>"; echo $output ; ?>
            </div>
    		<?php endwhile; endif; ?>
    	</div>
    </div>
<?php get_sidebar(); ?>
<script>
    $(function(){
         $("#guestbookList li").hover(function(){
                $(this).find('img').stop(false,false).animate({left:"-50"},400);
                $(this).find('em').stop(false,false).animate({top:"-30"},400);
                $(this).find('strong').stop(false,false).animate({right:"-30"},400);
                $(this).find('span').stop(false,false).animate({bottom:"35"},400);
         },function(){
                $(this).find('img').stop(false,false).animate({left:"0"},400);
                $(this).find('em').stop(false,false).animate({top:"0"},400);
                $(this).find('strong').stop(false,false).animate({right:"10"},400);
                $(this).find('span').stop(false,false).animate({bottom:"0"},400);
         });
    });
</script>
<?php get_footer(); ?>