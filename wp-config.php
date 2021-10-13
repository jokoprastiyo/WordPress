<?php
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
define( 'DB_NAME', 'd7pjmfbunu2o66' );

/** MySQL database username */
define( 'DB_USER', 'ylmowwiiarbtbg' );

/** MySQL database password */
define( 'DB_PASSWORD', '7a44367b5b2b3b9aae8646fb168246d1bb827b3ffc3b7866530f784e6eaa8dce' );

/** MySQL hostname */
define( 'DB_HOST', 'ec2-3-233-43-103.compute-1.amazonaws.com:5432' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          ' Va.p.<Ze`%fVUH;ix_4KP:0Vs v!=0<FDeb+mC|_}u!3Nz4gn<_@>qmgG}m>&MN' );
define( 'SECURE_AUTH_KEY',   '!%Y!RS1RhaSl(cXs|-![C8dV#>7>`Hktni@fo*6 m{I6i a_8@Rf-OrnCuD.a!y=' );
define( 'LOGGED_IN_KEY',     'll%>jOzpiDOAd`)>+;YGvtQlFX@hlM DRU5vT:fTrw<:a^CeEyN3@p.PsV24G%;-' );
define( 'NONCE_KEY',         'zo1Azv=79gYHwjYBDM#KsAf%Q@#NjwwVtbqINu4>OXUO_h,UnQD?l/#,dS9KT|ts' );
define( 'AUTH_SALT',         'Y;4[XQ+hLa;5yb4ChpZ!1M*2Bp?Cv<*G9XJ2nvW+[&]=N]fw3av9Kek;d<u|G;KI' );
define( 'SECURE_AUTH_SALT',  '9>@ ?::YINyw.9x0x4}@[7<?OB}]8w4BoC|WHLCt@1#Qs-G]GmB{(Q|m)i }s!0L' );
define( 'LOGGED_IN_SALT',    'eO3Ks .etI1y6R&_r(|)r-=BXxM+~4e>XPS#,r%!^v`lqUZGm;j|*D-Q8^<wy8My' );
define( 'NONCE_SALT',        '5)I};*pCVy,bY,UADXcH*?]sWsUOZE2GouHCP.SoKYFt4K.:Xy<.dwqFZL9IC2:Y' );
define( 'WP_CACHE_KEY_SALT', 'RZHU?E%hTowAZ&*%WOQ|`HnH1f3r1WhgFFnb/SrNd;ENWM<wUJ 3*vl<G+paG^vY' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

@ini_set( 'log_errors', 'Off' );
@ini_set( 'display_errors', 'On' );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true ); // 5.2 and later
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', true );
define( 'SCRIPT_DEBUG', true );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
