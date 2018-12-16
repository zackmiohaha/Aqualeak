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
define('DB_NAME', 'aqualeak');

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
define('AUTH_KEY',         'K}H}oP30,+ZUnX?pXkAsHL{9ELCiRF~&I]kvG*&U!]%&Q%t(]&8U,@Kkip_sWO5L');
define('SECURE_AUTH_KEY',  'SG)1,Iq$Ldknv,9Ez5TszXj1C5W)r=JkCx.G?O.G8(?jw53i@IBs!kg_>uK4._A-');
define('LOGGED_IN_KEY',    'y}5?E&JIhG*[o72_X+C5LCT@<.`<?8QUyAEnu>j}SZdc<78eieb=XH(p!;iNMZW*');
define('NONCE_KEY',        '%:T^u[Q 5?T?:AaZ pxe(bHZX&}}C/O):cC^(%b|0^r_UX!k8DbhSnFG%ew{@(Ho');
define('AUTH_SALT',        'Y{sX7)lE)?|9x2cC))T?4TZ| Un(U;|~2r3|[D)gw%3rB(8V{;n>Y@h}=QfyQki9');
define('SECURE_AUTH_SALT', ':tj/#.F~&f(:) YX@~>eOA%oRYTU4{fkU~Q{)M-G7{Y^(~wHV{MJ:RE,>?A2;5Ui');
define('LOGGED_IN_SALT',   ' L,-D6p.aTmpY*4Ly>+Sz~>u$3E3|e`Qj~BNlmni^r{=hu8+A&l&g;{/DDGOUAOw');
define('NONCE_SALT',       'Yt?4X-3:DN-Z)x;fg#7= hM>jKf>_lHQH+0)G|^p@S}|M+y_]D!jIc-C3%m{k}(^');

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
