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
define('DB_NAME', 'blog_tq');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '<>^@V-p93UAF>Io`dFeZ!(L0aD&~OE)8>,ABPiDyF5_5u(nd8CG38wJ=aS{WNO]V');
define('SECURE_AUTH_KEY',  'eY5i99drV6=&EU[<B*cofUtjnS1yI&v2Z=%4}8Pf10z2qCb :141?F ;SBDsc*0Y');
define('LOGGED_IN_KEY',    '1wb.D&Sv11<oCSjAB$/R{w_r2J{;-Rc%O%+&L3nV5efWXp4h)p$&/kI4_1gd,/mQ');
define('NONCE_KEY',        'gUnaU|juG_w7nWtF0>YMb=0=i=Li^>n1dyq#Y}b[J9(z>ivanK%r:(}&k<>UVAXB');
define('AUTH_SALT',        'Rai^($R9{$#5)cv%<5;2$4<fMXcT^RHM;%F?Bd$rU& ` 3U%T_wcB@6h~1uy jr~');
define('SECURE_AUTH_SALT', ' _,Nv3)|`7Z)!cs]j:b2ESxR:l7V7hKU<<N~&& %ro,;iwB&,Mo~.luAk1=]3o=I');
define('LOGGED_IN_SALT',   'SjA8C:gYJ-n3Hl&N,/D 1hY9$aSiwu<7@B$mMsmr7@hLH 95QFqd}]KO4QG.th,D');
define('NONCE_SALT',       'L|no~5croQjv7(vAlwpJ_= GMt}ui5<+K$S+f/vAz*RqhD]fKGFT&;W?ZY|j4tSn');

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
require_once(ABSPATH . 'wp-settings.php');
