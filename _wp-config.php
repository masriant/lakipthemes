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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'UB83!I|#B9N7#)@U_ky*N[Bhx`2*`1g61j{u5/A]S6bb&2G9.;2~ZI~ jxwYAD>b' );
define( 'SECURE_AUTH_KEY',  '>g2+fuLAb~z,T,4ol*tK=E?83gMwG5v4} WFQklle@PsuBOpouC%hM/`[^d_N`J`' );
define( 'LOGGED_IN_KEY',    '-i*|`qy(=5zRDs^le0^W>2t7Kl1#ZzZbwB~SxEQQ93Rrw<k5Q6d!BWI3mPv#s l=' );
define( 'NONCE_KEY',        'C2DVSMQZ[5_T^GmCzK$qUa:FopS]@OQ49 a6tualX9ABiuaA<lKuj|m2ei!w+4`@' );
define( 'AUTH_SALT',        'g<.n:HCkw-$?<3j0C)9;.0^yGEaS]fK/seq@ioX~=/Z!_|W LUr#yZdu@w29#XW4' );
define( 'SECURE_AUTH_SALT', '$MeT_b {jpz-33seK&n-Sve)za}AL.6yIm1Oy;2`sU@Q,O6!;~Z(%&UmCp!q5`zC' );
define( 'LOGGED_IN_SALT',   '`,1t-^e=%nr)y;]OU@6,;lX/ot%tl|G$DHZ_>.XhTv{am~IHB|UC2Aps+u`$ON5I' );
define( 'NONCE_SALT',       'uH)WzQ>hSO]A^B41ezK$6cW#)TLzE=/Xu4V#nZ[XZ9rV8lgf.ux*;Jdfi%$U$QAi' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
