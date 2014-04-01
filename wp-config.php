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
define('DB_NAME', 'ellenislearning');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Han82obi');

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
define('AUTH_KEY',         'aA(AVv,t,/eIxO>=!a-?h^B*%T?d-. SV-s&BA<O/k6iZG1|M?ea:LS%[{D|i5L|');
define('SECURE_AUTH_KEY',  'jR.8SA,< |}y2rTtIw-<6v{J1]+@(MrQmE3jKZ4QFA~|p8w|gS1PhMqp;,z~`DOy');
define('LOGGED_IN_KEY',    'H`X[6um$f&>[IT}-#J94Lh^lXk#U%Ddq:MV6JI=JrfZ8tt&x+HVlgZ#,YxB9|{LT');
define('NONCE_KEY',        '6~s+m^;Y)PvuX03r-A}r^rl[j+&K=lv8]0[fjaM4I-/lg)L+PU{|al(COC{$f2g;');
define('AUTH_SALT',        '6t1M-5`^|89$na^X2pHX om#*g.l=n^q+<y=k;mN*$$ywptj<)+gj^N[#-({KnZB');
define('SECURE_AUTH_SALT', '5MNB$l&+Z91 (XgBpsT}py;O{xc9a[R6UrIF|R$9]}5JHy`-Z)~u|/q[LDhVPf|i');
define('LOGGED_IN_SALT',   'iqsP[E-|.2vZHk>+&[|xP7A2[PmZtQfF#@9OV0/q (.UY]XkgoY@X+^&1:76*Qh{');
define('NONCE_SALT',       'i}(0tP)drav[H.b_~ ]<xph&(?Wr0ym@+al!E0TI#4x{]x~wtAVHKTM^[%hT3N`.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
