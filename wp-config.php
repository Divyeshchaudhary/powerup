<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'powerup' );

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
define( 'AUTH_KEY',         'F}F#6Kq#.Zj.])E4#:IGL)ugjA_m(h>4f!b84-q!ue{6#)y)5LSt_Xf6UH4,9rGN' );
define( 'SECURE_AUTH_KEY',  '6aS<j4Y*a)v]!qocIP&`7N^+@v_y-6L)of|=E9$ytua:;9Z!LA8t&vuw5 dB>Ox[' );
define( 'LOGGED_IN_KEY',    'X7_2g1%UilU+W5=hX+Ga XRm$&BJ.Ns.%}t5?nc%7|ml|?lSg1v2T&5VX6miR Ts' );
define( 'NONCE_KEY',        'xg_Tza0vz1u+Iy#<Eu/j2FiH8U+o.=X*q`tv~NK!$nu|R),7^d]Xv(Yh7UJ?Z 3D' );
define( 'AUTH_SALT',        '5@.Iq`U}*qP`pO,cE6T<m,!Vhx Zlxj)<]=sa[CA%S@N;5,C4>casdNx<sKC>v21' );
define( 'SECURE_AUTH_SALT', 'JJd!v}mYa:$4wGpZ4!MB^@7K93.VIcurFc-^%nFb*}M^_K-tNk?!xl`X%/1%~U)_' );
define( 'LOGGED_IN_SALT',   '+/MwwEcn?@vXo~h@:4%#n_A?>53WGxZfMx-JmZs/K{&IuJ{rggL5[.4w1*5i/U8m' );
define( 'NONCE_SALT',       'kXyz |w<>EgHVR%tt^{K{4!iUC?l;L$`ZdS{icVto@!@J_h9YtUqTw|Y/N/vDR^T' );

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
