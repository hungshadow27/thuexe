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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thuexe' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '}W5/hae#x;UBmexxM.`E[kP^b:0+[N;ZB`k#Ab(,+MN+][[!Idd;=D?pbs>B+W@z' );
define( 'SECURE_AUTH_KEY',  'sGbAkI|:j;< J)GBk/kcWiSYD=#DKmo/Eke}4Lh/Viu13J2]iky>5z]ZR,,u~F,[' );
define( 'LOGGED_IN_KEY',    'ynq8FC<kD;`wuSuDyGsd%6@FP=zw3z4#8l[B_l1(};h)V<4Trrk7!~vD2sZ(/v>P' );
define( 'NONCE_KEY',        'P)=v*dY%0gN&p5v1#Xe_#HjlJ`&<.#HuceA{t2gz[Helnc2g[[g`_]d6PKZ^.q!@' );
define( 'AUTH_SALT',        'W7{HH$y3@=;cPDTJme#DQ9Jv?*0.{HxaeRng386b[_xixv?-ibs K?<>}`u_UK&n' );
define( 'SECURE_AUTH_SALT', '^?:I)h`+a!e.^$u(FpKiT2u<&4chB*W>dY#X`R^Il{t%iiZw;?6$pwE/M<g9A17`' );
define( 'LOGGED_IN_SALT',   'g>icG*:;FZ/UG,z0:!opiHe]Po:}N:k2nG~uA!e)naXEJbVB0}ZAeSXMMGBa7RkU' );
define( 'NONCE_SALT',       '6g79CK7{jA7q*kS(LSSTY-;W,l>q^](>|,rD.qDur-O^da?ELjmlk%GUB;e!yCR<' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
