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
define('DB_NAME', 'businessplus');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1');

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
define('AUTH_KEY',         'Q<,5F$LF1Q4Hj|tZJLo:,+Ux-KMYQ4RkPE%/a?#gkI4yXsv/S-ZDU=i%)dxryUG4');
define('SECURE_AUTH_KEY',  'f^9;zlpwqDg5HZI_c`0x$>o i]T(`%T0,5IdnlUK`av>s4S*nWkl~BPf+m7n*kiI');
define('LOGGED_IN_KEY',    '0yI<3gR#%LGAD@?iE@6y[(-jcSUSZ7dySyXC$FS,CDGbFOfq]TW+Bb~.~~Nby5Vf');
define('NONCE_KEY',        's5liU1sKjJf11JL*:3lk.K]gCl[xphOOojKR(gCG-E!s)xV C~>|`5Txa_Y.*!=O');
define('AUTH_SALT',        'sNLE!j*w9rVUGb=i|(4OQI=Ue_qOk+)Lk9gH,VWO(+K}e6?AnAVwO1Mfl=}fyj_`');
define('SECURE_AUTH_SALT', '~=ESb4kt1n[$TGKwuMOkPM6SU~L(|jQm!XOtQW(V9kjjRqT>x:lN]N%?p/<<R4[]');
define('LOGGED_IN_SALT',   'P5(W##lteV)FJ:Nybn~ 1Nu<yaay774_&i%k5k<vBcF5cpWX7i;4.XzFzUyH an*');
define('NONCE_SALT',       'xjFsD5b~l?{Pb?(aaI<*f@|c4U){YHJ3Ii}R+l!yV!-bR^v])4IO(KTcP+?_&A$I');

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
