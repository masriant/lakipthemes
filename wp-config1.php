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
define( 'AUTH_KEY',         'KR{!R14o=OU&DWd**ipPei{|$q{0RJ[k`1`$f/y]B0R7:<A ZoK9!^tfk1>)^HZ)' );
define( 'SECURE_AUTH_KEY',  'KFEmh?.v48h~y:vAJDYT-w~RHdkaGO%9<.AyyS_.u)=86M`#&#;bT8=[iU@ j?}n' );
define( 'LOGGED_IN_KEY',    '{T/;!Cl@J=n{{a6{C;X,9bp}K3C,L*0-vEK)Tf6(-M[jIr6Ky?o~8Hg?!Q9kB3^/' );
define( 'NONCE_KEY',        ']5If{c7F2>IMZq[2 k$<u2a~A)X.-|`fz8(g@Kwc:CoP{ubLNfgiFvCW=VU1=8o*' );
define( 'AUTH_SALT',        '&,cpG3xLA8.W5vyp=6$0#FB9Lr*683oc~8%2ka.#V;akt]6;^diAIsw_v/7Gh #z' );
define( 'SECURE_AUTH_SALT', '`.6FFNz6t:gcJ*!T<Rr:_^*hY^Tl}>F`Z.`^*qXSQ;MNe(30~)1~~h}GW*Cb1Tt$' );
define( 'LOGGED_IN_SALT',   'SJ).z)AV8w+ZkUKgChrt.ue}z/|4D9}/E0+U9@-wnW(iO=zh(Yfv,HA(2!Fl8!2T' );
define( 'NONCE_SALT',       '(7jkaEH6fqC.~5WIM6P:7X*rptp.D7g&|{;R:;|!ZFB+@/H<%f/j:(Onw@r>l;iU' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lkp_';

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
