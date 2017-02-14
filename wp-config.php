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
define('DB_NAME', 'bootstrap_to_wp_1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'D)|I3:[o6vJ-JpZpJv9F7D~7(Fg6jr/;~J3PH.NV}mn(R//]Rc``-oLZv|ZZkpM7');
define('SECURE_AUTH_KEY',  'M5R<<`mw9[{tOz?ZUt_]H^N5c>eByuQ68`7Au9J[>1iYWH0KE[=R1xO%VLxn~(A4');
define('LOGGED_IN_KEY',    'Rz$F~{.^k2afRh{?F>PdJe^MKZl6OutQr0h%mX,Dk;k:0!h$1$c;7*71*}J(hPA3');
define('NONCE_KEY',        'NM $}&[2Jq#q)w{QjR|wPIAjdo+PIm7#^lP~MyB{ci0EdnasOqA!ToT#Mc^YLZ z');
define('AUTH_SALT',        'zY;~evcKo39?}c)st*@!x;CQH:hg`OdPVFzWV7Rj?kb`0N5^h(Upo6s1s(r}oEnS');
define('SECURE_AUTH_SALT', '/fAS|`Y)&sSK:r2)ua&+1rBX-VLRA=pWVm?A3%e7pVlXT4)j_7yi}SgQBCKVa|qT');
define('LOGGED_IN_SALT',   'PwJ,VaaM=&n{ImW!rpYtC/oBvwJc!@Vdr;YOrX0OKRJzOl9XtPN`#hUYlEZ137Ur');
define('NONCE_SALT',       'Z0_pQ|KE4j9 $hm~d5&B.ehw&,R;UjtA]P,}u49$G@Qq8LX]?yxEqhF_q*vHl(E{');

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
