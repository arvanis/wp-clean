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
define('DB_NAME', 'project');

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
define('AUTH_KEY',         '$ISs%&ZHU{:a|T|dR:W>+IHY*jcY~.^hu7(O&i31)>v9<E7Rfn%(5tKwe7D)0n``');
define('SECURE_AUTH_KEY',  'oUQi;#,ny#V1(-FEKl3]*PD?HR^<5MS-}K&aT!Np=>l^G1JK-ANR<wje:xDS[hBw');
define('LOGGED_IN_KEY',    '6CVbsaw6lDmgT8c~ID1,aL:CC,YI8]qb4-&bv3+/4:S3z#t-V;^hqfoL}5jF{Xb1');
define('NONCE_KEY',        'b-TnEvBi5ZhKTWy(fd71|mIw&~Sm/N)wl.lox |VK^B1+opn_hv+ Aq_j&gM~A/V');
define('AUTH_SALT',        ',=5;<7&!i%j6B7.<+(A7Fubc:4 o4<.xs.woFL`aX+}e%7:T~Zjcp dEM,qLboj!');
define('SECURE_AUTH_SALT', 'P2Zz,9 z_~a4QyHS`Nd7@mWb4*%{sb1D3?2n}I(a^][Ed_exH~2:?UxBF2L}W):t');
define('LOGGED_IN_SALT',   '9=}5CxxlQwMWo.BCWvZ04$FQ(EfNEt=HhhP.UQ}8Dq:?)/tZ_QrHm9#&MkTndbJV');
define('NONCE_SALT',       'PQ_Fh:fg5(MkGCF*y({<K+u&||lLMM5CH&oMuiBn-[LHusF314Ycz2/MqTzM&s7w');

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
