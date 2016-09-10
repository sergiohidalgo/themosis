<?php
/*
Plugin Name: Mu-Plugins Loader
Description: Simple loader in order to run the Themosis framework core files.
Author: Julien Lambé
Version: 1.0
Author URI: http://framework.themosis.com/
*/
require WPMU_PLUGIN_DIR.'/themosis-framework/themosis.php';
require WPMU_PLUGIN_DIR.'/acf-templates-themosis/index.php';
require WPMU_PLUGIN_DIR.'/bfi-thumb/bfi-thumb-load.php';
require WPMU_PLUGIN_DIR.'/helpers/load.php';