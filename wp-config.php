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
define( 'DB_NAME', 'flowpress' );

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
define( 'AUTH_KEY',         'jbNgU[6N*k3PZqNe8Fr/j3~Be6BeXD3PM7M6vDxS.nZU!bk7G-OPkE0>@{g7yI{I' );
define( 'SECURE_AUTH_KEY',  '|4izC[2=rF6;NO`-ph$e;^s])Ot_94?RX6MEA!R3M$CInY:?OS4Wv+/0WK;U|sUm' );
define( 'LOGGED_IN_KEY',    '+p@J?o7S9 :,3Fo)YhEd/*xe3Bl<~7Ygw<Wxdf%sq%@AI6$;I4|7&Nbn?Ld 1iAZ' );
define( 'NONCE_KEY',        '*t,Rz->rzB6orN;JZLl!.M&96F)#nKd[]>_bYb6e0^3o:WQ8lF_=YL,!St7KDad~' );
define( 'AUTH_SALT',        ',P3{wo}3{,O|vvWS9%Dk.IYT!bi`ticOm[Z`3^ZDwtI(xns:UkuE+0fbwBLFd+|$' );
define( 'SECURE_AUTH_SALT', 'i]=;UNA]|C~rdIFUMKA.2QWFT&HMtSxhM)[/ZP|_!b++F,xc=>B3x&=:evLktn=d' );
define( 'LOGGED_IN_SALT',   '}Y:G@yk}j`=,`h.;  a^V=JGT$v#qb6 -Nyb2]v`V,P-(LA~oGA#~,eX!uV$e06O' );
define( 'NONCE_SALT',       '*3G~P4`vFUpaUnQ`$7S,KQq;lO3MAVgE<z{T##I,43 3k?[xpvoONj;Kf*wdi wO' );

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
