<?php

/*----------------------------------------------------*/
// Authentication unique keys and salts
/*----------------------------------------------------*/
/**
 * @link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service
 */

define('AUTH_KEY',         'rVQ_-ME~Xu|Vr]$De!g]eXL#Tm6rEG 2?/@~.gBR{UwC)|4sop+A,-[!Di>Kc-1n');
define('SECURE_AUTH_KEY',  'J&OCR>W|Oo|b QVwADraJ.+M/0g|TtV4yi.$nw2Nc|d5{aUfz%yS2Ml+2meF}YFJ');
define('LOGGED_IN_KEY',    'ySGvPGf_O`r8-.#.W-.N!J 1p=lPx%=/DSW/Srwjc$T#4|e8K.N.?WBR-6D`~W+u');
define('NONCE_KEY',        '{xnAupoKteusr;|1j23p3+xHR/q[<P#X:[,uXRv+Q@ez7#*AJ<-t(Fc#EpP/h>4_');
define('AUTH_SALT',        '.~ef^Nte{0nqap|w;5o?JmK$rZCI{&?OO_;etdv4*;U%I6%5]u=R`TgPMNX<pRcj');
define('SECURE_AUTH_SALT', 'PGX5Rq?B83mM)B,Q^]d$B0y_T54RBmp+|ONbIfe_2pA8D4zytG$VP6R)UWje(N`S');
define('LOGGED_IN_SALT',   'm3&pe2o6X~M1h Dx>i3A,H[z{wHLY{B{!|e+&IBLp.}#!4a_7WYv%._f46LE@KYA');
define('NONCE_SALT',       'A@I$*UT.p(>k%MrJ[Xu;FY[*F8zg%/R<3OkZfk|kk#sNePTwIOl}JU A-w;Jg -c');

// Database
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER') ? getenv('DB_USER') : 'root');
define('DB_PASSWORD', getenv('DB_PASSWORD') ? getenv('DB_PASSWORD') : '');
define('DB_HOST', getenv('DB_HOST') ? getenv('DB_HOST') : 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix = getenv('DB_PREFIX') ? getenv('DB_PREFIX') : 'wp_';

// WordPress URLs
define('WP_HOME', getenv('WP_HOME'));
define('WP_SITEURL', getenv('WP_SITEURL'));

// Encoding
define('THEMOSIS_CHARSET', 'UTF-8');

if(getenv('DEBUG') == 'true')
{
	// Development
	define('SAVEQUERIES', true);
	define('WP_DEBUG', true);
	define('WP_DEBUG_DISPLAY', true);
	define('SCRIPT_DEBUG', true);
	define('WP_DEBUG_LOG', true); //wp-content/debug.log

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
define('DISALLOW_FILE_EDIT', true);
define('WPLANG', 'es_ES');
define('WP_DEFAULT_THEME', 'base-theme');
define('COMMENTS_TEMPLATE', false);
define('WP_UNINSTALL_PLUGIN', false);
define('COMPRESS_CSS', true);
define('COMPRESS_SCRIPTS', true);
define('CONCATENATE_SCRIPTS', true);
define('ENFORCE_GZIP', true);
define('WP_MEMORY_LIMIT', '64M');