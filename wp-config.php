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

define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cut2code' );

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
define( 'AUTH_KEY',         'CM`F[2c i5u3mOeSPLn<Cuh`KV]bANd7&&fU2TWZ3r($pJ(E8J-A6x|A(^D^+>y!' );
define( 'SECURE_AUTH_KEY',  '-.ab|X4A5gI7M1e/>TV6NI.6-_>VhTb4v.?CwmsF}uW9c@?ubY<*I<sH8OldDfLd' );
define( 'LOGGED_IN_KEY',    ')X`_53.gDE<S`9asCp8Y,,Ikvt1xodyMsx:{G`rQ|Q2B95I|p<iVJ.(:8fhf*Mu*' );
define( 'NONCE_KEY',        '8NMOIYR1Qx&_NxdXyTp:wlbSHjAAE?KVG%D4(*p}bLcuRK=v`:&!Qr#=$5>D|Hm{' );
define( 'AUTH_SALT',        'jLHWJud:I(&nFNy73!?a.i=-l:JjsofRi{|EbcOdp __jXmY,7y! !VZUS{>!x0u' );
define( 'SECURE_AUTH_SALT', 'Y;]5r/q&AryJkO#H`yw`PvNP0u9}RO2%L%/~>S/{g3VuK<Gp4o9I#E-)!iVt.>Ww' );
define( 'LOGGED_IN_SALT',   'G{FTx|}Li,1$2>T}sm/1o=kd40%BCxsbijd|SvpLM@=x 1z3/`s@&EKN&B_CLkz+' );
define( 'NONCE_SALT',       'N#=EYF>`-#ZKE:DY}:J#P*?]#troxaWy%BT$@wgw92m>s)X,(vwV*.6g*m{fT4n%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '4g3ncy_';

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
