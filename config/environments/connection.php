<?php

/*----------------------------------------------------*/
// Authentication unique keys and salts
/*----------------------------------------------------*/
/**
 * @link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

// Database
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASSWORD', getenv('DB_PASSWORD'));
define('DB_HOST', getenv('DB_HOST') ? getenv('DB_HOST') : 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix = getenv('DB_PREFIX') ? getenv('DB_PREFIX') : 'wp_';

// WordPress URLs
define('WP_HOME', getenv('WP_HOME'));
define('WP_SITEURL', getenv('WP_SITEURL'));

// Encoding
define('THEMOSIS_CHARSET', 'UTF-8');

if(getenv('DEBUG') == true)
{
	// Development
	define('SAVEQUERIES', true);
	define('WP_DEBUG', true);
	define('WP_DEBUG_DISPLAY', true);
	define('SCRIPT_DEBUG', true);

	// Themosis framework
	define('THEMOSIS_ERROR_DISPLAY', true);
	define('THEMOSIS_ERROR_SHUTDOWN', true);
	define('THEMOSIS_ERROR_REPORT', -1);
}
else
{
	// Development
	define('SAVEQUERIES', false);
	define('WP_DEBUG_DISPLAY', false);
	define('SCRIPT_DEBUG', false);

	// Themosis framework
	define('THEMOSIS_ERROR_DISPLAY', false);
	define('THEMOSIS_ERROR_SHUTDOWN', false);
	define('THEMOSIS_ERROR_REPORT', 0);
}

/*----------------------------------------------------*/
// Custom settings
/*----------------------------------------------------*/
define('WP_AUTO_UPDATE_CORE', false);
define('DISALLOW_FILE_EDIT', true);