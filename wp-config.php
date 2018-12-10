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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         'hpI6}?>Ho+.mT..r!sxtwDMi(,re};0&c^F8!u&c9hPh{w&0oj `w3 *@vF</D:;');
define('SECURE_AUTH_KEY',  'pkgc*c(`_rM#=$yvUeL|j(3nD0?j+]-{cNNi4w0s]KIc9vTm7dpz.L32Urf13xt?');
define('LOGGED_IN_KEY',    'bJ&@S|U0P$e_I]7mQ>)1V6j.Uha O/j1xa>ZSP4?xh%]K*9gSe}=YuNA N;~%*I=');
define('NONCE_KEY',        ':>6Y!BTaH9CyX&U{32~UJO_))AnJ0>dZ$;Bn><E+l32QdM4U,;GW/&$q0I5&e?<:');
define('AUTH_SALT',        'r4^d%D:j^L_c,dz]WZ!l?{<@9+=Tccx{4^Hiv#u=WSGEt$.LClB>ay7N|<G$5kR9');
define('SECURE_AUTH_SALT', 'H!<&!*,dW]}!@q[3JdVIhx4qR]tiS#Fp5` A./e/r&Eff19LU=&] W~^(7dr>k3}');
define('LOGGED_IN_SALT',   'RR,_dQ[G.bw(3fMk81e5wC3rIj#Cj5o <i* r`CgJ0K`MNugNy|n/+[VSlrBrmo)');
define('NONCE_SALT',       '=OgIkCE+;}[AG5kcob;d6Zcz3Z{bYReYW l+1DiweI-N9;#c_m.Xkvh@h w#r90J');

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
// Enable WP_DEBUG mode
define('WP_DEBUG', true);

// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

// Enable display of errors and warnings
define('WP_DEBUG_DISPLAY', true);
@ini_set('display_errors',0);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
