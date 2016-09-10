<?php

### Enable upload SVG in media
function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

### Disable emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

### Enable editor edit aparence > menus:
function edit_editor_menus()
{
	$role_object = get_role('editor');
	$role_object->add_cap('edit_theme_options');
}
add_action('admin_menu','edit_editor_menus');

### Disable upload
if(getenv('DEBUG') != true){
	remove_action('load-update-core.php','wp_update_plugins');
	add_filter('pre_site_transient_update_plugins','__return_null');
}