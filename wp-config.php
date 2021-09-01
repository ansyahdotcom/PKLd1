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
define( 'DB_NAME', 'pkld1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'o xq|gK1qAGRqH1 (^lTlF.wNScmrT5ImXKjddD:|clVYKDcB8@S$#F[lyGyvis8' );
define( 'SECURE_AUTH_KEY',  '{#HAPB|qy]#6M<c`xSi<|B,%d6}VldT |0y]E>wbSBP~X3<:7#8npanyX^px=G;c' );
define( 'LOGGED_IN_KEY',    '=zkl$rka2jK10kD6bcIJl%]reD[_zC9ysJ~$Z8T5R-Z_-?yR&O4Jqe=y1o.y2FgR' );
define( 'NONCE_KEY',        '[O$-4g86_0 vrMt-hudCB2,I50$oKV$U,d#tk>{q$c2Kdwg?QAeAXhC6kpsh0Z%P' );
define( 'AUTH_SALT',        'j/6,YO6[:X5E!ivX,4kugS*a<-lOGwBN8`f9]~vhr-&x+*jf7<8C-9l8v6)x@AOT' );
define( 'SECURE_AUTH_SALT', 'Q/:~tHC|<MchelR0(&/1A$v4[7.vdEUhXxX1Watv)s~Gk5d[(6|Ji;x;rFt(`bX<' );
define( 'LOGGED_IN_SALT',   'jnSsL!eVWKj(]7a|N(+p^Ow^ruv4R>iYbj%rI:v.}[T++TQ$;nO6y2xi6O>:;>t9' );
define( 'NONCE_SALT',       '_1?:jb:/OU5h6t*#nl{S&(d%oXrK-YO,=Umepp`g&=79Hg49>7NU5gELe,l#S69u' );

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
