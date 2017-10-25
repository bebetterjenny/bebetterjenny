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
define('DB_NAME', 'bebetterjenny');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '%*FFg*:;Gx(: -o$3h:>8,j0><>QIq}WtdtbCr1Q=s<>W[nLu(TIQ>tf(Gq>~26@');
define('SECURE_AUTH_KEY',  'zV}R>v1wa,ucP*,+LIGct(?[7S],*SGbRH??oG2%F]qBuPt]QPu6p2+ebiEC ;1X');
define('LOGGED_IN_KEY',    'RX=R~%:ffPe[Q-HO2YpZ ;MrE:af6C.Xg%|SkT<YjP3)q`W|ryv&wg_=_Msc?yv7');
define('NONCE_KEY',        'z~:p~PXh |,iX7}YZ7PT_lah}<G~8LJ2+;G2ybhr,,c={K4BQvRA(Dg)@Cu^pv{V');
define('AUTH_SALT',        'J*xlc)mk^H>PKtoN@*.yqh3VX9e(L mn=LX:qe|0c-Bjtrib*XT_L6IMv1-.RmC9');
define('SECURE_AUTH_SALT', 'VFMJ8FOzX_k7zuoJk^d-|~Upoc;ImPx))?CfI;+hBaI>V8uQLfB,Zoi3F0f2e~,4');
define('LOGGED_IN_SALT',   'RJYOKR]Th=!V_x]ITU^`c*K^QFybp7j/3P^AjU`?lxuI0*,`qF8t@zwj-4H&<&Jq');
define('NONCE_SALT',       'I*_=_};E%z6Jt#uCQ<s8!galZ/v.`C_eZHIXkbH&5W;IWuWRFhpqr22.FVd!i.?O');

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
