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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pixelcti_wp905' );

/** Database username */
define( 'DB_USER', 'pixelcti_wp905' );

/** Database password */
define( 'DB_PASSWORD', 'o3-pj2Sk!2' );

/** Database hostname */
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
define( 'AUTH_KEY',         'rr0cfjqpqvwfs4uubxqeboc3cfuhdojravt5xssgt9cmpkwjs4os3o0tgvksw09b' );
define( 'SECURE_AUTH_KEY',  'suqkzeukp5483jxfvy8cz8x78ixtqagzo11tbevixfcd10nl16hkdnu035hblcwf' );
define( 'LOGGED_IN_KEY',    'taxs8pi6iqxkikr9knvvejd8flgjguyu4ktrmcmhlz0149y9bgbkv7rhywufqvhz' );
define( 'NONCE_KEY',        'hiboi2tco72c5cuawwupxhre6mwbfbugjprxmfg7txayief2nsu0uyuogloyyrn8' );
define( 'AUTH_SALT',        '1kqcealagon8pqdwo22bk947i51jynv5m9qolmncanpxqzboafpgrr4sjje8w4xi' );
define( 'SECURE_AUTH_SALT', 'znhg8lpse0kkw9uwqvylke20uyudbnx5ltshiqvsf5nzdx4a54hoyy5yyttyfwv9' );
define( 'LOGGED_IN_SALT',   'rgrtrshhno1edpbw4w2eepjn6kx5d9h8johkkuhxt71hpi8zscdebbisxxyp3whs' );
define( 'NONCE_SALT',       '3nke8rjtg5q8ezpoxvlxmso57wq1fqqoorinoqmilzc8adyzove92mvqrq14crda' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpw7_';

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
