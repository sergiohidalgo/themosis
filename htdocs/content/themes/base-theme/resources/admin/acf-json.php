<?php
	
# Saving explained
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point($path){
	$path = themosis_path('base') . 'acf-json';
	return $path;
}

# Loading Explained
add_filter('acf/settings/load_json', 'my_acf_json_load_point');

function my_acf_json_load_point($paths){
	// remove original path (optional)
	unset($paths[0]);
	$paths[] = themosis_path('base') . 'acf-json';
	return $paths;
}