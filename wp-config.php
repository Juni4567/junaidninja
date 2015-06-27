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
define('DB_NAME', 'junaidninja_db');

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
define('AUTH_KEY',         'OtU^,]^PmDH&)KS~i*TzN |}.vHDXa EXna-r{SF  |;Q83~`,6PfJdk|NWlSgJt');
define('SECURE_AUTH_KEY',  'nIkoi7{cd5sZq!::lE01p~mq@0|Ow:ZOLAdQ){Ji|;Mnj`xFQt63XtW?w&P4UO.C');
define('LOGGED_IN_KEY',    '-<U~Kf,^<-mu%WRAQ*>IK^4M-S>jCwK$ud[7.,vQ_sW$MBNZ9eRTA{`Z{rOb|?-C');
define('NONCE_KEY',        'ly$|*-mRN8-wP{P`q1|sW:fMF_k^gKl]Vm$vD_*wW<z>St64ak$n;WLRTg^j-bY}');
define('AUTH_SALT',        ')+62f:HywqMR:lM0)o-Pt_[x0Yo%+L69#PFA20]4X<N)d.Z@V.&sDp![Gj^w$=#0');
define('SECURE_AUTH_SALT', '%bXC.vWr_AX&eXQYy~o<O!eNCBn`idL+3igshi)Kb9837piq`FBbWEeVSQG/20dz');
define('LOGGED_IN_SALT',   '?R6!t!|+KL-T+$zz9D}[2P3Xt(T|OEFE,af>cDWn+et!nb<]Z:tohrJ!.|4*7?Wy');
define('NONCE_SALT',       'a7f,q-p%CslUy+2]L=Au=:+OyYV[m4b/h5fo+cf#+*JJZP2@m[+968m*q^W:EK`o');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_jn_';

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
