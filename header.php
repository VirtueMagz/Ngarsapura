<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="keywords" content="virtuemagz,ngarsapura,wordpress designer,web designer" />
<meta name="description" content="virtuemagz,ngarsapura,wordpress designer,web designer" />
<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico"/> 
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!--[if IE]><link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css" /><![endif]-->
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_directory'); ?>/ie6.css" /><![endif]-->

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>
<body>

<div id="header">
	<div class="wrapper">
		<h1 id="logo"><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="virtuemagz" title="virtuemagz"></a></h1>
			<p class="description"><?php bloginfo('description'); ?></p>


	</div>
</div>

<div class="wrapper">

	<div id="navigation">
		<ul>
			<li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
			<?php wp_list_pages('depth=1&title_li='); ?>
			<li><a href="<?php bloginfo('rss2_url'); ?>">Subscribe</a></li>
		</ul>
	</div>