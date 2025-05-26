<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('WORDPRESS_DB_NAME') ?: 'wp1' );

/** Database username */
define( 'DB_USER', getenv('WORDPRESS_DB_USER') ?: 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: 'wp_pass' );

/** Database hostname */
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') ?: '192.168.1.100:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these usingggg
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'XUVWZw?8L6RV6yh[g[Gym3(Ye|7t+Loor[<d.0x&@.e;k ]^.AbAWs`:HOjRqcjT' );
define( 'SECURE_AUTH_KEY',  'fM+i4+K-t<K/}p[[7eP1x`N]@H{UE=~->V>PsfoDbRepo8X0,sc9{a+*#-7#XWo`' );
define( 'LOGGED_IN_KEY',    '{Qq$dd<,lOcQNXbRnDt|K1Rw8FF``ow>3weRc50{{g0~b>2)s3iK5C1r_+zC=)p{' );
define( 'NONCE_KEY',        '0t7=<E92Vbf{s{%ZwcAbqiXNi;W`@?>^c!TjS@82k7=JRRO`oUJ^QFazyJ)[XU;H' );
define( 'AUTH_SALT',        'NRM@A&4GQKW*YvgT_xC@v6vur[1J 5mX;ZMx(~M=ogom^pvQVs?4v-7|p_aSX-Qv' );
define( 'SECURE_AUTH_SALT', '$0a8Vsjje6=vd^*loZi4+Hg&XU>*G[Y>T&,$9IRWU[&8%q{VB^9([9_C>8cgJ^9R' );
define( 'LOGGED_IN_SALT',   '^6S|nIGh@|-ai05ImT_<dP@5=k0.szn! vDuK;Xx}e-iAsSCt#>6y$aUHGR*<p;1' );
define( 'NONCE_SALT',       'wGQF|?]?*]MI{&?*4qhI;dg]^7#b2ki!*|DlI:_35f*WQNz/`5I+v.>PJFE@1#hM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
