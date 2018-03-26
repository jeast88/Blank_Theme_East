<?php

//Registers widget areas

function blank_widget_init(){
	register_sidebar(array(
		'name' => ('Footer widget'),
		'id' => 'footer-widget',
		'description' => 'This is for the footer',
		'before-widget' => '<div class="footer-widget">',
		'after-widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'	

));

}

add_action('widgets_init', 'blank_widget_init');

?>
