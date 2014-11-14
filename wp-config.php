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
define('DB_NAME', 'invitee');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'bh4V)nZh|qJ8pEp)-1U{7Lz~!|YXW-aw$@?WuO.pfZ${%.!ioX)3|uec:4}DMt7|');
define('SECURE_AUTH_KEY',  '|S-3-ND.mc(fB+YDG2_L|*gXPNhczpb5[<RZ_J=8Wann(aY:q_CJx7XnP s(Bvxe');
define('LOGGED_IN_KEY',    '>KZ6Mn[{w%S{^;76VQ}q-:.>Ht+0 fTwx+lHJTboq!-=zUVF/hqS:+D91__lzP?}');
define('NONCE_KEY',        '%$r}&AVos*?O[|,R|DC]U7KBq=^&{1UUKy|71~3bB? d:^Pd%KvF*I@~VeO4InaW');
define('AUTH_SALT',        'E9%2VYN5+w|n3/oH3|e+OO1&fJy@G6#m|1kQD76L[ZV-lN&rD}L>cO4%T9,Cr[i`');
define('SECURE_AUTH_SALT', 't+8{?dfcI]H[SL<!YZT6U:FFxf:+xt~_r6uND$qU)[ r8){^cEPa:M?#.uzOH,8W');
define('LOGGED_IN_SALT',   'V~#8OkNZYDx7|A@]#jK8<ZT&x<|aoHdWr^(FGy(^=px}fF 4yc-x-roA1KgFU)h(');
define('NONCE_SALT',       'wHW4`^N< .eQ,!Ui&~0HU_7)tJ?H?k ;f7|RUxA[u}c-_WN-cboh8^o&%4v7^8]p');

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
