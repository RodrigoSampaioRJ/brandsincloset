<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
if(isset($_ENV[`CLEARDB_DATABASE_URL`])) {
    $db = parse_url($_ENV[`CLEARDB_DATABASE_URL`]);
    define(‘DB_NAME’, trim($db[`path`],`/`));
    define(‘DB_USER’, $db[`user`]);
    define(‘DB_PASSWORD’, $db[`pass`]);
    define(‘DB_HOST’, $db[`host`]);
    define(‘DB_CHARSET’, ‘utf8’);
    define(‘DB_COLLATE’, ‘’);
} else {
    die(‘No Database credentials!’);
}
/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}>w >s06Q0$|hy5b&DU3br:8ro_&+Adv#/O>;:fl_<7q.rIj}A;E_:HG#IN8#WuP' );
define( 'SECURE_AUTH_KEY',  'ET(xRoHE!HGN|Jgyrhur/:6ug6-ylrobj>`i~]*,;FTwsazwcz)_{l$^4IoA:6J<' );
define( 'LOGGED_IN_KEY',    'Q<(g+vi9&:mGKxK{W`E2*s`f^8r@s17 |PZE]rg72dwt4iz;SB!2W`&_m?T&4C<V' );
define( 'NONCE_KEY',        'T@3mt*+2(8_VIE4}srzsgK+^n ^L0^hU[;/KWB2s6aIe8nn~k|`~PZWE0!1^95Ez' );
define( 'AUTH_SALT',        'L-k;0QpPmLD_6OX[V%]<7GK3~Ra^X!M?3k_yY)U9:g?-c LIP*JhHaM[mh}aShSm' );
define( 'SECURE_AUTH_SALT', '.;d>]c[!xI#@WqXpb.(cQg&~oz(_H0!R>eG(b|T6h?gNnJ@XBe@h?H2`cm}V_gdP' );
define( 'LOGGED_IN_SALT',   ']f{n]L>#b%T1O<`rrf -5@x96b1*Frmz20a#|1GPZIiKdFLqkKBi~tBKb~ua&SMh' );
define( 'NONCE_SALT',       'Am&ii@y|hWp;{FVU(|z;{n}>P`/8!wK~~QyI7Jvp4[z]c/bg;6.P -hRyQ&j7S*u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bic_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
