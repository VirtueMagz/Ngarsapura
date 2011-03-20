<?php get_header(); ?>

	<div id="content">

		<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<h3 class="sectitle">the <?php single_cat_title(); ?> category</h3>
		<div class="subtitle">List of posts filed under this category</div>
 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<h3 class="sectitle">the <?php single_tag_title(); ?> tag</h3>
		<div class="subtitle">List of posts under this tag</div>
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h3 class="sectitle"><?php the_time('F jS, Y'); ?> archives</h3>
		<div class="subtitle">List of posts published on this day</div>
 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h3 class="sectitle"><?php the_time('F, Y'); ?> archives</h3>
		<div class="subtitle">List of posts published on this month</div>
 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h3 class="sectitle"><?php the_time('Y'); ?> archives</h3>
		<div class="subtitle">All the posts published on this year</div>
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h3 class="sectitle">author archive</h3>
		<div class="subtitle">posts by this author</div>
 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h3 class="sectitle">blog archives</h3>
		<div class="subtitle">browse through all the posts</div>
 	  <?php } ?>


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

		<h2 class="center">Not Found</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
