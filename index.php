<?php get_header(); ?>
	<div id="mursid">
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
		<div class="post" id="latest-post">
		<?php $image = get_post_meta($post->ID, 'post-image', true); ?>
			<?php if ($image != null) { ?>
			<div class="post-image">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php echo $image; ?>" alt="post image" title="<?php the_title_attribute(); ?>"/></a>
			</div>
			<?php } ?>
			<h2 class="postTitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<div class="postmeta">posted by <strong><?php the_time('j M Y') ?></strong> | <?php comments_popup_link('0 comment', '1 comment', '% comments'); ?></div>
			<div class="postbody">
				<?php the_content(''); ?>
			</div><br />
			<div class="postaction">
				<div class="alignleft"><a href="<?php the_permalink() ?>">read more &raquo;</a></div>
			</div>	
		</div>
		<?php endwhile; else : endif; ?>
	</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>