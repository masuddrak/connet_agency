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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp6' );

/** Database username */
define( 'DB_USER', 'wp6' );

/** Database password */
define( 'DB_PASSWORD', 'hK7]Z4En3Fa(aM*a' );

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
define( 'AUTH_KEY',         'r *[F?sE8~d7}s&7VAHe4?Z6q/-o.UfH3ch;k.cw(t8%>NcS#!S[k<UN?++ Gga]' );
define( 'SECURE_AUTH_KEY',  'T]MmF[//:Mw,qxak^-nW4V<4Qe%~; /cC 3kOoN&jjM{&?}X+<(Y&~.jJ7jaGyP>' );
define( 'LOGGED_IN_KEY',    ' BCp:*),$zhzOz&_*0Xv.p]0RmwED!JHej3[gXqAXH$QT$r:@UBv;&I7}aC9fC|[' );
define( 'NONCE_KEY',        ',-A??2g9-mp!WzSkdnRnQA?spujwN&#6Jqkpc3*)rI,tI*dz,jz%*&1Exs_a:ogT' );
define( 'AUTH_SALT',        '$q}>!H3OP /zR>m7-qxprb17/NvJ}IlYGFB/OQaFW:OO0fI.E4{JNku*i|SPn0tr' );
define( 'SECURE_AUTH_SALT', '49Bgp,`NsZBf6GIu%U hB>_F1%AY!#0,z$^,]^S.!=3fT]4GU[.W6sT1^EgZhIbn' );
define( 'LOGGED_IN_SALT',   ':0NV?*+a=41`/1q-%XMODhxFk90y.kF6hq_Ve[Xjwg$iUS[}s:B8:{<Rcemt` )f' );
define( 'NONCE_SALT',       'OFc/x,=~pwWE`U=|w;pPoo~n+o@-(:1*DMG{v&jR}TU#>boE<-,Sw?{d#Jo^LZg!' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
