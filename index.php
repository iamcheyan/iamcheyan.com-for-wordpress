<?php get_header(); ?>
		<section class="main">
			<section class="post-list">
				<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<article class="post">
							<a href="<?php the_permalink(); ?>" class="time" title="<?php the_time('Y年m月d日（D）H时i分s秒') ?>"><?php the_time('Y年m月d日') ?></a>
							<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> By.澈言"><?php the_title(); ?></a><?php edit_post_link('Edit', '&nbsp;&nbsp;&#124&nbsp;', ''); ?></h2>
							<div class="con">
								<?php the_content('',true,'') ?>
							</div>
							
							<div class="info">
								<p> 
									Tags&nbsp;:&nbsp;<?php the_tags('','&nbsp;/&nbsp;',''); ?><br>Category&nbsp;:&nbsp;<?php the_category('&nbsp;/&nbsp;') ?>
									<?php /*?><a class="moreLink btn" href="<?php the_permalink() ?>">阅读全文&gt;&gt;</a><?php */?>
								</p>
							</div>
							<p class="comment-num">
								<?php /*?><?php echo get_comments_number(); ?><?php */?>
								<?php comments_popup_link(); ?>
								<?php /*?><?php edit_post_link('EDIT', '&nbsp;&nbsp;|&nbsp;&nbsp;', ''); ?><?php */?>
							</p>
						</article>
						<?php endwhile; ?>
						<?php else : ?>
						<article>
							<h2>
							<?php _e('Not Found'); ?>
							</h2>
						</article>
					<?php endif; ?>
					<?php comments_template(); ?>
				<div class="page"><?php posts_nav_link(' &#183; ', 'before','after'); ?></div>
			</section>
		</section>
<?php get_footer(); ?>