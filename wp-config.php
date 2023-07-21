<?php
 // Added by Hummingbird

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'pixelcti_wp992' );

/** MySQL database username */
define( 'DB_USER', 'pixelcti_wp992' );

/** MySQL database password */
define( 'DB_PASSWORD', '(5U@p8.qeOu)S0[J' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'fzs50nmceotb9jvutwbvvvc35rh0kzb7idnukreipzocn4xznhalltqftsxedbqv' );
define( 'SECURE_AUTH_KEY',  'k50stzwsps9nzjfz493x7rr5usgsmwlxzytzgeobnmbc4hnauifzlfnxxeb4glc1' );
define( 'LOGGED_IN_KEY',    'nerpv3d419ock2os4x4nn0fipajghjflaqcmystv1lin1ldeocpgxyscnoxbdj4r' );
define( 'NONCE_KEY',        '2euozy0yda2ddxznwm5ftzy1pw9pwqkw6yqikw08mowsbidgdkiqwgbyrrbzqahc' );
define( 'AUTH_SALT',        'egum3omvbttkfoje7bwip5tvz4jhdorvfkx4k1162xv89idffbrndsf9bb3elkgw' );
define( 'SECURE_AUTH_SALT', 'ks16g2e2hyatvdmejmnxtsqwkqyuzqkv17t4mb0fzdkob6uojh0pev79xwzyfdun' );
define( 'LOGGED_IN_SALT',   'qsj58iazav2w28vvivcyyl5hazzqcqoypa9yz5vyzlecuhkji1vkrzqqd8uptu7l' );
define( 'NONCE_SALT',       'cel9ly8lr9viamsiaizml8jljmwfeglbgghdzw22flguf56aez0wtjvn0y38kjst' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpro_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define( 'MEDIA_TRASH', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define( 'WP_MEMORY_LIMIT', '512M' );

define('ALLOW_UNFILTERED_UPLOADS', true);
