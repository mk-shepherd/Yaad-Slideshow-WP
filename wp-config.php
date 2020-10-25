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
define( 'DB_NAME', 'Yaad-Slideshow_db' );

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
define( 'AUTH_KEY',         'eg;.<+!23m +U~<*jP(dI3]]@LUejfiv6_]ETMyLej[?sAAMd7?xq<KdWXG3h):|' );
define( 'SECURE_AUTH_KEY',  'X,7f3ae^F%6BrUV#@1^.;9VQx@^F([:w_2Aa/$|jNEk}0^}xf0|+:Z=KFNiTfa?I' );
define( 'LOGGED_IN_KEY',    '(!4F6QNd@Hk6yf~QJLMb!3x1qhCdvaj^8Wd bTlWfQ$^9#f&MtH]:!)k$*NZG?ak' );
define( 'NONCE_KEY',        ';I5/}Kok_w$kFY^;`nluf}vo!5H;,LPQ?jx,KG6o{:HsFm{[c;xm7P(:tqi)KI4n' );
define( 'AUTH_SALT',        '}gD*2(&JH^XgfF67*OF$~4J {d7po1&X;Xh}3o6o7I!II}WPuqW<USAcYocNbCS^' );
define( 'SECURE_AUTH_SALT', 'o:X@fv?$BO}za9(1~/_zAV_.p&rlIytV$/]QtBmjfEq>QfC@nAP{d%fQJwg9;a(n' );
define( 'LOGGED_IN_SALT',   'un3[~Spo@#e6xlADz{H1XRpI=2OHHMB4CP,G;$bE}[055K.DkZ1)09b$2+FN-6YZ' );
define( 'NONCE_SALT',       '01yUrpsviQ+-Rv9qF>s<[e<_ Cne[qmcId|+5oEmwNEc[_X_+^{zwFcP9/3W4cgb' );

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
