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
define( 'AUTH_KEY',         ';B(zjTT99$Sn`{9D*q~O](ld*t_.x~ob*_@*~ag>5#_)/^VW+dj-Spm8-th23nR*' );
define( 'SECURE_AUTH_KEY',  '&Sbl,Lbc>)Jjr1=h3fdIk#b *E}Pu3Wk>P[q<AjRSl2^Hxe01y9l9<(w>/ebb|cf' );
define( 'LOGGED_IN_KEY',    'h>t4uo->:r>E+~Bx{k6idzcLsV!mE9L |8(/b6T+iO;Sb{/ymxu-T&qsx+ i0TaO' );
define( 'NONCE_KEY',        ')@@~a|NCQXi.SNDBUBd:8lbfTmZr<3%qEpxiM>reKj8 Frgiq<9aA<R89OsRVn|.' );
define( 'AUTH_SALT',        'lv+d5I%BQt)-p*h=.^$YiOeh%axKhHfuSy:FzY/69ykBf6gUtjOLpf3-Iuo_9xv~' );
define( 'SECURE_AUTH_SALT', 'tt?V!h,-&N#;XmPXAxpL0@(p itbK~ule6LGT g( *:my =KmlzXJHpJ~=(44e7W' );
define( 'LOGGED_IN_SALT',   '~{L:JO.DwzWEc6-&nOeN06@l1wPAvq`,mocVBqbwwLMf-!tr][(1twfvHjG[kT(y' );
define( 'NONCE_SALT',       'khCTq!rpkff+/@%k=z63y6uy~B{syF7*jO;uCMgo;9kSh5dmx$1U/{)Lx|HY}dnx' );

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
