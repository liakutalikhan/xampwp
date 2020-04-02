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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'xampwp_db' );

/** MySQL database username */
define( 'DB_USER', 'sumon' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sumon' );

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
define( 'AUTH_KEY',         'vXXX+)%$Qoi[d|}L%cLm(el{QwGQ>_&v]/uO[D~v<ctJ{{[tj -)]RqKEzis;MeH' );
define( 'SECURE_AUTH_KEY',  'BUff87 15WXKIK9g8m@!@k^WsoHZg~8cCZ/2L>_{YNVa%yMsL^:*`YA+jgiAZUt ' );
define( 'LOGGED_IN_KEY',    'x/^E]2E>,}I|(%K4AohhC5X|G@8j-,D-c-B8;1wHl(qs1orx|i$VnSM:7x.AyqhS' );
define( 'NONCE_KEY',        '1@I/[OC-fd/Xk]j!jth>{([JNwur]FhFa 3Zd,2k=9]8/YTGCU(R<Ffhps:vpr9S' );
define( 'AUTH_SALT',        ']w&K5u.ftx@sSyM~{C{xC]OA3xu-H>|CQ?~j7xZGI&`riN#HDFLp!gRprjJ8Ph/}' );
define( 'SECURE_AUTH_SALT', '>[&{HN2ruU|ntv7sUxF</7<{@F%KWL#h2th`C2:s(=z4pc82xW(zqQS[<pVR]6[>' );
define( 'LOGGED_IN_SALT',   '3,x}%JTrylf,8vL4GutF5.[!?tZN~v)6t70#gpP_PfbHmheB(_f.&8FOmKD)N:k9' );
define( 'NONCE_SALT',       'HuYAZUlu H+.QJEH]iuhrb0`/a|<Dl)s@I:&G`>!*aKX6v[UmhP[oj8ctZcs0C3;' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
