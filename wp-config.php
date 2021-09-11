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
define( 'DB_NAME', 'procoders' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'cOzU#S&,HCdLj:x=]dMd|Gv@F2)]GXu}QlY-bx T3TXiaY=LcRlust8N{WJyiGWQ' );
define( 'SECURE_AUTH_KEY',  'MoYWkP1$k+:3X@>IPO/w>wt~sM!1%>I} 96s?irz6NCG+y +E02O2s)%t6Z{G>{w' );
define( 'LOGGED_IN_KEY',    'm4gm~?~P4h*55|nij7z->< X{/qA4aadMfjloG?mmoVJGnIR1rrJqY<NH8S;Bv56' );
define( 'NONCE_KEY',        'SADAOHA;dw51o@)<zwrG<9igAKu@J%TxrMOW2$eqhx:h]f}.vDX+e ~*`M^`Y=*]' );
define( 'AUTH_SALT',        'p#Q*b5/h.>CMUmmhw=[Op6f2#ujR0}H?]1Pfn6g?@_T0d*^ES!GO41h@5o}0=)jC' );
define( 'SECURE_AUTH_SALT', '. #g<BH%Qdie{Os-B>]jd0&7]JbWSAf`X7j;~9y]Zx2;sBFpi`U6gwL[[h^;3BRY' );
define( 'LOGGED_IN_SALT',   '7xDElYb`,2xE&zh.fE(iz1Bp2*Zxp.q^cIndSe[yjk:p4^@_1{y[OIKZ<oE_a.f`' );
define( 'NONCE_SALT',       '#0evR_b35X/C-Z(E6SSZS%r(bg=)vbF/,9o2%]@$eKK>B-&S{myNRgi%7fuzn7Q1' );

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
