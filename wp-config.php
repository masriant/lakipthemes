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
define( 'DB_NAME', 'lakipthemes' );

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
define( 'AUTH_KEY',         'Q_fxowQGRsn]b)v({83Kz/a/p+Blq|j!-tR1,>c^[I6_P&$~[)H61RYIJ43y,%[e' );
define( 'SECURE_AUTH_KEY',  'oT6`KhVoi`s[2I)W`F2a<Ep0fRMKIDb/&:q#Dob_PtXs*4jBC<!<_29$38~74.q&' );
define( 'LOGGED_IN_KEY',    '~.@2J=9kcA+5[q.3rnl^u8[n<!362jg6)X?<7f1[tbzY|q<g!17tu>jA, V}oY4(' );
define( 'NONCE_KEY',        'K]J:;~a/eT;Z8R&5$se=.k>PKX*>bDuq|+I0j{Jx/{oL247(/=CY1EFg>##cGHBK' );
define( 'AUTH_SALT',        'pflL-BY lKfvSe/U*~+f#v{4m$i-ai@YIIkvz,BjgAK#sP+VF&3*Mz0_`;pTc5!_' );
define( 'SECURE_AUTH_SALT', 'KN&fa%/jl3/iEmK|PM^/E%K5>c GKo#X]>#[G7KG}@PhaY*i:1<:NlP2{`uIK{A4' );
define( 'LOGGED_IN_SALT',   'u$Aox-y;L-l-c}L_OMpG1x`bY.5MN+qkBgm|m6*ZACpc.WDe`MC$rtZpHL-s@7z|' );
define( 'NONCE_SALT',       '[Q!vSb{%T5J-;SmuHng+;CuvPZan[l7<I?H>]  kyA^Gp9`%EqjLJy~lV])3PeyB' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wb_';

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
