<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'karinvio_wp420');

/** MySQL database username */
define('DB_USER', 'karinvio_wp420');

/** MySQL database password */
define('DB_PASSWORD', 'pSN0)t1)6g');

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
define('AUTH_KEY',         '5tznbxuq5xikdzlwdwyt6q6njat0nz6aqvs8woulb4ucchw07pphyohltpaq2xcl');
define('SECURE_AUTH_KEY',  '8afbabr1wiibpkh3zwfuiierx9akjvpzyvwtbby1x4u56cgdsbbpo29gebk5daev');
define('LOGGED_IN_KEY',    '77pdrkufbyoml7tuarlf9akrg6rmvbujcc3v0vczh5aop3xkpp5j3wn9ctnytmhy');
define('NONCE_KEY',        '4z3xcr3k57pppmz9r1ocvkttx3zqkxt7fifrgwx8fdxsawetqniv6rktcj08wsrw');
define('AUTH_SALT',        'sg95judmg5t1eqfg03oj9lyyudrswpyiqotcpw9qtyc0h0qfz4drvre6wvnfpgvt');
define('SECURE_AUTH_SALT', 'gqermwhvobdrs9ygjdzndsyopmwavklioyypwlwuqggwrxydsaamafqfq4pe0ir3');
define('LOGGED_IN_SALT',   'jgkswdt9suimjbb2d2vvds2kvyluhhry6mnojtffx5d31dnnvhzy65fcxuimf6r9');
define('NONCE_SALT',       'd1cjppgvrikg6mdpliyhhfxfevpf2jdjac0tdw5lthaguktl4hzdbwvofkuq90dt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wppo_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
