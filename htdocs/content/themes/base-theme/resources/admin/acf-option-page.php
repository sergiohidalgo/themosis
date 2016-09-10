<?php
	
	if( function_exists('acf_add_options_page') ) {
		$page = acf_add_options_page(array(
			'page_title' => 'Opciones de sitio',
			'menu_title' => 'Opciones de sitio',
			'menu_slug' => 'opciones-de-sitio',
			'capability' => 'edit_posts',
			'position' => 10,
			'redirect' => true,
			'icon_url' => 'dashicons-admin-customizer'
		));
		
		//Sub page
		acf_add_options_sub_page(array(
			'title' => 'Branding',
			'page_title' => 'Branding',
			'parent' => 'opciones-de-sitio',
			'capability' => 'manage_options'
		));
		
		acf_add_options_sub_page(array(
			'title' => 'Contacto',
			'page_title' => 'Contacto',
			'parent' => 'opciones-de-sitio',
			'capability' => 'manage_options'
		));
		
		acf_add_options_sub_page(array(
			'title' => 'Footer',
			'page_title' => 'Footer',
			'parent' => 'opciones-de-sitio',
			'capability' => 'manage_options'
		));
	}
