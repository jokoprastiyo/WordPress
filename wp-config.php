<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

//Begin Really Simple SSL Load balancing fix
if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
) {
$_SERVER["HTTPS"] = "on";
}
//END Really Simple SSL
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'gnrs_16107619_blog');

/** MySQL database username */
define('DB_USER', 'gnrs_16107619');

/** MySQL database password */
define('DB_PASSWORD', 'jokoprastiyo79');

/** MySQL hostname */
define('DB_HOST', 'sql106.generasite.tk');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'l>-,ctyPRF&e,nn3XVb:;%Y>}lyh_Pd%h`,Yb-fdAs{g_`[^N9!uC(4.R`ZVNG1}');
define('SECURE_AUTH_KEY',  '|SqvKJ1m}[T(} )5hw3?3<q8PPZ(4]$;6E5<p]=xVH +tcDQ#<v68}r=(-[]l*?~');
define('LOGGED_IN_KEY',    'vq2Nk0o/sGXc%S;nGOQD-~^HOBe8[wDfuvLqAa5;10F0r<N>dsDw_8NQkX9;EIiP');
define('NONCE_KEY',        '%dEhmt>.u6;ckYHv6Vcec``:!Fa!TpvAVb<m`q@[5#W4v:gKTBcQZFu+0fH<#9.j');
define('AUTH_SALT',        'O2-S)hh8xIb;p0T|8|F{8v,&8:F6`<g{$o*<h:FD_ 2drj>Fu{d.09(z<)UoBm$4');
define('SECURE_AUTH_SALT', 'Uey@(i5Y)U Z&d_</4.:3Cpe/s=l+j+zn?Z9FL}lt21%X2[qS$D7<u|/0b_=TpBM');
define('LOGGED_IN_SALT',   ']y|4`6lM[mOBHpx=CYtq@-aJ*@:Fjtl$4$5x1NNkN$=K#eLlf,k^Uo(4DJPT@_eB');
define('NONCE_SALT',       'Fj2K=|ffuE%v(s24m>!mbVIgSW!6SMK2.!g%[$:b3?$&EIFtoI(T^l/unM0`5z>T');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'blog_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

// @ini_set( 'log_errors', 'Off' );
// @ini_set( 'display_errors', 'On' );
// define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true ); // 5.2
// define( 'WP_DEBUG_LOG', false );
// define( 'WP_DEBUG_DISPLAY', true ); 


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
