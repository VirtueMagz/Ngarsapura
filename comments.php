<?php // Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}

?>

<!-- You can start editing here. -->
<div id="commentaries">
	
<?php if ($comments) : ?>

	<?php
	$numTrackBacks = 0;
	$numComments = 0;

	foreach ($comments as $comment) {
	if (get_comment_type() != "comment") { $numTrackBacks++; }
	else { $numComments++; }
	}
	?>

	<h3 class="sectitle"><?php comments_popup_link('0 comment', '1 comment', '% comments'); ?></h3>

	
<ol class="commentlist">
	<?php wp_list_comments(); ?>
	</ol>
	
	<?php if ($trackback == true) { ?>
	<div id="trackbacks">
		<h3 class="sectitle">trackbacks</h3>
		<div class="subtitle">There <?php if ($numTrackBacks == 0) echo "are no blogs";  else if ($numTrackBacks == 1)  echo "is 1 blog"; else echo "are ".$numTrackBacks." blogs";?> linking to this post</div>
		<ol class="trackbacks">
		<?php foreach ($comments as $comment) : ?>
		<?php $comment_type = get_comment_type(); ?>
		<?php if($comment_type != 'comment') { ?>
		<li><?php comment_author_link() ?></li>
		<?php } ?>
		<?php endforeach; ?>
		</ol>
		</div>
	<?php } ?>
	

	<?php else : // this is displayed if there are no comments so far ?>

	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
	<h3 class="sectitle">comments</h3>
	<div class="subtitle">Be the first one to comment.</div>
		
	 <?php else: // comments are closed ?>
		<!-- If comments are closed. -->
		
		<h3 class="sectitle">sorry</h3>
		<div class="subtitle">comments are closed</div>
	<?php endif; ?>

<?php endif; ?>



	<?php if ('open' == $post->comment_status) : ?>
	<div id="commentarea">
	<div id="respond">

<h3 style="padding:12px;"><?php comment_form_title( 'Leave Comment', 'Reply comment : %s' ); ?></h3>

<div class="cancel-comment-reply" style="padding-left:12px;">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="email"><small>Email <?php if ($req) echo "(required)"; ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small>Website</small></label></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->

<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
<?php comment_id_fields(); ?>
</p>
		<?php do_action('comment_form', $post->ID); ?>
	</form>
	
</div></div>

<?php endif; // If registration required and not logged in ?>
<?php endif; // if you delete this the sky will fall on your head ?>


</div>

<div class="navigation">
	<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
	<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
</div>
<div style="clear: both;"></div>
