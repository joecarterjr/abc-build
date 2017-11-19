<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'abc_site');

/** MySQL database username */
define('DB_USER', 'abc_site_user');

/** MySQL database password */
define('DB_PASSWORD', 'jKPL4GZQqbE4MYb6');

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
define('AUTH_KEY',         '@tb10+d295h)is[F`p@y<2QM1bvzRP7.M:Uts-f2(fj2;fE DT(#B%m@;Cz<{(Du');
define('SECURE_AUTH_KEY',  '_qLW+XDr|ppuROXUht8&c8VQ+eiVr,(&Dw^hI.>hJ%$Z`.O#7xnLx?m~e50du&8;');
define('LOGGED_IN_KEY',    'upNP~<c.e@orc#Vrm8G/Mn:v/ew4ZQ8-;!q;MVq+=3Y<WkRyP0pR|YmcAF|-;2RT');
define('NONCE_KEY',        'DpJR`*YJ5!UN&#}56DEGvvgt&rd;4|dmL+TiKx^o=*{v*&Zd/?}N5VJ4d:Nyv;#S');
define('AUTH_SALT',        '9Znvd-HQWIj iqm207~;6K67m@,SI{y&GLtm18^IR-`75RBeB<?zz54d_?wHJ]H ');
define('SECURE_AUTH_SALT', 'O(_{Tni886,w yd9dOi+EZ=i_|sf2Ay+~mP,aS/+tr]xGZcv(ah`Ecp@(R>_+h;!');
define('LOGGED_IN_SALT',   ':|<@zt+-z$Y_g=mTm`dO~T5T9e0j9hGebQ6hYco;);9o5^n{byvF&kA5KB>_x8gw');
define('NONCE_SALT',       'qRC.}:qVWqSvbE*QNe&*6rK=DJ|GSUa<(VNKyaYr.QO{^G)d}+$9!]M.Dq-!M+-<');

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
