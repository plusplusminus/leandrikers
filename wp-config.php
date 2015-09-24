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
define('DB_NAME', 'leandrikers');

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
define('AUTH_KEY',         ' v%${jfl&LbCgZNoIbI:!$ *7N[j7(9}1Av[FXq^u5z}q-<_Tu&MNOMU1kC!*e4N');
define('SECURE_AUTH_KEY',  'ql^t>G6%eP~ZN;TOLbf9wRzt9vgHy7F!nJsDq12Ca(i&dRXJ<~x|A~%U-LHaJ?Z ');
define('LOGGED_IN_KEY',    'X-$%K]BKihW+%W_+eb%:^- /bJi3VsjibF%kD#@}MQ;tbe{lai>3T9yP3Nw(1*^w');
define('NONCE_KEY',        '~5n#ED6>|Rq?[}?2ZZ(7ifA j^ib%@s^c8s2>=C<;;vWk.Yv`ultfV@TfaJloOM7');
define('AUTH_SALT',        'eukuu!dx3n@8la5EBnBfr*f?[7h%JHg;W4Zewce%E6Aiq9&T{UPNob8^<r0k0wVI');
define('SECURE_AUTH_SALT', 'u{PaJo=fe`e:bN1&s-2LnPiobHD<Wc [zV`rz2Kv(=VPV#sTAo<ImRG]H5)TDZ @');
define('LOGGED_IN_SALT',   'T4-{TBk_Oph9eMp*I3|_*l~+B5&d0C%5eWZ/ljVkyB]n(|1;22PX7I6S_}} T&cX');
define('NONCE_SALT',       '}{FGX#inI3>&3%v=pFmSyE~LdWS&H5G=uJ+YC<~J#nJZ$:)5Lc}39e6(}bh:4oX#');

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
