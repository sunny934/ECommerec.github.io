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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '?wZI]EjLg#k)xutKF@*qk%!qpS4(Z?B{X|awxa&8zQtp?t}%f%H;{K4AtL@2)gn7' );
define( 'SECURE_AUTH_KEY',  'IRv5:Jo.Huo]wvhi}NGs_!y5MXZ<?oltpP0AS&,[uQu(4Tz$|p{%QbkXwY5$?:Ig' );
define( 'LOGGED_IN_KEY',    '+EcqJS?KJ#HLkWk[^k&[sdtJh`8 ~qo)JR6&r5u#Z( #|#^Ub}!Sd8x+n6ZUZ[zI' );
define( 'NONCE_KEY',        '_zwb#X+^J-c5b;GiA^&;9~2ICx%L7eN[Qrb+Eq9Cnz:[u4~a;yw,Jjj>-5-?y2:2' );
define( 'AUTH_SALT',        'k7*%L]DJL_y@_nC(DBPI9;bg)p6_^)6&^nN<M%Q;kG*7qatlc2_I8[(88+L:S4xe' );
define( 'SECURE_AUTH_SALT', 'X7[! a|2b)IG_gf,{<CmT?vKxv]8g+Zh.0(CIG7h(1[XWh?3hG);9OC6fHbJ2.=_' );
define( 'LOGGED_IN_SALT',   '60 0{kaVS$LTGd$*pa),:e!^oSc#5f[%iet{+c`8Z6ePA9?K!R>2-/a?{e9AuU]P' );
define( 'NONCE_SALT',       '$c%sQJuuc!Yz-iu:P$Z8HT]mo09X}4[p<0hw]NyG?W0g4~vk2K^![QSl(NxZ;k*0' );

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
