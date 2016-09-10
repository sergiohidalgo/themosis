<?php

	$version_front = '0.1';
	$google_maps_key = 'AIzaSyAtCl9KwsDj9abVk-ORpT5GRtAsePghcs0';

	Asset::add('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css', false, '4.6.3', true);
	Asset::add('maps', "//maps.googleapis.com/maps/api/js?key=$google_maps_key&.js", false, '1.0.7', true);
	Asset::add('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', false, '1.11.2', true);
	Asset::add('jquery-ui', '//ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js', false, '1.11.3', true);

	//Asset::add('app-css', 'app.min.css', false, $version_front, true);
	//Asset::add('app-js', 'app.min.js', false, $version_front, true);

	### Disable jQuery Migrate
	add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );
	function dequeue_jquery_migrate( &$scripts){
		if(!is_admin()){
			$scripts->remove( 'jquery');
			$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
		}
	}

	### Load all script in footer
	remove_action('wp_head', 'wp_print_scripts');
	remove_action('wp_head', 'wp_print_head_scripts', 9);
	remove_action('wp_head', 'wp_enqueue_scripts', 1);
	add_action('wp_footer', 'wp_print_scripts', 5);
	add_action('wp_footer', 'wp_enqueue_scripts', 5);
	add_action('wp_footer', 'wp_print_head_scripts', 5);