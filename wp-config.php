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
define('DB_NAME', 'truenorthrealtor');

/** MySQL database username */
define('DB_USER', 'truenorthrealtor');

/** MySQL database password */
define('DB_PASSWORD', 'pzSnG4C7QmtLx9sP');

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
define('AUTH_KEY',         'X *(]l|F#pzN@`[<^l-m+ }AKbC@?U_q<ypU)-_x,W},(c2gkp#hh{uHl@GUl$1+');
define('SECURE_AUTH_KEY',  'gH;11;&A<[32yQ_* CT85K6Hg1G;/.#J:_a2du!qS#_Zo03/DCFe?ZE.y~U0W^;%');
define('LOGGED_IN_KEY',    'e+R=%H;RkOHd=%Ln]2O,eZ{xu$KwLBVgSbt&rK/_A/N!cp|r-T573Cfz3g|UpYsq');
define('NONCE_KEY',        '8:wZ|.gAO`MEP%)BmK_XlSU^OO1%}-7Bf)tk<n5{Ec  8|Zl,p9|Q`_zD+wE}J>p');
define('AUTH_SALT',        'YBxgg% ?3gV-9Uh%YNg6-V9m+-Yjf^S*apQwo%DK>R_q0]C5*~7pH$gTeKntH>So');
define('SECURE_AUTH_SALT', 'saI *ky-vxr:7q4&oB@8Vrjag{zr+V>^u]10^^{a`l&$+x:gF-x7UjI(yw<gIQq-');
define('LOGGED_IN_SALT',   'TQ;(i,]TSN9T]r-j+ZLa(z;EX,i.lJGI21~ahDj-@--I$7WVG(2QOc#[qP(+N7N4');
define('NONCE_SALT',       'qSmmg.8JhM;#<A-!{bUHQk_-jYtG=teI#H+2s.o-Amqf>Wf*Sg/8lF+DpBElh|uF');

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
