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
define('DB_NAME', 'wp-landing');

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

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'UpQCoIQqP)+{h!?1!kIQNyp#vL vot2FrI.Vw%Xcsjy=#=&=abl/BYpJwen%TozA');
define('SECURE_AUTH_KEY',  '^nH:I`1Fe&QCdE--,u=wYm8*UWQk=su*#xRKYUe(UVZHI5h/XALyA3dB%&Vt:~Qn');
define('LOGGED_IN_KEY',    'hy3[6dT@<*<TKw]dLcP*la.FPm;y^q5p^rJ}A+p|b/h%{J:,No:,QPjP5B<N:u^z');
define('NONCE_KEY',        'eMn{}P4)JVE-9=D!8Lg*2&tuhK6mnHzb/zTHBr59`:7Ea(inD]DsDR]g{JJ-ioKm');
define('AUTH_SALT',        'jBEW2n.a:&j6(*^a<PMpyEI;RhCN[S$D=7RM<BG*kRph@Krl?d|TQ3iwQIM?n>5[');
define('SECURE_AUTH_SALT', '(&Z.2oy<yx;.{dA`-W:A&04-S]pFASY,w;+c|uy !zEZfETOyP.f:ZE>@-_o$ +I');
define('LOGGED_IN_SALT',   '%FUZ`i@LuKsj{ %H;c~ 72`0RVrM7Cx]Z14{6+E)G5kHG3h4= .r^MgNoe32KI@|');
define('NONCE_SALT',       '#=w)N=:+AG/|an8et.lQX~wbKMFW]T1ae#/MgRuvj%q*z3c@->,Ti?65u^A_~f@<');

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
