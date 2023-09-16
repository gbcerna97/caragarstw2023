<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dosctcaragaregionalrstw2023' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4NWXftkgWMpTGlVseMezDwi3PEqQzaCVt4taw66LbLl2aaunqWZUKV1Pju1OPdjU' );
define( 'SECURE_AUTH_KEY',  'qdhfcPuZN19Q3Mk8HmxCmUNNHmUnBk79jBOVMMghFi5ZKqlILnDlQxNK9gMebYLs' );
define( 'LOGGED_IN_KEY',    'Bdulv1ya2j6grTP2TvfiU1BPUDFYpKWcSLt7kTsVe8mObzZ0tT08DzuTkhEbnxfk' );
define( 'NONCE_KEY',        '5zUASAgNkvqWtYsAihvDp42LWnuJi35mJeUU9k4WFhZdGEs1CGZMhFix2vrFOktE' );
define( 'AUTH_SALT',        'KKJj4HRSZjwLTBKxRUEyVczH06NwmJSCt7MjHmZN7XgB863GkqnLjiWFrLAH4bqn' );
define( 'SECURE_AUTH_SALT', 'Vb2bBaWlwBU9DIKsD3DoMlxk2ZzBFFmtPJUYBp1AAlS0dKEi3L9mVJAtNWDnhBx0' );
define( 'LOGGED_IN_SALT',   'gM1o0RgQjbfueVWvFco6nRseJzgyfCaXfN5dt01Z6w6xnfDvrk9j7YG3miMZWEA4' );
define( 'NONCE_SALT',       'u4Dj7YbwT02rKgb4TKWinS1IMBPc1Lkx1VopL9dTzgdETG8e6wxnDL3cXUrrRN7s' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
