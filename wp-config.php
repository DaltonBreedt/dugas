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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dugas' );

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
define( 'AUTH_KEY',         '~]]xsjG(zqa(l*2^.g3VPUW3[4)(HNQ/C!PsT=YFUc2:V7r1o6pX,H,@@ic6mGt^' );
define( 'SECURE_AUTH_KEY',  'G*MDlk%ZT<t<di!HfbB2M)9@79cttW1Wo(:9CVS+7:ctbl)(oZy.JHN!V65SgN`|' );
define( 'LOGGED_IN_KEY',    'i+vE+q4K)1-0CwCrEx~&htt/ym6{5gG]t4g}v.37;4LJeVp!@&,Bw{CrAJMc$q<$' );
define( 'NONCE_KEY',        'bWD[_Nd-l]$h*0YA)gg!@)Ry&Xn[J8y{$RgG;(2:YL5B?r*YGTvZ/2s_kd1gz^)M' );
define( 'AUTH_SALT',        '1~$GSN.N0K(Ac_)uI#Lj4}wj1|(s<n:]7IwxK}{Qrrmu$LQ|y$=Ew7ctz7|cI%9-' );
define( 'SECURE_AUTH_SALT', 'Fb-y{3zOc$-dJF@D+CjnP#,m;W}VtO ]9WZxS_o}<4]%PVf^w;:4>oDRszI8l6B^' );
define( 'LOGGED_IN_SALT',   'CdOuyM#a{/.N)q*tQLpnaOkJak#<ds<m<+*#x#cC @YW:R[zBE/}Ij_qzJ:`Zy0_' );
define( 'NONCE_SALT',       'dPX?vF8%L+SuCS^TpxKx<8_.uJwKWANZKKWt[*emh6u7@yoLvo>.y>MS))L&[6pi' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
