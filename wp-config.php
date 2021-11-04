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
define( 'DB_NAME', 'avventohome.org_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '`]Q-R0+DtDfEFLH~ =,<bAS8 de//i_yt+XZQG6F>dq:(i!<SR_6|U?JTen/V%m)' );
define( 'SECURE_AUTH_KEY',  'l]a}4n(/zsd-Fjjhny5s[9r34Nl`{sFP<T:qVa(D&{caK%F>|,%%EAF}TI6xU7E@' );
define( 'LOGGED_IN_KEY',    '5n]~h@+:9gg`O}z=Jcb[VR0W(Ge*m2/;9=EIRtx&P2 PzWCMe7pDM}^D!gwGzzJk' );
define( 'NONCE_KEY',        '*M+aYTSueI`yy;#<[.bhNz;3GcF7oO%Bl8L.X}W9?K1=a04hv8ltb=4W1;3>V,l)' );
define( 'AUTH_SALT',        'lw03>8/C|Tu)oj=Y1y=WD.eQ-+X0C$[YZf{v+N>,hga0&M?>Nzvm*aw-It};D#f&' );
define( 'SECURE_AUTH_SALT', ')+|^6T*e j}+x=/AfRwiIpX<D#$:vr*IhVZE{>:GG=iU*QDf7^]|LxMNFB1BoV;A' );
define( 'LOGGED_IN_SALT',   'po0NhuQ+TLRnv$Qbl&qIJ/uNCko!!S,+chZBME}l2%bn$.4u^Z(jbj&7;T$b|tb1' );
define( 'NONCE_SALT',       '4:e:Tyi#&uC*%(9ds! ?fP4`CA,$Z@d!u6ONc:&q6GkZ=@~XS/qr_h<[rq-F`q1$' );

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
