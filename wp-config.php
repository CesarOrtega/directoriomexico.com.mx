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
define('DB_NAME', 'directoriomexico_com_mx');

/** MySQL database username */
define('DB_USER', 'ortegon000');

/** MySQL database password */
define('DB_PASSWORD', 'l3M9f6Wa');

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
define('AUTH_KEY',         '6Q?_3p6*.NKZ;1#-Dr2v/T#}{hx(*TIg)&1_k`f_y.1_jg KhTxMn/)~R0P@s2WF');
define('SECURE_AUTH_KEY',  'O7#asH?A/W3%R>XKU-<L|]#-!dsF(/yxp@QG(BiExx^+W!8e?R=N?n$^Yq;SkUKz');
define('LOGGED_IN_KEY',    ')MOcX&RrR2LO[xUUQ]JwH &hm%h:b-5cC?li[YtRcQ.aymp&!C=0/My3D{48_IhC');
define('NONCE_KEY',        ' r=>PR5[fBpZw/Yn<Ls/9] 5W]*?}qZ!8w0=[-4d0M3qZ)U|@5/rLLkY4F}sgU3o');
define('AUTH_SALT',        '*9-X~rDJ<D^I+p.V}H9_/Fm[yLfUvPzk*^!Upc:#$lP-1;RLm%b|y0vmWMc rd@,');
define('SECURE_AUTH_SALT', '9w7}U?#opvXtuW~#Fh$bv(,P|61f)PxxmXZ.:m]5?LwjG#(>(Au`FJl+3(L=z:p9');
define('LOGGED_IN_SALT',   ']%f8-_>!_=dx/lZG:)4= >ygjIyz57U[%1`fUgTpuny^x5+|zQD[6+oC3qe[v1?,');
define('NONCE_SALT',       '!r(v34^}GAu&vMSu->r0n,C&g^Lm->4;23]`Tww)L~!$Xl#Z!Rf/64G9#jno^;L#');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'FS_METHOD', 'ftpext' );
define( 'FTP_BASE', '/' );
define( 'FTP_CONTENT_DIR', '/wp-content/' );
define( 'FTP_PLUGIN_DIR ', '/wp-content/plugins/' );
// define( 'FTP_PUBKEY', '/home/username/.ssh/id_rsa.pub' );
// define( 'FTP_PRIKEY', '/home/username/.ssh/id_rsa' );
define( 'FTP_USER', 'username' );
define( 'FTP_PASS', 'password'	 );
// define( 'FTP_HOST', 'ftp.example.org' );
// define( 'FTP_SSL', false );