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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ':77f=k0@@m%uMRq3|EK<P2avk4v_&Bx3{j%;1k>Z(:$}f@rvJ_9W<j]0H*X&D.[a' );
define( 'SECURE_AUTH_KEY',  'Y,Z))Lz<,:/,@e[|a[Bo|)LCN T+F.V|wrjtEu+~0B?X2;dEH- R0]q-0159{O80' );
define( 'LOGGED_IN_KEY',    'h|TZp9t9y&E/,.21<^88^0./7JOmQva{Y=S6K% Qx>2nqlhxx`!msrYJoHr!RHc&' );
define( 'NONCE_KEY',        'q%t{l;%;kKmwX<?qf)e~0j;-:bD(gbli0{l -E-<n[<j-t6iy%4B|-$m?Q,CsbR0' );
define( 'AUTH_SALT',        ':,l0.L37Z^#+v?-k*~K@4O?V~.*[L@JB6e,JuWoVJ;MTFam5bFf ;B@aIA7?rx(Q' );
define( 'SECURE_AUTH_SALT', 'H/`HR-zC-iHXaHMg&`xE+FvBp%jfM4;B9ZK=X)U&{Q:u2G>K>H ZZ04UrLbE<I9]' );
define( 'LOGGED_IN_SALT',   '^Psq,f?5b9M^VsVC2qeEx#ABjlQv / c_Rjk}x&hp1Dq}&2ok25z[6O8MnE<m>E#' );
define( 'NONCE_SALT',       '`lt+)Dy-A$#8r,{!hvh_T-?Ff`R9>?]#)7i`;dvZ@-SabuZFl@ywpvrR.7r$_x>[' );

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
