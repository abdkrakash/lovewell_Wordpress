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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '!G>4.P40[2Qf4nD.-.$9SO:!;=U:`izVhKoufCTxEE]L*%#ugvr[gjlsam JDGZA' );
define( 'SECURE_AUTH_KEY',  'f>Wk$5>MK2#{=;z@wDsoX!6a^T5-S+&rw(F+Bsep5/m.`7OkiAPy{.W#epUi%y>t' );
define( 'LOGGED_IN_KEY',    'Bt^z0h#)BlUdwI^K=!|lw4vRkX(Fe<)qNP2`c#zh/.,z/_?=IBK~M04u5r;]J$,P' );
define( 'NONCE_KEY',        'DPOXJ$OU0[~f|2{ZRUn|Tz@tQoE#9DyT%d$HgP;8ZjVjz*lK$2(U{C^1/X9Cgg&U' );
define( 'AUTH_SALT',        's!b5/mj4*Z{kZG6+Qo$%IBbM/,K!F1%&Ew_j,Y5AQWI#IJ}DnPIi`Y$!IHLW}Xk`' );
define( 'SECURE_AUTH_SALT', 'j-4&KflY{cKB`S**<gZI[]*!hyiQb:<.v3ytrtu=I#ekK(^q!;<NRX}#b[r.sC@W' );
define( 'LOGGED_IN_SALT',   'czYM)d{Q0TPA@2tFJRhI_GX *D;y$ u,V{P_JSr0rtqG%]52Hm-(9ETi>2z$vHuz' );
define( 'NONCE_SALT',       'Y@4gd1iqW>-F/RM;xGQ!HA4DPmip:s}5he%?!}ZJbuih#CR^G&qpD4u3n*u&eAY/' );

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
$table_prefix = 'abd_';

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
