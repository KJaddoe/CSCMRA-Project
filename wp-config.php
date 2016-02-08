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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/var/www/html/school/cscmra/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'cscmra');

/** MySQL database username */
define('DB_USER', 'cscmra');

/** MySQL database password */
define('DB_PASSWORD', 'bZBXzWVBDPMJkcaW');

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
define('AUTH_KEY',         'j_SmxN]FDiiAmE2duT(5,Gz9=H?Fe<xm2x-v-(xpd;ys-fxN|0H%ju,U=UA-6Q>+');
define('SECURE_AUTH_KEY',  'DT;B$^MRM>_j` (L@j@ ?R?IZM0(L83~+#%.cjsi/Kf~ )dg]1gG9dmv.@|FMQ;_');
define('LOGGED_IN_KEY',    'Oh;(+C4-W3Y[T~N3 l-JCto={*|K]IGz0)OZXnlOpO#y8{Q8Ei@T<|c?h#h4Nv!o');
define('NONCE_KEY',        'k.LP=fL.dZ>;>6?UY+5fq]IC4@r=+0Ibd?+<_u^9=+yGA@ZAxym7fHqHZ@^0mU2w');
define('AUTH_SALT',        'j#>7`<c|hUD[[P)WQMn_#=LDE1Rf3dpo-WGLL<r+gg`Os3_ esdbKQm`jBOQwcIR');
define('SECURE_AUTH_SALT', '[ZxMx4mY]63J<*zU}1x/}SISCFj$Hw^$16U>j?j&k7SX`--eQj)kM_1-B*s6Vj;Y');
define('LOGGED_IN_SALT',   'AyGyUoZw%;g={8p^5qAXA+aO}c=[B+}oGkRF8Y1 C7bnwR=(=X<#~fZ_zL+NC-Le');
define('NONCE_SALT',       'tC0{b0)EQwS<K,`S/C6}XcW*:,&Hr{a(7Hy1$lf,t:B)` a}.?1y#&Yk3y?Hb0<^');

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
