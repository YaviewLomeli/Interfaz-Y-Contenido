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
define('DB_NAME', 'nextu');

/** MySQL database username */
define('DB_USER', 'YaviewLomeli');

/** MySQL database password */
define('DB_PASSWORD', 'soyunhijodeDios');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '6fiE,+aAXP/Cms6,DDSzN%5c1aPVB9n(Q#l}!4W%e+_ZqlQfsa(S5kS5Y^QO&dKG');
define('SECURE_AUTH_KEY',  '3[>bVv[+P&`AMb#nUl?b0q5Q;B}svGe_tp#*; ]nFrZ7Z{1*j}I`^J&r$<r0tmbd');
define('LOGGED_IN_KEY',    '?*fz+2)8UJ(0:CXY9v 2[<uEmJQpDUW=z{#E`gf+#|^Gz_jz/Ls;ka&%j>R@Yk{j');
define('NONCE_KEY',        'd>_09^,_a+*umf!}p@&6ta(Bcce5y7pu`+7zfgke4jX?>WJ1@3`db^wEDfBO(08G');
define('AUTH_SALT',        '6$aS{x&U*0[#e{?HVu*?^g}%{&tOlYu_O=Qbs(05}[[XEmEI`f*$uz3sxcw:?r0A');
define('SECURE_AUTH_SALT', 'iY*4#r^y9duY[{ viRGVXt3bQFa`e6C+9wl5giRD]Wt!4veH7}4-`T0m}D)Udegx');
define('LOGGED_IN_SALT',   'e13=C{zu?M}PGZ!Z<@d=oI!7eHTaJH[Q#Hu#^Pt@46XpX(**JJ+Wdk82{NC}+~UK');
define('NONCE_SALT',       '$lB+^*<0gPWnH$!~_}aRSG</]h+Z&,hOW<U$5g?pPF5TAtY3~3JduDOz2r^JEo|6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
