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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'reds1234' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=dOcpZ&W*zpVBc J:AB;ZH]1RpO^5FeO!/6)+vA8Py${%>|@`Z!]KV&OyXD ?Lgf' );
define( 'SECURE_AUTH_KEY',  'cOcF2PLQW<y%:d4y}HSmEE9[>j-7[<PsTQf&w2WS~6B#XdE:{O2tnz|:R_K`H:E6' );
define( 'LOGGED_IN_KEY',    '@KpOX5>G1P7CF>ZA,LC``L,5{]/:BJtX;PS$nb4 ipcqBIN7EXN^UJVTX0]pAWy1' );
define( 'NONCE_KEY',        '0/~:un6nX]/X8_k#+YiNYkp^e4|Y=RtYc<jH7G_-^XH3^FY.HFmfa+qE@mKKkGF3' );
define( 'AUTH_SALT',        '{%}c6@Vn^,.`N`wyY@#j^4a2a7}LqD~76i<m4e70ax+h!T;vY1<~n0IW8Sq=F1K]' );
define( 'SECURE_AUTH_SALT', 'X *Ze5az(G9*12f?}X:9G!59IG`Hiv[}bi(SMf-TZm9t|du!>=5;luH|]7xh(pdC' );
define( 'LOGGED_IN_SALT',   ')(7-)>83X1e_bwAQ?D4l%EvZ?ksl~|.}9QxwtD:exQ:504ZiNH[9`=+Z@BJ|S$`+' );
define( 'NONCE_SALT',       'F.#uVIC[H|!B!}tlnntieY.L6# ]>X13`k7{Y2Ggm|J5{iPAlN<{XSMrG)4H=YNv' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

