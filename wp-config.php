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
define( 'DB_NAME', 'backend_api' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Pedram@1400' );

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
define( 'AUTH_KEY',         'hG%,O]Zii{R&@Mj~M8j@%[Rv*XN+Vc(NSlmkuaGXwP-S9?l56{#_i8Ot-~L&iS&i' );
define( 'SECURE_AUTH_KEY',  'z^Qmj>Z+V8k@FMq~TH!hUV6Y]|:mTx[)Pvmd4|gp+k%M2$}r#bCnge<c!%GX!e *' );
define( 'LOGGED_IN_KEY',    'Q!u3%!F+n6[|69pOnsVt#&Qa]QfjkRBbcVZ0oueJ$jyrs n3JO+;90)p@dyEXc].' );
define( 'NONCE_KEY',        '1NQgrtxaIu.Tt,e>VI;^xD/7f*5RC&ZzBo[pTuJO4 [NmNT,0<E*>S6J|[}YAz2F' );
define( 'AUTH_SALT',        '9]Mt%DJr6!@u &#4{N-gNeII6PUU- w$.Wh$.*y]#-S`gt>=qMw=U2{%.g+zeQV6' );
define( 'SECURE_AUTH_SALT', '5%MOT=i,JovaW*+fWhZ=9b>9fWszn{R@0|86sx9?yz?JlOU2bqB(Tj_N(R9$<)L:' );
define( 'LOGGED_IN_SALT',   'iCWb=T[E0fLiY)UPG5F$9lKwC qfMe)axLLL/:+50l]9-FoHyh3dto|$A8bT=A(m' );
define( 'NONCE_SALT',       ') $<7Yrt9.+BB5p8Jk2~Km9>(U>|=%8<a4u~434Cz<=52OXW- 5xC~Abb?t+e@*r' );

define('JWT_AUTH_SECRET_KEY', 'pedram');
define('JWT_AUTH_CORS_ENABLE', true);


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
