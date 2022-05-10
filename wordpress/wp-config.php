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
define( 'DB_NAME', 'wp-ecommerce' );

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
define( 'AUTH_KEY',         'r^.=@%mRG%PA@-2`sNR@>2hH99wscAsZlt!KhcUg^ZNrSPSU.L=!<eB;Oz3YKmYx' );
define( 'SECURE_AUTH_KEY',  'swA9]<nE>BndIPeNX9kmO3(s(b^&t-C`HKK 56]T19Ekr{An}Erl54.D:_DqO~?*' );
define( 'LOGGED_IN_KEY',    '^Ox^?K_n7Mr33?F3~x9Vj2U06r ;qbSt|Ym c0Zsg.|]O#&ioc>_FhNSe<4yBxy=' );
define( 'NONCE_KEY',        ']2#D[?(hNnHE6s*%f:`{X51hg*jFDv|=_zQqwm,3Dw2@>aI5p)v I .;|YnIs${I' );
define( 'AUTH_SALT',        ' -oX}1bzpx+Z}bV)n2Z9B;<mTz{Yx4/Di S(z/3>O#)pt{<aHnHYn~BC}@ZOg9@Z' );
define( 'SECURE_AUTH_SALT', 'M}akcq8zdK7G8p2)v<Xn1 <rh19qaIrT/lsRW]D;MjTL/&^Ew(-NRC{k++B^A{nH' );
define( 'LOGGED_IN_SALT',   'T;4f%9smkY|x6m(N$DGYgNE!b5@^PIx@=0Evac& *o!Cu|tV^kvzxc[>zSsp0!8.' );
define( 'NONCE_SALT',       '+A~C1@sektqD*R=tHx#1kXu?KTmSo?EU#bVPS>zb/[5A<:`)o~XL/5GH4?US!]6-' );

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
