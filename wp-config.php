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
define( 'DB_NAME', 'justicefigueroa_db' );

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
define( 'AUTH_KEY',         ':7W(cyc0^[BR;M$d)PPcwy^kT7#$;C30A^mQ?)b.h[)nU(~(*[{_{ud,!x<u:Sn,' );
define( 'SECURE_AUTH_KEY',  ']y{@KuB<8k8%iq(0^c.mp9uQTuz(.&$P:G+@%0`mk<E3vXmLF96m($/c>9VJrXIo' );
define( 'LOGGED_IN_KEY',    '38&Ey/>$<W&5613VpUi-X>D(0ki$UpPKX3rL$rFs4:e2}~ok`6)IM2pDvKu08&k<' );
define( 'NONCE_KEY',        'b+b]$m4|;;05nux&&V-iCG$ugr&{Iuh;s$e}}xFYq;Eiv#PD^g` ywS]=-~k};8h' );
define( 'AUTH_SALT',        'F$o(-3|K[RMUnWMzCNDRXuTKio,HpTW)]toEJ9AG*2=APi;R0P+Vfa$Gh2l`8Ir ' );
define( 'SECURE_AUTH_SALT', '#2!,iH @k+%y!S KwaR4J_xJy:mmKQtr3xz*JG/J DLh3gRlq!0p!`K/YPfr#o6=' );
define( 'LOGGED_IN_SALT',   'T2aO#8j$nC5QXttV[/wbIY?drM<#`^M?%{8 @KlI}jF9@`kI-F#g:~Oz,~d{j[5H' );
define( 'NONCE_SALT',       'cJ(Lm11I]=PV2*FQe;Vtt#s/Q&>b^$E$:LRbv1^/8rN^r};9;&/>ces4kY2}_]x*' );

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
