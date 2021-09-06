<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "museo2" );

/** MySQL database username */
define( 'DB_USER', "root" );

/** MySQL database password */
define( 'DB_PASSWORD', "Car2244los*" );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '1vxsiovtv2c9rynecp3t9qo1rrxpri214tklf3mcfrfbi9mqbbzevxxmluv5igli' );
define( 'SECURE_AUTH_KEY',  'a9hliog1jeyowm7kplhs6mb9ajvplx7xiyov3qhlmblctsvwpdt96evawty9fbmj' );
define( 'LOGGED_IN_KEY',    'tftfxxkf7bawo7afwxqmwzpphp000jkmwgdhq7fpjuiprndp7jffgtve0egrswdr' );
define( 'NONCE_KEY',        'hxnlpoixzsviyn5gu9ktmbpvwkwsjvhuribwxkfopx2lgmuwefpss9mxadyamqso' );
define( 'AUTH_SALT',        '2f93kvygi10bzedwqigsovryekwlv3ytdwqfjqznxx72of2uvh1y2nfmz4h2akan' );
define( 'SECURE_AUTH_SALT', 'ombyglttv5a7nslzbmfycdwm40dlx3e2kbex1az4gw2hzgrnah9gz222y9iklljr' );
define( 'LOGGED_IN_SALT',   'casupsgozz9z4g5cg3tjaxldkpakeupuv1x1qgetulaqikudc90djtawzn3zzg64' );
define( 'NONCE_SALT',       'tclwkzsivfyyqo9aiodh5ys9ln6c9kondrus8urtbqw7rdjxvmjn1kp1fyt3mllt' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp2y_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
