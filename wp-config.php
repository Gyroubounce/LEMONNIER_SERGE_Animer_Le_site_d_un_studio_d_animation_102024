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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '#0ft18a-V!p8~>W9~VAUF),3UND(|sm%pe SKPoEu4B]LVo$Whse_PZul2-j4i4c' );
define( 'SECURE_AUTH_KEY',   'qs2i.@Wfr$<M)F^+;J@<n(f=E[,PCWuWCqmV(9c2m0 =GXjP3dVr#O@g|*%,Fj^E' );
define( 'LOGGED_IN_KEY',     ';JaA>@V>yJfBjShM-25v^2O/,&!B<slHa2XZm~S*I(LxI;o;H@NDUb;Kmkh>$*uD' );
define( 'NONCE_KEY',         'r1!ugSf=n/9lVd!bjA*TXKyp@6ttYa/^J-s{~(y&FD+Waj,-miA:RW2u,S(!oMqE' );
define( 'AUTH_SALT',         'M?P@g1Um#UdzM/5UM eDFxkWt2^E>9c&}/1[Fi]lz~DZu*gLO@Td|I2&.R)N5os0' );
define( 'SECURE_AUTH_SALT',  'XQvD=;#fnL=,AmP?1:>+y0HUPwNMO]v=0!o!)KrnePJ8noLOx~>]7PL>g2lUh<u*' );
define( 'LOGGED_IN_SALT',    'QK}el.JLWf8_{Rr=j 5BPVXB|]s9>+UtFSdOh<Iwp&#L.RFa8X0EH1Q+Jh^m,Nv-' );
define( 'NONCE_SALT',        '0HzD@?(,9{dsU_:uaOy.%R2/(*(P|/VhHfJ6|Rc?#-@^_ho7!:os]UjL=F {1i`d' );
define( 'WP_CACHE_KEY_SALT', '~X6}/^Q7ur{~4%+Vz`EMx9.MZ*n5a`DlA?hgHx6^$96>Fac3l=&)e]?|LNfZATc+' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
