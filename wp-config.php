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
define( 'DB_NAME', 'learningwp' );

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
define( 'AUTH_KEY',         'Qm(|3sGRyRgT;=Q`J~))FS.vN)F@6&Vj-s6F`9T+qj~X6vE_5rA|<B/+#{/P}i6N' );
define( 'SECURE_AUTH_KEY',  'P42$m!yP4wsNfjQ47w4y0YgbHd.FOPE+JN&c0,(~X}(GheLA</By,~JBiE:P2UHm' );
define( 'LOGGED_IN_KEY',    'r_;,pyp^)/Ie+1T6d[?@);|hWr/xP1>;I68JK?t >9_[yz]bfe[HJeZ5SOp@pb=5' );
define( 'NONCE_KEY',        'Glhz0 t;wQY]=b7*A$nF|4to}=u|/tP4Ed7Z2jrbX.*=/,~icbCpF^p>u zK4Pmr' );
define( 'AUTH_SALT',        'g(s.QN:q,sN+q|N;DSraa^HL9Q?H:=U. #&&&7q6^ MykJpnG]!5.54Nmb.]R;XF' );
define( 'SECURE_AUTH_SALT', 'a+(H_So+E2WNb+P{997:W0ra~qg-fzx}7,_+em) su.LSeWZcRKm8oNRb)qD6w.y' );
define( 'LOGGED_IN_SALT',   ',.IxlGk=0:7pNpKmHrzL_:Q5B4d_@(F3[Ivp$&}9mAto:xi__vMlFn(J$b3,xDKN' );
define( 'NONCE_SALT',       '~I41iZdM(<icT{jJMpS*6m]r*}tV7[YhEAU=K[{OF H5>9*IY)(i9i02Y-$)iPiX' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_25';

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
