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
define( 'DB_NAME', 'wordpress_custom_1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'X).;R^LfZL~8PLVjs=-ThVK*R$Y,,Ao! K))o/j=zqPMllkkq^?wZ[`_6-=Q(:jy' );
define( 'SECURE_AUTH_KEY',  'i92y,;ES1L}:fj=rxn~Y+W#M}@JD5J|G55a4r2ln[4]#<pa@y)g7z]^eTptLLEx~' );
define( 'LOGGED_IN_KEY',    'D5#e(:iX |$y@!W3/[@IH@OpCDtyD|&T:Zcr+@`m`DYiCu0)b-ZLUnf!t0h;0v3w' );
define( 'NONCE_KEY',        'zTW1{,E5i ajf0rj&(VJNw34*2T pnBo7t|F=Mt!S6]vj=1~<D$x7@ ev+fssD}U' );
define( 'AUTH_SALT',        '>:Ny,u%+pWAZi1 Nc,O]M}(V5w.l~eH@8&3y(_60tY@LYDN9~4J]vU^=6/[boeO3' );
define( 'SECURE_AUTH_SALT', 'q27yj3:dSyAW]nDt[21eQ.e/JV7=`Oi ZokLttFQ0P&b2Nf_g&L*:[=z @AM`xC8' );
define( 'LOGGED_IN_SALT',   '}n-zvN`SEJ$kD}/:tSl{tag))O7q8!NJ=OHGkAu:@y{L^ W>6xF<bpHpB7<Gh^f^' );
define( 'NONCE_SALT',       '.7(Y%A48=])}Q9h|!E.W[NBN2)<PnifSQuF3;wG2a+@$W.L1n6#=9Cr0RChzK?!R' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
