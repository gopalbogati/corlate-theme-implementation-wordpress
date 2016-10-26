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
define('DB_NAME', 'gopal_corlate');

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
define('AUTH_KEY',         '~^C)[}hwNy01?kiK~HhHmj-zPQ& Q|^Le|9@hUm+!b_/P@tIGg9.<(WhO]s/|H)N');
define('SECURE_AUTH_KEY',  '!mRdO)Z2dK!fU27Tm?}+M}xf-TEr18[?$U+IX6iPIO.,hT_.`Y/5i|IerR/.;kmA');
define('LOGGED_IN_KEY',    '60v?[tIOq0W,=RsY i+A-AoPV:TKzD@$YVk~q+^}.e&m5b+WVdbCq I989QtKX]Y');
define('NONCE_KEY',        '+Lh;Q-ooo+!!/2^FP+/Twl`M}O&{s]ccR~!9J4rKO|7KOn;bx-Oh4;-RwhL9Is 3');
define('AUTH_SALT',        '5:1%],YLQ4DDF+`Jdq^6KYiY%991Y{~]llJgVqUw`fKbucH{eQ1HH9Z1w>31|5?n');
define('SECURE_AUTH_SALT', ',8B:VIjr&y35_J>81%E?l1cW$#hFJ6eb3$&}OBuYd,m[ED&e+g>OMlBWRojXH+[o');
define('LOGGED_IN_SALT',   'mro?C!Stj~;*/3.0<Um]G5(qBeYf+&bTCH_}rKlmk}+-@=dm6T-t@gmJQ t&rkx|');
define('NONCE_SALT',       'VLve_H|KH(J<tcQ-- r(eoKc|rB+}J!.,emn=_Z.6)J.GqoL@W1z0qnl]DmPP$#b');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cl_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
