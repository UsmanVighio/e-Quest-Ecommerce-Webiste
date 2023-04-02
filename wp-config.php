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
define( 'DB_NAME', 'ecommercewebsite' );

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
define( 'AUTH_KEY',         'dxO`%EgN8-Ly>l0uLFinu<klTae?lri1^Z=+5z!y(Z;inY_#<bSv#l|e rohe3F!' );
define( 'SECURE_AUTH_KEY',  ' {~aCM;8_wI7RV.{WA4[aAS`zw..,AK?C%S|&^>jP~]!sMM^E|v4{6H0kz~H1Zb9' );
define( 'LOGGED_IN_KEY',    '%/GeIuO#n5|1pJLp]e/^DMSHEM^&_XYM1uxH/i`vMhm&pOWasDaNJ+u09hZe}DBc' );
define( 'NONCE_KEY',        ';##`;_Nmxn:ob&*<*~c]M]U58O5Fu+Wt r=67^@hvPU:CwH/1X59hYIiLOiCbE4-' );
define( 'AUTH_SALT',        '&.q9 Kr;NC!X$%Ka{r}^1O)?J:iXr Zr3X|P2|gI _d|oW;^R:3j(ZqL6nMU+h6E' );
define( 'SECURE_AUTH_SALT', 'XuMDRv1#9,LZkhzKGKg2}`j&9T2Y?)A3~Z.:4N.~6d#9@$$ERC13U<E}EimLUk,P' );
define( 'LOGGED_IN_SALT',   ': !,5qH5zgOn]0oGMSQ)-PIAP-hlxfejNx3%B;&DOp<$V3g^#AF3P&v]69Y7h$R(' );
define( 'NONCE_SALT',       'E=r#nwQU7#]#%AGzU?|<`+|h hepj Kn)z(^H~n6 {d<^Zzc^n:}R}G._/=yY$V%' );

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
