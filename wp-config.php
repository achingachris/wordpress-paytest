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
define( 'DB_NAME', 'db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'RgonK2p?|7%@U;{FVWf:iC692Hyukp*umK6.$f6%qkqSXY@l05xRC$_$[S~_-MH#' );
define( 'SECURE_AUTH_KEY',  'ryq7t1]t@_xk>)|Q4^=Aw/M5@MP~1=m1 scdXym/G6yI`iHBf{7OG^^8`|Ti:N=`' );
define( 'LOGGED_IN_KEY',    'S]#<E1,e`MRhwa78&<wl(3[mzX^c/pOkOi;=Ejqf)ztRa4=~FQ=vqo&*~+Jv6x`,' );
define( 'NONCE_KEY',        '}MLdIuV*(WshkP`C=rwHsk12*s[X{ioOtkgFa <pY:TR_r&,97Knih4DEtlqLHG ' );
define( 'AUTH_SALT',        'U;kpQ+<V8);q>ZtozsAkD/x__U0 ESu^T p}*|Cd?rHe9/X|}#;2} lb(euD+_1~' );
define( 'SECURE_AUTH_SALT', ',@j]5,]{|w*r_:TlB:.0!pfXE+)$yAYAV>mjk=C[n[>ADe=hBK7NMx([ny}To@Jl' );
define( 'LOGGED_IN_SALT',   'nF=-r{%<kMS_c]3P@I )lsbD$)pO:IYM=etsnlDj58:l$c@pH/0~%p57diY<cir#' );
define( 'NONCE_SALT',       'QPul},^7S;Y&@+h(>%]ZFhm|_W2s3g&54V&5&_8tGNb%n@7Ix~iws6oZ>~V2WkRU' );

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
