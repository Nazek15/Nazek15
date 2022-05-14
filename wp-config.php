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
define( 'DB_NAME', 'nazekwp' );

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
define( 'AUTH_KEY',         'OzV)k?q1EI@gFOK&i)ADPhk+z[IRM?{J56?oyMmATE%y53W`EB7+wmczedT,L|rZ' );
define( 'SECURE_AUTH_KEY',  '@f!di|.C@%zxxF,`p~1-g!;1cHD3Ln]5L$|EKrz>SWe&OLopP])q * OlIpC&;=7' );
define( 'LOGGED_IN_KEY',    'q[KX*Y}!aATQn4t3v!+ QcaUQsU7@{FpAYn)`D6rpq,W&[nA0L>5IgPa$tcgxa^f' );
define( 'NONCE_KEY',        'q98sb]}#0b{3}{g&;VFrsvhg]m|l*&Iyp>Hs4)cwL`Sf%~;fT6Ti+5.8(5]vEo0w' );
define( 'AUTH_SALT',        'mGEhNz6q0X{>&R ~<g4k+<+Y&sab  *YmG},;jGWRcj^On()Dh%gp[a4WD{,4h!e' );
define( 'SECURE_AUTH_SALT', 'lW@T[a.=2@F3uUe,rel.-3kz 7)uvhng9*Jy;3)U !o(&S$4I(R`sa4^^J39ACz1' );
define( 'LOGGED_IN_SALT',   '>A(xwpJ&_ ID_k!pEK&|h(zMR+r+QV_HEVm@+X~Ez!pP(jvOS9.w{AlN8~$s0tG%' );
define( 'NONCE_SALT',       '6/2zwKfR#T8Bt*_&v349w^W<qKE#<_v$)Pwr1`zGTFWA5SQp$(AiZ.g|[!@J#+(2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nazekwp';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';