<section class="comments">
	<?php if(have_comments()) : ?>
	<h6><?php echo get_comments_number(); ?>&nbsp;<span>条评论</span></h6>
	<section class="comments-list">
		<ol>
			<?php wp_list_comments(array('callback' => 'twentyten_comment')); ?>
		</ol>
		<section>
			<?php paginate_comments_links('prev_text=前一页&next_text=后一页');?>
		</section>
	</section>
	<?php endif; ?>
	<section class="reply-form" id="respond" >
		<?php if(function_exists('comment_reply_link')) { ?>
		<section id="CancelReply">
			<?php cancel_comment_reply_link('取消回复') ?>
		</section>
		<?php } ?>
		<?php if($user_ID) : ?>
		<section class="fn-clear">
			<h6> 发表评论
				<?php if (function_exists('wp_logout_url')) { ?>
				<?php } ?>
			</h6>
			<p>
				<a href="<?php echo wp_logout_url(get_permalink()); ?>"><?php echo $user_identity; ?> 已登录 (登出)</a>
			</p>
		</section>
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" onsubmit="checkField();" >
		<?php else : ?>
		<h6>发表评论</h6>

		<?php /*?>
			<?php
			$d = 1 + 12;
			if ( $d == 2)
				echo "yes"; 
			else
				echo "no"; 
			?>
		<?php */?>
		
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" onsubmit="checkField();" >
			<section class="fn-ov">
				<div>
					<input class="text" type="text" name="author" id="AuthorField" value="<?php echo $comment_author; ?>" default="姓名" tabindex="1" <?php if($req) echo "aria-required='true'"; ?> />
					<input class="text" type="text" name="email" id="EmailField" value="<?php echo $comment_author_email; ?>" default="电子邮件(可不填)" tabindex="2" <?php if($req) echo "aria-required='true'"; ?> />
					<input class="text" type="text" name="url" id="WebsiteField" value="<?php echo $comment_author_url; ?>" default="网站(可不填)" />
				</div>
			</section>
			<?php endif; ?>
			<textarea class="text" name="comment" id="comment" tabindex="4"></textarea>
			<?php do_action('comment_form', $post -> ID); ?>
			<?php if (function_exists('comment_id_fields')) { ?>
			<?php comment_id_fields(); ?>
			<?php } else { ?>
			<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
			<?php } ?>
			<button class="submit btn" type="submit" name="submit" id="submit_comment" tabindex="5" value="提交评论" onfocus="this.blur();" title="提交评论">提交评论</button>
		</form>
	</section>
</section>
