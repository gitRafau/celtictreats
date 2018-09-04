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
define('DB_NAME', 'celticpet');

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
define('AUTH_KEY',         '@2ViupHdJNUn_aI>09b#!C%`)7au.oE9ShnZ<,Ql2RMq>;~ /zvG9>@CHV/?ki,c');
define('SECURE_AUTH_KEY',  '_{cruvk@xj:4l{LG/DnYX%{fyS4]Pqm ^0rVOo2o^ptT(_YunXf~R3hzO>G0(X&.');
define('LOGGED_IN_KEY',    '&mKr][1#dK7uavB RP}6=-jJBY$MzwA!y/E<~hGXyI4p@a_M(VCp~Lw K5C2FC7k');
define('NONCE_KEY',        'u21#y&6^-y.y!XV}da z5?j%W[lXyZZ*+%Ja}tEEexKR|0I[4,?fxUO`(KZ`gAT ');
define('AUTH_SALT',        '<;`XSjB.ul(E>HWVCVTd`Fnnsnmm fP]WY!~v2|%{9cz]m5Sh|>@0lASR.l`{D@B');
define('SECURE_AUTH_SALT', 'mZ/:^Xm`*(B/i4v)3F$Rf!,>yH;2BnPr,8%AyQ22Zu7Ic>k[5Sn7js.BsW[EV%X<');
define('LOGGED_IN_SALT',   'E0FAB5[^:)(Eji:R?/U}5VwSWmqL>7Oj2/6Y4xgc*y/.`%-669k[oD]U*&)Uk`@U');
define('NONCE_SALT',       '~NBm%g2j*4#-1jod=>((t~t[e4Ou29y]2jxsEb`dXs[-:C^g{{Hx!4oxfCBYvp2;');

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
