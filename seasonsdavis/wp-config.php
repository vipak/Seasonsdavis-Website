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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '7un.DE2{)6;I~-Vm/>,;5>5y+D,L%aXII<AItLt/73D.--+JM6oR<DDi0g lSQ.p');
define('SECURE_AUTH_KEY',  '%>X!Z=-qM5ZF6@p.!eKG[MoMTqb4@iPE>m_-jv.gu[3dr{a8>5U-z@CP8-4{$mb:');
define('LOGGED_IN_KEY',    'U%>L+.H?yYc5ln,&CWqG}y<8%;uXD<.|~(<G #xli}g1I_5[uVWA~]op:0npbuD2');
define('NONCE_KEY',        'vT|gF,&Pyus7@4 5#_:PE$`p%~[EhPOUY^Ev!](O!<.)i#n!F4>H1`&y^M;MHV=H');
define('AUTH_SALT',        '%m!hqVnzK57`*`huwHd|hkE<tUyvtuQZ6NfT_[x4GDh18P#cjw}:`FA}a)RqL%uQ');
define('SECURE_AUTH_SALT', 'W{a-ANF}YjT ui)1.#ps#a-?df5!sX!}#p-.&jAYn#GH;8%F.g|1T)#DTj[U~S>O');
define('LOGGED_IN_SALT',   ':gXHbUK1lOJ.:,vTfv;ro`<LNiqOn!4n-^r4$?Wgs8},|m450WJT{h{O(^Z-;g`W');
define('NONCE_SALT',       '}:My``-YfG7MVUPJtx{a!p,rg<7559-5JynD7S8Sf%{w$~|RxxlEz7c*9wNm,:@^');

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
