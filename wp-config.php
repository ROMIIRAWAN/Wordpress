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
define( 'DB_NAME', 'db_romi' );

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
define( 'AUTH_KEY',         'm0^K^lE!,O$_SxNhZ2#fI;(`@*,0,.BX@;*C5%+mtlEQJ5d&9RvXCD+ >ibk555y' );
define( 'SECURE_AUTH_KEY',  'uy%E; n|iaR<E{U@M;J{JbHMe%;O#^&z?iw7?M3D&AVV-BE_cuUpz+3<-D#ah#XN' );
define( 'LOGGED_IN_KEY',    'q^ndKU1sQr>L6GL4pDs`f+EO]6ik->aqm^OR{z4W:80a ]|kx_+BQGjW(=2?o;|?' );
define( 'NONCE_KEY',        'f7mhmj)`^?dtfXtIoPjA2f^^.A@yL_)j(401*rvp=:F:m-)3g)|a(rm(tkC}HDW2' );
define( 'AUTH_SALT',        'oKZu+#^D{ rrBy7qaI`X<C4KB@pm2NXx[Uiae?!N=zj^ooQ,nvK=tI1D3sKd92q{' );
define( 'SECURE_AUTH_SALT', 'a_Sz<Bx81iG65F:yZpyR$yd)1Wo.@,G.=]bCjz[C(7e2:;$<[]zu#4y*^7f1}rw$' );
define( 'LOGGED_IN_SALT',   '5wU=1.&`d`QMQ))j>21Ixt7XY#!kfUOQ6^Ytt6W$nCYP f$sw-W*aPykN#){!5 9' );
define( 'NONCE_SALT',       'UdgKvpV2{yii%uO<0be1dsjiK.NG!H,h4rPtQ>E>:KrSn>i8*95!{6o2[%l@8vii' );

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
