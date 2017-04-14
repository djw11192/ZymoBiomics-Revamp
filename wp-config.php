<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/html/zymobiomics/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:3307');

/** zymobiomics.clcsuhoq1piy.us-east-1.rds.amazonaws.com

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '^&%N!$dH? H~FB@4x;&|_l. Y0m(c<Fm>hgFi~H,J}jT/5qP#?Bp6;>50n$M1_T)');
define('SECURE_AUTH_KEY',  'XEUa3+@+xxz)j1~@=v2R:H0ekK,`OtioFe6V/O{4`>YN`VeT?`nxOmy4PPjA}0/#');
define('LOGGED_IN_KEY',    'EIlF<ZaqpIHvGw=wV-fao;WN;1=X.S%bzD1KSyp!7W9yfZ,^zQb%3%gt82/^ivt!');
define('NONCE_KEY',        '?n)1d6:7FuWG63ux_u!:U$(7KeW&O 3Q=q .hO};<V{@Hk9j6y7;PAmq#D{~h:QQ');
define('AUTH_SALT',        '%VQtzcD#[@26G$O? buDwO8^.01]HHIt*;>7%Tb9}RN`fNI[M(J_SwQ7MtB-& At');
define('SECURE_AUTH_SALT', '^9;Am3_XI2,67N)USHNw_)>W$k/==#|Cgqx,$lkwyD27dVA3hTTs/Aox&j5Un6UW');
define('LOGGED_IN_SALT',   '8s-wVL?7BuG{aW2IHK!M{:KQ0U}I]FTz+sQKkl&OELakP|!lWry(pK)@z/P4<*rw');
define('NONCE_SALT',       'B15D}o3<-L^w2gPk}I+sg@k!V;?oTN+O}8(>!1~5Q7MOBH<jhkpU,35X(~>&:,z,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
define('WP_CACHE', true);
$currenthost = $_SERVER['HTTP_HOST'];
$mypos = strpos($currenthost, 'localhost');
if ($mypos === false) {
define('WP_HOME','http://zymobiomics.com');
define('WP_SITEURL','http://zymobiomics.com');
} else {
define('WP_HOME','http://localhost:81');
define('WP_SITEURL','http://localhost:81');
}

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


