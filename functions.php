<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<div class="module  %2$s" id="%1$s"">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="sectitle">',
        'after_title' => '</h2>',
    ));
?>
