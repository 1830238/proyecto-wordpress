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
/** The name of the database for WordPress */
define( 'DB_NAME', 'proyecto-wordpress' );

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
define( 'AUTH_KEY',         'b`aV_Vx)TBIeV03$O{U!X7~)pH@r5(}/VOdohMKbuD;1cl,tvvpg9WP?X3k)R9n*' );
define( 'SECURE_AUTH_KEY',  'W38AUD)nrEMiF8c-2HT4Be%gPU(Fs/6LpSBN-G:ID?S,-<d>t~&l2RVUH=Q>jQKp' );
define( 'LOGGED_IN_KEY',    '.9p3jP.x-|iJ#P>PCa&E!P;Y[pI=yefQH%WEU8NFz)3I9`t;L}$&U~vE@uW%nW^m' );
define( 'NONCE_KEY',        '$-zFpSqgg/G2B,&]9aV0SRlpjSNKKL{&l,% gD[DrFcZ3POP4=gH a|@iN4M,#8:' );
define( 'AUTH_SALT',        'l&-5k-z>]tqktF;;0/qlE/<UT<ZX1JUu;9(bYOwH C&VFEHu2x@0<T%[[4TdS.T&' );
define( 'SECURE_AUTH_SALT', '^OXO!EV~q4*Q`m-jEMxKx?3waAdf(/xJ1q4GkayiI{|Q]]J&>tC|RR$kSCWDe-`B' );
define( 'LOGGED_IN_SALT',   'c+H-}z+( ;:KtF.m?AM?dLH]]7%ep!n;>h~(1{lB8)h?]$igN}SWp4vS_SZw8zE|' );
define( 'NONCE_SALT',       'N]fA)%Pu``k)bp@J{1B1?jZ>2[7;ZXdCS,J:;!!A21q?P>4]x8!<xI<6a);O+0)O' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
