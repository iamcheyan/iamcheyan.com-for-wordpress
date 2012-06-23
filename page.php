<?php get_header(); ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
	<section class="main otherPage">
		<?php the_content(); ?>
		<?php endwhile; ?>
		<?php else : ?>
		<div>
			<h2>
			<?php _e('Not Found'); ?>
			</h2>
		</div>
	</section>
<?php endif; ?>
<?php comments_template(); ?> 
<?php get_footer(); ?>