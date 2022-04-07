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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'silverline' );

/** Database username */
define( 'DB_USER', 'silverline' );

/** Database password */
define( 'DB_PASSWORD', 'Devtest123@!' );

/** Database hostname */
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
define( 'AUTH_KEY',         'dX{SNc{yw3gD)@YN5fpBE+uGMF3>D0m~+~/VVa`_*bh2@mPR<^.Xj4DQQKt6C--*' );
define( 'SECURE_AUTH_KEY',  'a]}yIA*Rd,poGHT|$R1S.9!,F4[L+HJO6a)1?=6V$/<4MAgF{R(sNx/GS6XZ_~2X' );
define( 'LOGGED_IN_KEY',    'Ql3}qwK#5PjVDxUN9z. Cl(1XgLc6/qhD]Ufy80R6!Y~F-m#[Wp99&=p#,=zz=[R' );
define( 'NONCE_KEY',        'gs.4`1wpum dV3=#$i+H&h _y@y-*t>m7^|j/pF%;aB%1a>,2{4uxPEHodJ{^s~9' );
define( 'AUTH_SALT',        '98Y 2N+LAK{|-c8:mm``jNjvvPq_W*X4V;^lU=<$[8)z|-mEb| c3TJ*~USij1`H' );
define( 'SECURE_AUTH_SALT', '>NLrggfvtpXxELza]w5H21i[:4p*loSyoJ=p]_x^4&_d.S{m] K?m^F~16ei%_{8' );
define( 'LOGGED_IN_SALT',   'Ay=wF59 2J]u?C@GhtzD&^a/&Avb:wP55`Scuj?6X7vdEi0th|qem6G$nBaul[C_' );
define( 'NONCE_SALT',       'JV.l|&{bS^vhoj<ALE:@X!5z%/P:{4{ ZIp@-^ xY*45xU#.U0+w$sJdF,P73b?*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sl_';

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

