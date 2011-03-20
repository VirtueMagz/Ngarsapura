<?php get_header(); ?>

	<div id="mursid">
	

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


		<div class="post" id="post-<?php the_ID(); ?>">
			<h2 class="postTitle"><?php the_title(); ?></h2>
			<div class="postmeta">posted by <strong><?php the_time('j M Y') ?></strong> | <?php the_category(', ') ?></div>
			<div class="postbody">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
				<?php edit_post_link('Edit this entry.','<p>','</p>'); ?>
			</div>
		</div>




	<?php endwhile; else: ?>

		<p>Not found</p>

		<?php endif; ?>

	</div>
	<?php get_sidebar(); ?>

	<?php while (have_posts()) : the_post(); ?>
	<?php $wp_query->is_single = true; ?>
	<?php comments_template(); ?>
	<?php endwhile; ?>

</div>
<?php get_footer(); ?>