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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'room_booking' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'nxsolteam' );

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
define( 'AUTH_KEY',         '-1Di< 9}ZK)P>D&8X,?vi+*IwW`X@vp:]1}fQU:+EwY$Rz2r!X*~]2]lF%j$=N*0' );
define( 'SECURE_AUTH_KEY',  '!pwf0H4/Vt39ySvi0o[|Nl<=,}J-Wh*mOMW:AR~VW3z%~m@_MCT:|Bblmm}gGa2j' );
define( 'LOGGED_IN_KEY',    '1&(ME/+1ElZA}Is[^Hq:]mH+dd{Z,|>p>bqrN&8ty2?zus,n-=AXl.S(7Wl(;uE>' );
define( 'NONCE_KEY',        'Xcr,t3~@u9BK0^Xo(CCV5DTjU9K[,#t_L(%^G!xY02WrS>iVOtdcHGj-d7YIbQ>p' );
define( 'AUTH_SALT',        '-Cp!Nm8ca B|GVSf,}=TEBBO=5{AB>O|k6dKec_3]1Is5x)8IxAcT^(HI;P2gy?+' );
define( 'SECURE_AUTH_SALT', 'x2$7-vlk1~9kCtReg(s[q#=>[PcQR9>>KBy=!w|72at__.RQ-BbLjm 1ktS5^I}B' );
define( 'LOGGED_IN_SALT',   '}uuBa:0~rt`?JkMqLG]FSwEU^?{-fge)Nq?kOXpUEF;uw[Z`bvnlDf%t?&;|>}V|' );
define( 'NONCE_SALT',       '/v9={9W|W *]L3|h3lH8]gWVkb0g+g.7GAzIU:1iWI8$k+HemaK5DA+mBWUWWs|)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rb_';

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

define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
