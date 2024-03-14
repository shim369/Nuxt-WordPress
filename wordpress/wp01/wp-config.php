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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp01db' );

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
define( 'AUTH_KEY',         'x0P)q2AMd@tt3g^0i8x[Y>39FK30wLL%krb3O%MmFWXnGBkN+m,[s0Sm2D;;lsLg' );
define( 'SECURE_AUTH_KEY',  '[hiPf@~[$E[+&[q-m!Ze6[j8l.Z`y>]< Np-NL)oQ/H<UmSEGg6X^Xt]DF[?6r)0' );
define( 'LOGGED_IN_KEY',    '+;MJbH)J;qu|uR-/Oz,-@nUWM%-!K^o*>u8^Wo$8GS~i|Bj0f)}yO_UFpzp:q^pc' );
define( 'NONCE_KEY',        '-a#z=EV~ZPH/~E{$2RYUN `YWMqWPwCIpZptT@5n{o*YRRSCRhH)L6/P@*&8;y>M' );
define( 'AUTH_SALT',        '$JlMGl2*|c`.,Ly$v3PAXP|X$^rL/5NlSRRd]u`6WK`P*0c7nqn0.RU`DR*tR^.S' );
define( 'SECURE_AUTH_SALT', '3&`R{nGa9wT58)=R2w_98[rPbzS#^=vu-+EfeXK2YUl1TsTKVxXbxMjyb7u7lP)W' );
define( 'LOGGED_IN_SALT',   '>mE4KlmrAg;?fK!if.&^^6ln[;y0}*EW[Yzu.jYlC`IVNn[8RuheS2{RwnL@BHX7' );
define( 'NONCE_SALT',       '==T9|_6bhv*u{U6N(-t}#qPGHs7)Hx5v|!_%Vlq@@(ORc#w&W_:k73+Anj!%ukH@' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
