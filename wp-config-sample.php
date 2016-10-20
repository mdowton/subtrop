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
define('DB_NAME', 'surina');

/** MySQL database username */
define('DB_USER', 'Surina');

/** MySQL database password */
define('DB_PASSWORD', 'e*4E9-Z3%Vddg*!A');

/** MySQL hostname */
define('DB_HOST', 'epic-mysql-vm.cloudapp.net:3306');

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
define('AUTH_KEY',         ' ?oba%IhnN5OtMr&u1oFJ*_6*3gpo4jzfk8tZi,7UwlZ0M1`ZU!J`h#sIt$%~h4*');
define('SECURE_AUTH_KEY',  '5K0Ip7/x1RB3%ZX:V@*b9ORP B937!:_*}e,!yw6[xmj$F9@!iOLL:36x/% .CP?');
define('LOGGED_IN_KEY',    '6=Rfk:_6/<!yPA8mmWhI}WSyZlQyA}Hh!p*M%h>`M(VPM6s<~FQsdp=AYCnK=5cT');
define('NONCE_KEY',        'U[-S]}Q;NASSGH}59r+3=F`kg8C{a,yLsOLo?7`PM0B?9O~C3qqaC7vyCxcKUM4*');
define('AUTH_SALT',        '-4T/{Z~h-2g{dbEb|9l3D[B^V#_?s~:O1.fP@nk!=nxJeQ&|;hqyc  3~=ii1uS#');
define('SECURE_AUTH_SALT', '$f6}LJ@11N[?qNm~h9epg?YWGfpW~:{Kxcl;fjvF2c}<n/$L]I<qo&Lw9mU^wsv7');
define('LOGGED_IN_SALT',   'Q-~vGQu_c4quZ68Uh_:LgL||,w1J:+_;D]5omV#,` WihMcu{^L=Zu~XX^WyhaEk');
define('NONCE_SALT',       '=zph,lXqJ(8}ykcY;Id5)GD9a}5ShL@@l!p,5$)=OdE,cf@hz57+3kXgLhW NO:T');

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
