<section class="main">
	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
			<section class="post-list">
				<article class="post">
					<a href="<?php the_permalink(); ?>" class="time" title="<?php the_time('Y年m月d日（D）H时i分s秒') ?>"><?php the_time('Y年m月d日') ?></a>
					<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?> By.澈言"><?php the_title(); ?></a><?php edit_post_link('Edit', '&nbsp;&nbsp;&#124&nbsp;', ''); ?></h2>
					<div class="con">
						<?php the_content('阅读全文'); ?>
					</div>
					<div class="info">
						<p class="c-666">
							Tags&nbsp;:&nbsp;<?php the_tags('','&nbsp;/&nbsp;',''); ?><br>Category&nbsp;:&nbsp;<?php the_category('&nbsp;/&nbsp;') ?>
						</p>
					</div>
				</article>
			</section>
			<?php endwhile; ?>
			<?php else : ?>
			<div>
				<h2>
				<?php _e('Not Found'); ?>
				</h2>
			</div>
		<?php endif; ?>
	<?php comments_template(); ?> 
	<div class="page"><?php posts_nav_link(' &#183; ', 'before','after'); ?></div>
</section>