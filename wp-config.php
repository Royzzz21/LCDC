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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Leah' );

/** MySQL database username */
define( 'DB_USER', 'roy' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pato123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

define( 'UPLOADS', 'wp-content/uploads' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yItefcONz)4U75O?l:V4636m]C9-<w M73b|%%_O(m~<&U`.{RL[R1oh.44(8qJt' );
define( 'SECURE_AUTH_KEY',  '({iniqni8 y/-qwEpg<t+w=P{3jcF9qZ<5?u-TH./G 8jAK$~d5&ww2I1.$<M`^J' );
define( 'LOGGED_IN_KEY',    '(nvOc4X/_W>6X>zh<<!*W79Q-.FCsH|$=P!3O9nzL}o{_lkT! [oubFKYgX D1--' );
define( 'NONCE_KEY',        'f]Kxn]osz>Muv:6HY+F<>,|x;|IJrP%1;+pblDuY[_Q@_vFqK}O0DxseM|4K*lu)' );
define( 'AUTH_SALT',        '*|y[V{=K4<y%?&_vEcRT1BFe-=0DJ[J!(0lmsib%0L0(kG]@;LsS8Q($+u]A2FjT' );
define( 'SECURE_AUTH_SALT', 'kRA{45vrJe{#mx@zHeq+lnd_D6t9k@0.4S5/vMH<ybvl)%4m&PzX*LfZPuQuU|Si' );
define( 'LOGGED_IN_SALT',   '%`cNdUa5cy&wMzbmo3C:G^to1$e3FVGYN*$n[X&3<[GIcZI,`eN]~@^58HN.1X^8' );
define( 'NONCE_SALT',       'hnSdb?h,&B4*Bh6k#6$v^Nw!r[2%9b[y)HT:YdiPv@G5qTG#SUGKNX;{v(,e-EP~' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
