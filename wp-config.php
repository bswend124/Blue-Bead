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
define('DB_NAME', 'bluebead');

/** MySQL database username */
define('DB_USER', 'bluebead2');

/** MySQL database password */
define('DB_PASSWORD', 'farmhouse');

/** MySQL hostname */
define('DB_HOST', 'csql.solarus.net');

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
define('AUTH_KEY',         '8K*}A.{hlgxUG7 F?&Q-Qv%rH(;G^g^,Bf<)-vXI;QRG.]a1Tq)^b:c$`UILqX7]');
define('SECURE_AUTH_KEY',  '-q^o8FQ6{!m<U9aG)O$1m1bVlk}M|f .4n}o)~Q1==g+4/.e_ B!db/v<+$BgR&B');
define('LOGGED_IN_KEY',    '+5W9.o`-?k_1eFGqDm{VL:)f%i}>I=78+H}`Ys,@(:IG09K}4Q$|G&b{H_L*~BYz');
define('NONCE_KEY',        'Qeu3`pj,?#0)g[,+qesE_K,kbABQeMo128w85- Z{;a{q{?^i^ib$WKI(X&Ux&/v');
define('AUTH_SALT',        'J4h[5VQ=-t1N9aF<7*x=W;q+j3_t$oO;6w/D#s+3l+ur^S4M_Q+idFV&0F*6-1D6');
define('SECURE_AUTH_SALT', '0{Ab yZ/>?([=UD+}MEdtdOm>H7f$9Z_kXQ-|L+-yZ52t6csG;+duc9drkCjMV.x');
define('LOGGED_IN_SALT',   '0-0CmGq{Xx=S3n=EiQT7r3D6Fv2I}_UrPYIafVjf}}/~Z&5=7]t$Jf/B}a+j=xYp');
define('NONCE_SALT',       'NW3ln.+Zpi|J!G_14R4Y:E$}(6WT4xlQ_P;M<49$W+a^(N(a.u8sD-j{-o#dp%=:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bluebeadwp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
