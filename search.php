<?php get_header(); ?>
	
	<div id="content">
	<?php if (have_posts()) : ?>

		<h3 class="sectitle">search results</h3>
			<div class="subtitle">what you might have been looking for is just here</div>

		<?php while (have_posts()) : the_post(); ?>

			<div class="bits"  id="post-<?php the_ID(); ?>">
				<?php $thumb = get_post_meta($post->ID, 'post-thumb', true); ?>
				
				<?php if ($thumb != null) { ?>	
				<div class="post-thumb">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php echo $thumb; ?>" alt="post image" title="<?php the_title_attribute(); ?>"/></a>
				</div>
				<?php } ?>
				
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<div class="postmeta">Posted on <strong><?php the_time('F j, Y') ?></strong> under <?php the_category(', ') ?></div>
				<div class="excerpt">
					<?php the_excerpt(); ?>
				</div>
				<div class="postaction">
					<div class="alignleft"><a href="<?php the_permalink() ?>">Continue Reading</a></div>
					<div class="alignright comment-num"><?php comments_popup_link('0', '1', '%'); ?></div>
				</div>	
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h3 class="sectitle">sorry</h3>
			<div class="subtitle">We can't find what you are looking for. Try another search term.</div>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>