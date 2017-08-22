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
define('DB_NAME', 'website');

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
define('AUTH_KEY',         'C[0?vq|XIdAw6zE$xfB56:}YDU5LGi/@~(Xl9ls*[zqMrU~MGG$gr_?;p*7r[?f}');
define('SECURE_AUTH_KEY',  'h}S=,d@-MIWY+|x17a(<zqbhi4QwlW|o]A>kumX1j[Hn9(Oar3n9]RBe`h!`Gl#@');
define('LOGGED_IN_KEY',    ')&wAcG:l#XrFM:dBbvh`ef$a&)T#Z;>Q$k5/fHrB+_U`g!-Je40(i*U5Vg;nA=+G');
define('NONCE_KEY',        '-9u}l51GG3444l=IaD@( iDtf$aB-!-P[dyK<EbQQ>O/fRgJ  N(nA#fOeeQ</E/');
define('AUTH_SALT',        'f5]Sj|~;?drEznd=BP73cf@kU~-wQ^?gOKIRCY3o-LtP,i3C({}z{3$sU^mU=,@/');
define('SECURE_AUTH_SALT', '<O]58b~Mq8i9rb-EI|(wwG|/+nYy!JFK:Nmf3Z5MMejPEkzUc*nZB`;%_BVyHo[t');
define('LOGGED_IN_SALT',   '+VC{`9c*?]`t)!6F9I{K()91lb{D;[RwjVbI+ZD4@#nItl^U}(a=ckHXr*6l;-u-');
define('NONCE_SALT',       'Ou+9@FiU,O,Q;iYTE{?+w 7=}tvr1%44^SYPr-UPRAWSZ[spjbt<9!7>`r[1[)zm');

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
