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
define('DB_NAME', 'easy');

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
define('AUTH_KEY',         'R[+2JIItAH;xeq#/V8*@0m*@wT_*|4*%%<o;cT2MZJC06SxF0];7qmy5}5FTcfiL');
define('SECURE_AUTH_KEY',  '^XThw1^x7jM%>&Csm@sn|&.Q]8n >wI!/WFi@mQ~ffpru&]M7Pne![Y_yd-0~=`d');
define('LOGGED_IN_KEY',    'n|tCstY)Yad4;,_]$i%~Xf4z]pKk7l2+#+7ggsWZ[s4g#z_SqSe6}U[5)8/`B/c$');
define('NONCE_KEY',        ';_4 jfV?8v.CfIGbI7.THIR&sNOhg Gs]EAYSC2m5D~+ArE!-&,>|-<|tX3qb4ck');
define('AUTH_SALT',        '!j*L+d3Q=+Q:}|||6gK>g^v =H<jJ0S^!:]N%vi`~W:av|x7jG# vcboUO$3~eRJ');
define('SECURE_AUTH_SALT', '8>iy+^R&uR=_R|2z74vJMa:j.n5[-`6gY$S`1vxxa-x[ N#M]q,/L:Zlm+v5+sAE');
define('LOGGED_IN_SALT',   'G rSTh,:3r]<m/78!:-]nwj?Rpw*E/r=ISj`I/;.B}h.elS++0r!] {-+1r(++LJ');
define('NONCE_SALT',       'UKh,1DZFU}d/24cpCzc5g;qf+^;V.h|B=H+d|2$VU}_eg]Z_g1Zu^G~%c4@s 4Ww');

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
define( 'WP_CONTENT_URL', 'http://localhost:8888/easy/wp-content' );
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/wp/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

