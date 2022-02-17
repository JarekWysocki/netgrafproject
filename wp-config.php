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
define( 'DB_NAME', 'adb351438_e9b5' );

/** MySQL database username */
define( 'DB_USER', 'udb_4bb29be513' );

/** MySQL database password */
define( 'DB_PASSWORD', 'b2c825b75505ff0820f478159d144c' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql01.piotrsom.beep.pl' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '315dae4c577ea2694b8bd942e4e1eeb92832b410');
define('SECURE_AUTH_KEY',  'c2cd267c3947f2d858a83f5e3f5de98b3c19a780');
define('LOGGED_IN_KEY',    'd9f793a395fbfd58a1313839f34b3be9a79a49f0');
define('NONCE_KEY',        'dc7add8295dbf271653d86644f41b494d0f13c2d');
define('AUTH_SALT',        '8f963ed613424b2421087199e3b6206a7e00eca5');
define('SECURE_AUTH_SALT', '138c75f950435f08c0242f27d159c6a55720c3e2');
define('LOGGED_IN_SALT',   '4577f6d39279e5287b63cb2f9482e4bd437dd1b1');
define('NONCE_SALT',       'f5a31f4b8b9b671fe77b7438f6a4363fe84ae5d6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

define('FTP_BASE', '/test.piotrsom.beep.pl/');
define('FTP_CONTENT_DIR', '/test.piotrsom.beep.pl/wp-content/');
define('FTP_PLUGIN_DIR', '/test.piotrsom.beep.pl/wp-content/plugins');
define('FTP_LANG_DIR', '/test.piotrsom.beep.pl/wp-content/languages');
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
