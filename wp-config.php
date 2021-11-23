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
define( 'AUTH_KEY',         'KN2[Q=O@9qYNl[^eC|`,k5<!T?^?ES}`,L^c|xnc>H5nA7XDFN:;C3skA|uY?Ikq' );
define( 'SECURE_AUTH_KEY',  '+d+UvR:O`X9)nK-_|=740MEGd;jB_H?#%Ze#R%@3f0|W^jaa!.:qPwVD.;<pFgP/' );
define( 'LOGGED_IN_KEY',    'ZKqx9fv[c|rKPOIU,FCzyB5qy2-h2H0q+OV{1E1+HZ;aTBjihY3 z/531.kGpZx]' );
define( 'NONCE_KEY',        '#?3 7f#?&8gALpD`z=vMvsPFv(2^=$,1CH%W(R`REWhXl(*@fi8>1s]m.lBR[JIq' );
define( 'AUTH_SALT',        '|UE*q-ulpkeF= qD`E3*:qvq:|i7Wb^C<U<ow0EVC|=zuVnl=)$U9-=KMGa9g+:I' );
define( 'SECURE_AUTH_SALT', 'Z=6(h=7wI-I2(~PZn*>Z%Q1dyUp8oGYh>)_w!Yv*|V1FX.-9O236{,Y::[Pp+.{Z' );
define( 'LOGGED_IN_SALT',   'jf*a]qxIgbty2ol&tcop![TY5](lP)po{n2[_P/$N9moPA^akB/mag=4vh!$9sto' );
define( 'NONCE_SALT',       '84:mvp?8W[y>>joiQKJHqEgT{e+~s`mUhhbHoKbG|v*)aUKFOD0wxlwrD?&?Lj3e' );

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
