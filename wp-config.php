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
define('DB_NAME', 'jpj_distribution');

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
define('AUTH_KEY',         'dyZexyIpEEBayewkq8E$~s&jOECiI^DaZM!D!;4*~YSP|V(_n4*UR6K:h<]gNbnF');
define('SECURE_AUTH_KEY',  'zx1M:I}$3VB}W$bgB]~dqY>zGh1{k]mC<sszi:t*<<zg[kb&[kvj,?=A_d+l!6)A');
define('LOGGED_IN_KEY',    '*::03!;31C,qyg:iE,Ez!WW4u[OHvo]-wd(~UR!8yVMcXL|8w~w*g==0bd0F]?]`');
define('NONCE_KEY',        '3@qZ[|=a:k7MTfgAKPHG>mz%:FskG%j0Hw768tA>/W==Ap2h/8ZX&qd`]~,+-gi[');
define('AUTH_SALT',        '{P~G _vQ;n,qtSp7c.#%+Gt~[.2CDBz|NA=wX/TABb69CZt::oH[<Iy+G|*](-CD');
define('SECURE_AUTH_SALT', '+B.GR8`mhopv96QJ-s@~b%SV+XU9$!1|TK+69U<VD.us#){j#)LPk4qVs</u<|;r');
define('LOGGED_IN_SALT',   'd:pOsT;?!8Nbn9Ui(*UDysg|H6zSu<.B3rc,n3,Yc,/ua9Sm#T66up[nA)hls/V:');
define('NONCE_SALT',       'fx0O6;zQ&op>r|V$$(K(!yEBB&1~cqNrXjt`M;Iv_~Npb{kM+ugBw]RiOb/x9XEs');

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
