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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '*u4DnYjniUlvb|m(A#-9p@zBUCG&eC{B{$*}3r3E/LMW?g+Zwi(LiBshU]10z>~U' );
define( 'SECURE_AUTH_KEY',   'Ti-z~YKO~cc-.(k}Tye6)=cT!`>F}r+fJ3Y#^arV6.@/ 6B3M1h(%$4S+):MZ8:~' );
define( 'LOGGED_IN_KEY',     'Qj*nn[w:eU x?rNB*D0}wEeD_mr!-!I5`&0!+dH!-{Rv|_?XK0EloK;ehn^5ioEB' );
define( 'NONCE_KEY',         'Kl~/Hx$-)1TWBtEzcq1b[I{n8xn,/WjeXH8QdjDNj;]qh.M[`0x#,Vn<%xVKrI1.' );
define( 'AUTH_SALT',         '@6,Ee[yBFs|i.E%pL-v`s6f(OUbO83Q3c:fC]=+pXd<B#/W}:@3n!Uu6aYt2WSkB' );
define( 'SECURE_AUTH_SALT',  'm}-E@pia|b*0lYF=Yy AV5#=! ~##^V9LL:eHkpRY=|]!rFRZa]n6MN^IZ%Sig$ ' );
define( 'LOGGED_IN_SALT',    'yATVH7bny<Dl]k;wLYO*5YR}X~BN?]0kfWiXdMxr>ZQ!?H.txTN&A>4uf_^vwNLH' );
define( 'NONCE_SALT',        'Y6%A-?rBCUTGZ+:}3AbsM;ikBM)<t72P1fE6e#D9BxY-I6OkGZ!*E|$}Q`VKu9<A' );
define( 'WP_CACHE_KEY_SALT', '+Au M;cY*)8T1%~3REtvXB(lnYw736bPV3<:l8kTUS-mqBRSG<mkFB5!dV97%IFs' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
