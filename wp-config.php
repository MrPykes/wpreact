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
define( 'DB_NAME', 'wpreact' );

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
define( 'AUTH_KEY',         '6e1wTY+ZRxc.0G~}{r1+k)_:B-(E%7ojb#1FI.Om*n4q!i%?@lw m)<?<(vkW3oB' );
define( 'SECURE_AUTH_KEY',  '3$q4T !x*jUF}n94#j);VSE]H*s$B!5^Y`,R,;-!Qz$)(C`Rq/k#N~On=qSwO6@{' );
define( 'LOGGED_IN_KEY',    '7z/_][.@(g3CSR59_^7<1s_Xx4]NKDG2FK>3WvOf5[GekAK*c+Vst;l*=2W,pZe:' );
define( 'NONCE_KEY',        '2?#|X93:g ]U&bI<xHsC[h[}Uea,X2x|*m[!S|.ylFC[V~ww]0x<hS,vLc>BU$Bj' );
define( 'AUTH_SALT',        'd6%FR-(~!uPT[& NhPST4`G`YB&?vKU(W06vOXDuo1r,Q*Qy$8Br2*RsLA4-8;(6' );
define( 'SECURE_AUTH_SALT', 'SZT&pf2G50<y5[)%x=frsaO[Tap^t]c8WiG>|jUef9}r))op6nOOaLMr^j%B1q$S' );
define( 'LOGGED_IN_SALT',   '3*d);a?i}5>caGL{UCmYKIxvBOrmGlmSWs6S_Le{qWC;ZAs?;bc)vE!3iU~auDF^' );
define( 'NONCE_SALT',       '>^e9&!-fW i8l$} .fhqQ^sxUfSgv?6)MB3!IWMH>h@J|2>+vs0pM%I,?*~{y-n|' );

define('JWT_AUTH_SECRET_KEY', '12345');
define('JWT_AUTH_CORS_ENABLE', true);

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
