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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'concamap' );

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
define( 'AUTH_KEY',         'tpl{-E?1IS)8si^ACMoDtQwb.NLOzp-N>|>p7,0f*822qE1kU!Ziu`U:=nUCwAu}' );
define( 'SECURE_AUTH_KEY',  'A6i)e%di j>C>w9jQ..yCNFdto JUEgtr3s}DI[6(wlPL>al!3-gy`+[xn+zz@)-' );
define( 'LOGGED_IN_KEY',    '/.E/}Ip9KQ8HKyLv@)Cl*z9>>BGsNEK^*BVb<fgcC>iJJ]-Od{K.$zg2#=}!@P`|' );
define( 'NONCE_KEY',        'bY!BARVBO#TY<HQkKByBee{+Ng|42l8):IGunIU+IgXq)vHjksk@rPe+EmGYC6pw' );
define( 'AUTH_SALT',        'Kv/A9;m?0s6(11$.Af}:ZO@]7`cxfRYbb|nr 5bw?9|$fD3_?pU.Cw:XWN8vu`cE' );
define( 'SECURE_AUTH_SALT', '4}tipF:N!BrxgYb?T6?*>,5QQ?Tn}o/F*e=) W*`SP*lJ>(`x/*_tnJr+rKP9352' );
define( 'LOGGED_IN_SALT',   '.Hb+DZo|wCwz[LvuN&/)4o5=2(Q<D((?GZ{6};$h23)-osD_43^$*#k{Zh5Yfo3(' );
define( 'NONCE_SALT',       'f21163;<m~ILQ+31y{ll^^UP-L]=FT&@uF5di=#B;vfIe? 1MI!|QVQ>gYfA?vT,' );

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
