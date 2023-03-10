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
define( 'DB_NAME', 'E-commerceWordPress' );

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
define( 'AUTH_KEY',         'xE$5cOLo6|[>uGg2gEp%1ZXW?[yW~Ovzh8e#V]z.M7 Q[%?7 +nuL)vyibz6H}w9' );
define( 'SECURE_AUTH_KEY',  'TP6U3MBcG9e8*pOZHXo.m|v3,k%Nb.4C8)vm^up*[~C1`_7(zv7R&P&/#)=B;Jkx' );
define( 'LOGGED_IN_KEY',    'ZI?*#J1*YX d+T,x=-W[mUD#w@0?%}}Z/?vE+E[g?QLyG7+gv*UK~}I}Zk4V2m(,' );
define( 'NONCE_KEY',        '@zoI{?nQT9(Sx6b!P,/lwk&T:2KP4]FSf2/-D<g9>;M%qajl_}pm`2/R9FW7`wRC' );
define( 'AUTH_SALT',        '=c,DEvUY0GVDSe&<#7I #J&GckxAI8$;.=1E~DX{#&/qtw@WYq9`zdLBM<c2%[Q-' );
define( 'SECURE_AUTH_SALT', '$}To[L6E(HM%wCZH$J5R1~IOrSXXz}2o/4Ws0OBv(# }h|fAt2aZC:<V`u3j|LfD' );
define( 'LOGGED_IN_SALT',   'yB,Kp2 s`Fn%8B&E~i/)d)OF|l;rjR_}*Xwl^$sLlRZI)p[kVY`xOdN`kx:6S:IM' );
define( 'NONCE_SALT',       '1~7qs=kBv+m9I:-lj/^d/5NJz}(q[`Tw+xO{4}n=[Q|C/802)=3@@*[IcwjY@l(i' );

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
