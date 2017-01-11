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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'mariadb');

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
define('AUTH_KEY',         'q+_<hgi~wd:[|%qW3%-W|V+oXhIahsT!,$Xo_f};+p%fI3G6^yAP]H> 1:6g>v<-');
define('SECURE_AUTH_KEY',  '8QuVOq]L4Zr!mk;G/{_g-%)qcXjn2ex.( 9,K |(j]RlJm ff4s9V($6$<Jr(hI=');
define('LOGGED_IN_KEY',    '`PFN|fO{5m-Ox?d`+rS)?vS(k9VIam+/9aGYnKl)<2[;||M>*!4sL~<fy~B6tJdZ');
define('NONCE_KEY',        'w+4,l9uj-:x_^|}i^V%f~C<S[fqv}au AQun~0ApQxL<uVNbL{apH5e [VHmV046');
define('AUTH_SALT',        'L#Aw4,t2=W0*Y00x8nNAyuE2qZW48dR/r/K#?+4]McZ~7~BwwrU<v3^GOtb%5$ON');
define('SECURE_AUTH_SALT', 'T+b;{tR>LQ3k_g,4X@_):Uw2k75DZEY<>`h>y$9K2YK+3#8+=;?&Bf-AGS0rr.t0');
define('LOGGED_IN_SALT',   'g2bn%+3&2fHlO-&2<O_xuwq5-iMnLBuTFt@}5oyy4fI(_J5[Xsmfr7nV7JmnMYBp');
define('NONCE_SALT',       '!Mot=r,XP?kF_8S|Uxx.xY9>Zhf]m4P(F58|;& F1vPP49 aM+}J^SL~8xF+xYIg');

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
