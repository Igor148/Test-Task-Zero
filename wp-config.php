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
define( 'DB_NAME', 'testzero' );

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
define( 'AUTH_KEY',         'Te_;Dn HEa>s[>/z1$Bz`^;j|1=k*hyCci<Z9Mm*/D1oyn(F[w9Z#^KoRo~=]a E' );
define( 'SECURE_AUTH_KEY',  '8r0kF0] tlIa<]:2>]a#X SJ0=]8j^M)4E }OW_9QTD[AF~O{6=!g:J?A[r5[R_n' );
define( 'LOGGED_IN_KEY',    'pCua N~.>|iC&gf)`[,a@;Bt$C?~`:Hy29AR.xm IN&!2tl:H#Y}A#Co3*S52( T' );
define( 'NONCE_KEY',        'A#D_~,C-uWf~QORYtBeq+5+/HlO6xmxa34jX`&xhpP+d;uo?l1#8!,h0,[grp?LH' );
define( 'AUTH_SALT',        'bWk!K5jBVq#6R@A67*EyvVJTCHE$PG] ?uM8,,A9TkzG8AJtam J]H1Y A#{ximq' );
define( 'SECURE_AUTH_SALT', 'z&=x0+34<S#q?AN(5To?g@Ls0r=t>c*gO6~y9DT*[@O{DO~f7>QT1JqHR6I;A!kH' );
define( 'LOGGED_IN_SALT',   'bsYZ|@a+LC4B}tjC,Vwp?30ek#)hBimp8qz=Hx#e>ag<!{CsgNg|OFYibn:wW!Xq' );
define( 'NONCE_SALT',       '=^~Ad[7SrIYLbnUOELp^1+%W=qmRF-~hs=N|jOq2q79Lha+0+DR%G.PRZ81]eyi`' );

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
