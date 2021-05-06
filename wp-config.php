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
if(strstr($_SERVER['SERVER_NAME'],'digital-humanities-capstone-project.local')){
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
}
else{
	define( 'DB_NAME', 'theprjt1_digial-critical-edition-theme' );
	define( 'DB_USER', 'theprjt1_WP7MZ ' );
	define( 'DB_PASSWORD', 'bF8QLw7VB7trrtP' );
	define( 'DB_HOST', 'localhost' );
}



/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TLrirrgmd54G1K0RBEPV30iFFtQlEtnOeOA4AsYa9dlrMOrAB4Ow8QTwlPO2DvIXFIoH/zTLVHTMireNNBzziw==');
define('SECURE_AUTH_KEY',  'baxYEB+vTBKrJPGw0zTyRsrrwIuecwDKkVm0J8gbRkDKM9UjGPzp2eOfORCxEFGhdirvVajZb5OqKbKy2H6H0g==');
define('LOGGED_IN_KEY',    'iZ7Z3rzUNFwjaVDKaqMgNMehrIrjipAwYIAdjM9mRRMKz9Lt6QPNv8H/6qNporQiBmGad33EWjDSnqig0rtZPg==');
define('NONCE_KEY',        '7aWiuRWjaa8hBsm9SERC1u8rJfG/39dgzDGLTr/pW3zaFIIXEaqLr2MaEea6/XdUyy8YzcLWBAZ7Rne5Ha1vtQ==');
define('AUTH_SALT',        'rjPxpq2CR/N4VJjY4ZtNdzUJHT3injpGPVpNSLR/+FBhHS+4b9QyVEZ9q1AVp3uV2MlS4bDPw+IyUGi/T8H4hQ==');
define('SECURE_AUTH_SALT', 'mUrSIwBLV/98it9HH+5B6LY1fBwZgejI6pYnyXzj20cJU/RHig9ToGWZyFyL8nmK2jV044C0xahd5tCMEWwpxg==');
define('LOGGED_IN_SALT',   '/wYVqcH9SLaoBWxCjW9+KGRaIVUmt90OqP/pNjVn2e4hu0nn8UPipsU9EdOS0Chz4lrTMTHWvS+2GMGKD43gUw==');
define('NONCE_SALT',       'aL9fLPqa/QHq1A72mrdFC6sb3+0MIDwk0P4GYbNg3YfEW9YicabruPOLRy9Rp3q5ORxMgtgwNDWnVE690+p/sg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
