<?php

	/**
	 * ACF has this fancy option to show ACF fields based on pages templates.
	 * One problem: Themosis templates are not registered as "default" WordPress templates.
	 * This file hooks into the acf filters and allows ACF to use the Themosis templates.
	 */
	
	// add themosis templates
	add_filter('acf/location/rule_values/page_template', 'add_themosis_templates_to_acf_rules');
	function add_themosis_templates_to_acf_rules($choices)
	{
		$key = 'theme';
		$configFile = 'templates.config.php';
		$configTemplates = include(themosis_path($key) . 'config' . DS . $configFile );
		$templates = array();
		foreach ($configTemplates as $configTemplate) {
			$prettyTemplateName = str_replace(array('-', '_'), ' ', ucfirst(trim($configTemplate)));
			$templates[$configTemplate] = $prettyTemplateName;
		}
		return array_merge(array('none' => __('- None -')), $templates);
	}

	// get themosis templates
	add_filter('acf/location/rule_match/page_template', 'get_themosis_templates_from_acf_rules', 11, 3);
	function get_themosis_templates_from_acf_rules($match, $rule, $options)
	{
		// vars
		$page_template = $options['page_template'];
		// get page template
		if (!$page_template && $options['post_id']) {
			$page_template = get_post_meta($options['post_id'], '_themosisPageTemplate', true);
		}
		// compare
		if ($rule['operator'] == "==") {
			$match = ($page_template === $rule['value']);
		} elseif ($rule['operator'] == "!=") {
			$match = ($page_template !== $rule['value']);
		}
		// return
		return $match;
	}