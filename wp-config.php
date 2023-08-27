<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u133472090_j42Au' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '#n4uMi2J(R:NqX*tTss!`Q&kRYf=9P_03vk;x)oBp[&:t7_{OZ(z.Tlv#|tL2?CS' );
define( 'SECURE_AUTH_KEY',   'nr{GhP?y5&1ML8~[X8FiI=U.i*B2DtpsL)_rP)J+3?IMIHT0XdFvX8;lV@q;8JNU' );
define( 'LOGGED_IN_KEY',     'SE|V!T$!^EVy+PszoHKU o?9o6 Q6G~z!RSF~cZz[j8#~8I#j?KCVRG3^RXhAg6;' );
define( 'NONCE_KEY',         'Uz|f/lXCf/=2wZ+Sy~OXD1Z2-S)O@YO[i!=]kcn<M/qdQ.MA^k,!=> lV8$Q/n,!' );
define( 'AUTH_SALT',         '{x`pZgx&aT(JQat&u!K*mJJ|emBIJohyt#E?30e;PtT8~ Y#tqU}lz;[|v#[wGT~' );
define( 'SECURE_AUTH_SALT',  '_@~r?wzH,d8ZE&42lMItgOR1;e&Om%Y{VhBFN;(YYSVP~<_?+!`BI_l8U}JGT:7L' );
define( 'LOGGED_IN_SALT',    '*By>hH6D]s Z,2aP+Z;nYWag+4IBGbxv?jee{xe]GLS` -o(z5`2 3b;(<=0V3We' );
define( 'NONCE_SALT',        ']zTj*h&fu1/(cwq+lP7B//:i7Cq=<zM`h`f#ew5D[oMomOgQm;cO2]]Je]@em|A$' );
define( 'WP_CACHE_KEY_SALT', 'D[sro,2Y_DMeDd#TyW+Mz.H!KM#GY6]<[B z&77B gyz-<X!H!0zniY7m L%!=P?' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
