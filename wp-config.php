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
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '(V ().BZpuPfKH?|.f$I8;BP}xcY.# Zw?`-^6{HV?=K*.92MeSc*sa%o-%X`2(,' );
define( 'SECURE_AUTH_KEY',  '.<]+VvN@IBIu_W=v8o*EfyO@G@+8[f6=dY^S2F3U[%3+~z{Uh*4#{od<AoN0R]8e' );
define( 'LOGGED_IN_KEY',    'LgXkpp}13+*-ZPGevxv??j~sFnYQ?VqWs&UuY<j<W.(tdfC4o/)xXJQ$uV-C&NAY' );
define( 'NONCE_KEY',        '{YH<PyKQnJ`{-MU_D.kT0]ibprR^0c){#gxs )?hJE.&x$HYiyNmUs.)F$3`<e!B' );
define( 'AUTH_SALT',        'ITdoZ=`&,m(Z,};Ut0k.+gq>38|E&C~M@/@pYLig>)8-/i>,P$vw$Fwnl.~#8zDV' );
define( 'SECURE_AUTH_SALT', '%I]RK#GLGXcd-lf!mhCSFTyr2*kI]L=@~0|/|Y==@pa9[YVe6~w+p3I5Fw{xZgZ6' );
define( 'LOGGED_IN_SALT',   'c8J.0tcY5tr#h `|o{2Mw(/[!?(4IGs(Cm@+83-z0~jRg>P-Wqazm{4%Itr}By*(' );
define( 'NONCE_SALT',       '4%M<K+gpcT9*xI`]sb-qR^QIS=H1Er}h?8.(x(vm/^w8@B;S=TEU8Jc+fEOI9xRr' );

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
