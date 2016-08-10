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
define('DB_NAME', 'wp_blogbeauty');

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
define('AUTH_KEY',         'Sv]{? =6,Lak-V;T$$(/baHo],?{4@TVx*Y#R`3NCEmpM={~/u&UXmX;u@@!YcKs');
define('SECURE_AUTH_KEY',  'N9&F]%#BDLB5>|Le91)k):(nuRl(htLGVb@*>*yyYdRL^Xq(eH;%YSqy299TYbaa');
define('LOGGED_IN_KEY',    'NAJ1R1qV3,[Qe=H4!K>^a:*q|6lD28apXN^I@J#GZ-h+p`%Z~!CvagX>50=xF`<F');
define('NONCE_KEY',        'YrvfeS0uDN !.$HXbo+o?giPzT9m[WX)Gwd/2oI.Od#(xyKFalyZ$wP8ZyzB=Cz_');
define('AUTH_SALT',        'gqPv0:VEUK1-%>F64o_o>Wi)V7eRT.&qfk +M/VF~Zv}PV;l?[=~joLv/)?tpq08');
define('SECURE_AUTH_SALT', '.8>S%=ubTtcnl;EoZR+!ky]h)*I(cXQ7g5g5RnT5bfGJO^?k3(i74+l{z/$AWz8&');
define('LOGGED_IN_SALT',   'lfh1t>;B2Y<SD2.SBC(^{%9t6$~V^K=l/P^8Ai~<kc?;eHD}iF*C0(zV#hD)5vXJ');
define('NONCE_SALT',       '[I(5@[dc]MzkqoqU=tpG GV_}|;ET^`$C<T83b;yV*=5%rH;hAnOemB:Id8&v=li');

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
