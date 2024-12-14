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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'D:\wamp\www\denning\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'denning_anup');

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
define('AUTH_KEY',         ')WL4.VF}8oGaq:[_Q,c<`U#-jzQf*@57E]r0-E-(OECS`e}/nFHg&1/yZs(GoK8d');
define('SECURE_AUTH_KEY',  'K:_ V?XI_-~.+M$IL^,(UJ6AvPZ2D 4U`}.:Ry@l3ju8=i@A@Rq/FKY^,6}?`n]#');
define('LOGGED_IN_KEY',    'ZBJxqeiF!3~=a]c=}J1iJ,/Cd3V]B2fo#(QPpHX?>g]itl=7MW=z56s@M1>n2U$L');
define('NONCE_KEY',        'MoN[+Bzj-{%a6~Wr<@3vH:j7p#F(KUzl;(5B&p$]N8^DIzJ7_cIA/%I)F29]|;,R');
define('AUTH_SALT',        'H>Irk#<=^_I<iu a|/{BzFW&p&{~^>dT|f]qbS`wnr222#Y!g9G`:B;4.!_<1q%4');
define('SECURE_AUTH_SALT', '{7:>fqHlULJ )Jvv=c=KXc:!6V}cT;}U7C|7o83K7na5h)NFg2H;N]Q6m?rok-S&');
define('LOGGED_IN_SALT',   '2= nG8{l#2Qg9U|{*hARC(qvN0v6m8?+o}{P$~q7P?ombGuSV:~$:TCL0):WU>}t');
define('NONCE_SALT',       '-Y;D[bd*_pgMMGf4q;8m57g.Ci]X68b@%nbs2Lq?cVxi%hBdS~p]/[UBQ0|v*Cg&');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'awp_';

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
