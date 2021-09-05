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
define( 'DB_NAME', 'erketai' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '2v{(:i3A2XcDdP=7uQEC@f!ubNu,^G<,)mFFm#EO3!J6QCk.bS0&t8U(3(QW2q;n' );
define( 'SECURE_AUTH_KEY',  '++j13]ZI a1$[3kI[iZQF5Q*ZBZ$G]Y>8,D#ggC,.gl)Hv,)PV4UjzVra<US4*<P' );
define( 'LOGGED_IN_KEY',    '!ju6Mr%Lb,SifbH!-8#~%Hl]oNZ>{x{Anusp*_O_erwHkZY=>rG&km|Z~UTJnSDW' );
define( 'NONCE_KEY',        'n}vpZJ~090zr_:cfYO{+DTm9D~YzC8%@C$CW0F?ZqOfk/I]&4$.{7lk+@gd[Q*f+' );
define( 'AUTH_SALT',        'a^&4}WaQUB`.9`0A]=V/WN2*@*VJ:<+ ;)+(ag&n)(u2/RcDTtpUi^6D&d1o5oJg' );
define( 'SECURE_AUTH_SALT', 'S2zQCSlDC`IJlAr0{-iq9Nk3`Z*3`cqlaba(QL`@;8*#k+a2tC}T%f9FqAVzvw+m' );
define( 'LOGGED_IN_SALT',   '|`<fA.m~w5Pd:Wn(3r5:A}u(&x8~ta&0iG8{Yv,>,;}je!Q%K{HkG<B$3lG0k&9&' );
define( 'NONCE_SALT',       '(}[W$,32Ji>6F(o+uLdy=~|@:v__Y7u4Z/#h.*[,XMB=!nIzZA}?*==q0.t*O`.F' );

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
