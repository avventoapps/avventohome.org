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
define( 'AUTH_KEY',         '5R&;yQ4Yb{&x]7.nMlib;YKmF~Z4o~9(3D++:!cWWj?{IbqcX^&*opOS`*l:9,QT' );
define( 'SECURE_AUTH_KEY',  '_y{$Oe6;.DheUIBx(HLj<ocGw^*C{oAzOW@W*I$W6!CC40 2AwymC@zz $]<)z12' );
define( 'LOGGED_IN_KEY',    'C:OR9/g$ORecy4_66hMM(U IlCRj/8;fofWl2.h6jj%:zc !WJRQb!NWOsIQQ?j[' );
define( 'NONCE_KEY',        '%Gaq|=f&;(oW8Jm%XBa.]}`oDp!ijKvtt62-hR,{3 @{.%4]n;-Q>/R[OD&.)=AB' );
define( 'AUTH_SALT',        'lHwvefg</B<um[MToxkEoNNY:V*rbPSBVDH$QZ59U6))c-t(6BBt#TL]*@XtJ VH' );
define( 'SECURE_AUTH_SALT', '=gd*bJOYA#_MK@/?FWATE]%N|S/bYaxcF5ra<]0q[_Fo?Lk;q[Mlw-=p3rK]gR/.' );
define( 'LOGGED_IN_SALT',   'N kRZW>h_}B5vMR>t4o{x==}n964[yf@io=yq2IO>%>YqMWFg/*}.>Gr0Sy?no} ' );
define( 'NONCE_SALT',       'R2B4EuJmCt>9(J=O4WnttJWgX=z$}IScoH@Jg~qxg;[S(#|>UTJg1>Jf,cp:XfjZ' );

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
