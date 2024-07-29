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
define( 'DB_NAME', 'memo' );

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
define( 'AUTH_KEY',         'y$OAc#n[DzHuif!>NIyTMXY}t<Y`O%OS4I0(jJB#;zyHU9|()U5D,4eM75qp[<xK' );
define( 'SECURE_AUTH_KEY',  'Ixw=ZIP.$-{SP/mJfAqO=J>MZco+GhN+=l,%5M^UCA!6fL000ixQ$k~OeI_/`f?P' );
define( 'LOGGED_IN_KEY',    'p;uw+E(S0%@A_V*(+AV ^] ^Ga65G)W}=xq^wpZW62} x~:JlJFv7z(O!%6*{!vJ' );
define( 'NONCE_KEY',        '=+8~HByAp#0A<A$$jspaMTs}~EA1HdTy+iMbarW=du)S;kC@+9BGHh^53@<!8[+%' );
define( 'AUTH_SALT',        'ftzJuX9uFDm)R?hBO _>/Ew(+.;tn0im&G]L=pVX!1h#[x2,M3a0#(t&8i(tx;KE' );
define( 'SECURE_AUTH_SALT', '`0zW|H9`*fv_OZO%[yY21WFX*PfIv3(``3~lLe-V[{j)3bYr^1K@,?MUmV+M$6GM' );
define( 'LOGGED_IN_SALT',   's-BcH^df(,9hImz4<a>$Ye#vt@COWDc&AD@<mDb&;E}pDkX|~&R#T21/3)S;q]sG' );
define( 'NONCE_SALT',       '&Zy)3XT+jb2_rwK+D&:9oSgjv /+BX09xV^B&Ljm6u<_o#e9kSTWWU=P7U/te@SV' );

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
