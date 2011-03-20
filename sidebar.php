<div id="sidebar">
<img src="<?php bloginfo('template_url'); ?>/images/about.png" title="virtuemagz" alt="virtuemagz" style="margin:0 0 10px 0;">
<p style=";font:normal 12px verdana;line-height:20px;margin-top:10px;margin-bottom:10px;" align="left">	
	<img style="float:left;margin-right:10px;padding:5px;" src="<?php bloginfo('template_url'); ?>/images/ngarsapura.png" alt="virtuemagz" title="virtuemagz" border="1"/><b>Ngarsapura 1.0</b> is a simple  wordpress themes. This theme brought to you by <a href="http://virtuemagz.com">virtueMagz</a>. it's Free! Follow us <b>@virtuemagz</b>. <a href="http://virtuemagz.web.id/tentang-virtuemagz" rel="bookmark" alt="virtuemagz">read more &raquo;</a></p>
<hr>
	</div>
	
	<div id="sidebar">
		
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>	
		<div class="module" id="categories">
			<h3 class="sectitle">Category</h3>
			<div class="subtitle">search articles by categories</div>
			<ul>
				<?php wp_list_categories('show_count=1&title_li='); ?>
			</ul>

		</div>
		
	<?php endif; ?>	
	<a href="http://virtuemagz.com" alt="virtuemagz"><img src="<?php bloginfo('template_url'); ?>/images/banner.png"></a>
	</div>