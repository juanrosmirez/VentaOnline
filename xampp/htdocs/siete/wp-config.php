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
define('DB_NAME', 'app');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'ps^Sf>~rlg|aV3oTffx)qq~M:Nt(}#Qxb?4WD|~Yw1s}q5Cu}z+!9T%00?To2}9?');
define('SECURE_AUTH_KEY',  '9+[LmY+5=EWRgBZ(V{j`kuoJ4.5uG(sKT5!g%Zge/E>rd6)[RQ>=T$+Vv]Myd)O5');
define('LOGGED_IN_KEY',    '`Az#{+DgW63bF-(WgfxqEIPRt4r]Oo;&<5/~{?/Y-g{UdSl{I#AeS{-kUBK!S,`7');
define('NONCE_KEY',        'w Y{HD0l1/BtpoVi*%j`tA8os8U)Rx!@ H]S2Vk$g7NUm}UwG=tKyz4rNHpCYp?Z');
define('AUTH_SALT',        'd<Ac5w.Ccd^~p!E/Et)2|-k&p P/:iPE<{I4Y+(jbc1n tqn39aXx]I*VxIDy@Ac');
define('SECURE_AUTH_SALT', 'MMX-]<Y+Y$iXX>_KXTVpqD@n{WNu~k7y~k76*lwVxhVIyRg<OiCK,*-V/9y#GGj^');
define('LOGGED_IN_SALT',   'rVwOvw*^r z;+tk+:{eLD.)Dc6?}e`<&A4g4CxJM12,k&c [=7uUj1VB.^mx twd');
define('NONCE_SALT',       'W,aPB#xi8OD@D?5VZh%eT6V7XgvpZH9AF9r:<xk6;0eN}`j~E/NVoi+,Mj :K?`J');

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
