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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

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
define('AUTH_KEY',         '-v*iU<]s/6qRd8$`g&gV|:~]p!#}-;vI:X09>-A&h!Z&7wqc>JP$cKn q!X&{~q:');
define('SECURE_AUTH_KEY',  '`9j=Qm(B-k`G^nLOq7yV;dC%Byj-]2zYt7_F/0,A3-~EAC:s_L?S/0H#M!F{75W@');
define('LOGGED_IN_KEY',    'CmO(uy+Nyw64OY?[DN+DYj7~(=}|h4<f<0_c3VXk{-Fi`QJ8Hi5>djrCXaA)te5^');
define('NONCE_KEY',        '_{K3tfOc`72=Y(%=6:jodXX@rqyva#b9Dq-z>-psm{!qlU5ogy< M#b<&Yxwi[b<');
define('AUTH_SALT',        '92bnqdrneO7X(vS[qy^II&<PK$k:BmMXNuR?DA[c &8U}lvJV8d^+g+{W-lgm-+~');
define('SECURE_AUTH_SALT', ']r4IC-9CP.1sOqtD_0$QnMZn&?-sPY<1^|b_..$Fc}zG5HN JQ{TO|r}[QHcfOAl');
define('LOGGED_IN_SALT',   ',}DbON3:>ocP7/l)`,>O*po&wszl-+PvG6Efo)~W7M@^+s7Y<_|.y5-b:81JuQ?*');
define('NONCE_SALT',       'nDV6VM+BH_`Ug-yMEUz0mQe4(eUV4~_tMsVY*2^CWIxt!;hX>fkHCpf7gn]=s_<#');
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
