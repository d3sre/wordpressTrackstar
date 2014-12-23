<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C9c*|xsY%(1+Wo>Ae3NO?#HdL(#(VGo@`GhKv0(9 t{>#%@gPkaNiGK|Qe5/Lk9=');
define('SECURE_AUTH_KEY',  ';sV),%LSIFDQ@UqNDTSSJ/72/]P00<eFgg=EEQc?Dr%=H,6qo`GgnV+/q]E$J&Wy');
define('LOGGED_IN_KEY',    'nSC{EeD2nh&_3%]pwVJu9-vbO@wwt+V[MJ4Cu<cN:-6L|_`+PH`(24[e|%|jl9Ag');
define('NONCE_KEY',        'd0n9Vm;VsRNs*O](nh]5e8 vw]Mt2LT8-#&WUrT7 ^yk5=-4LO4eE.bK5zeL5c0q');
define('AUTH_SALT',        '&cCS.~l]Xn* g3mI.>+,uPlUm^}:gC9wFdU=t(f q}+`Z8igVBZUYQ.{f[i[[u/x');
define('SECURE_AUTH_SALT', '@mj=>k+L:)-67~oI07q2CB-;oO)o5>xoa0W<Y!oLQvrJ#KXy4jwV*^RY-HrZye+^');
define('LOGGED_IN_SALT',   'xndkPdD)^BX6/#%lx.e$)dn^:!g{6.=$HRz[` MjWTU3Jj>yH6{*KYU)u|GQovu]');
define('NONCE_SALT',       ';[BenRaGg2,Zobbn}&lk{[Dp})`GBy~~w$A9CONTs=h0Wc_Xey>}Uhpgt c6b+x3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');