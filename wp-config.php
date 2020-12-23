<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cctvdemo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0M7|E4P:QNd?iGl,$]e.ooc%J9?5nzuQ2McX=@Kp?T({CK]!SOZ$7SsGBg)6izQ@' );
define( 'SECURE_AUTH_KEY',  'h_UB?NCyE1fNE eHaK08Y`]DCH;,?^{VuAFuhwy[lNm>ehg:dTSk@DF7hM~QnkY~' );
define( 'LOGGED_IN_KEY',    '(WD8&nvwrAO1S|<~ UT0s(GLm>[tr^r=-qQQ=>CgdM {lGfbVygCyY8sD]9D>s2D' );
define( 'NONCE_KEY',        ']]~?I}U;SMF]+Hn+6+$?=%X]ff,X%0`GSqDz{g*#P44t2.YsVi=sYJ]`[%^.jmqq' );
define( 'AUTH_SALT',        'v)):;|z1 +Mb:xbtfnehY9K)S.>-rlRsW#q=Qw?(1oSCnr0%[|q=`?(gy[1,B(m3' );
define( 'SECURE_AUTH_SALT', '?l;^[Gn1-^c2.BTqFsYo> k@&+([rSv@,<)/g|*^$&Gr%zlXbD(yPCw[XY,x{-Q<' );
define( 'LOGGED_IN_SALT',   '[VO#?c;+i*vMxh|-tw8;iN0)=8/-aOlBDd+n&kzhn%Av@G^a 6,2-EIeoup?HN@~' );
define( 'NONCE_SALT',       'V{NmQgRF1[[.e1].>wF}r+kVu]3x6q[C`[TcH5_in3NLJxrgaL9Kmv%BX#SP14zu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
