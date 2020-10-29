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
define( 'DB_NAME', 'Projet4' );

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
define( 'AUTH_KEY',         '#df)f.h7NgNrXG*hdk@f}p ow6$E~cMoB+oLq.tQ^6=<K.QZWpww7M8jOJ~}@MBH' );
define( 'SECURE_AUTH_KEY',  'B)LF#ivFRSJi[dq*)OI;*Y;8;tR&H!UUQm3Y-5%HjTVdeZOA!dA#$%xVfr>d=^uK' );
define( 'LOGGED_IN_KEY',    'k>`ayo-4Z^Ul&n6hr6F-qh)&Cmw`k<`jP.jS1Ek8*u+aSmU=5!;za{,&O^xRHP&s' );
define( 'NONCE_KEY',        '6b1W1]N(MQG3cm=i$1o8+6}r ?jz=+ePJF@&z=9<$C5VGJsj(l~(FV+of(Z]{dOt' );
define( 'AUTH_SALT',        'sX[*ttJFVfmljCS*cgoAjBlAiH&c,>v@<nlBvOlVN><S34c62%&%!6K3D5dc %+m' );
define( 'SECURE_AUTH_SALT', 'cUvg$02Zd$6%>4s*m/3pYw(6~@J:W7_{O6(]^;QO^Y(XBtSs+),a~+bVSBb!06IQ' );
define( 'LOGGED_IN_SALT',   '-3e{; K,PlF06_:5y!*Kl$.Li8Vu=n9*7Vcyv[FbBPw-uQ~R1,x6&bYSvMw62zhb' );
define( 'NONCE_SALT',       'c60~MSx,tHeexMGTjA{|Jua6mcos $()1wD9z9EZZ8&;/GzFf(Vff0>/+M<--t]S' );

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
define( 'FS_METHOD', 'direct' );
