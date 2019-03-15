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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'W>j mW{TT*HT[x:koh5F4?$U3~l^+__0Bx&Unk~L:Khe(]LrnaYO{9hktV>TmDn*');
define('SECURE_AUTH_KEY',  'uJyi$}}<_@-;R:8^{h}6rsrsZjQ%dELOin71MFqF|fcEOOC4LARE`a|>UnF}7+-s');
define('LOGGED_IN_KEY',    ';@oN#KOxQm.PD@KXM4@OdXdxhmre&19o8vE6@J6uAbR&s@`@%:3p?(=IOu}qM%eb');
define('NONCE_KEY',        ']srJv-| E0J>EgB@]S.6v% K-&e.6[WXg)q:~zbNgb>_633EL}ll_&3zU#>e-sNt');
define('AUTH_SALT',        'wip,BTyOQ:+^heGh7uK~}B{w{sK0g!/ vZv gm[B(WsU8FtP5<]?-{;-mA+S+b{y');
define('SECURE_AUTH_SALT', '@1COm=2k^P,0)fy1)I{JQMZ?Dbs?s7_}+o~gRLTE+#inHpx+<K#S8Ev-1[e=qglP');
define('LOGGED_IN_SALT',   '9U2Yv sc%fx-^vdNyzzNNmP6S$wAh0H/]Cp`<XUu~viF0jR#SKQbl;9>f)4l|4JC');
define('NONCE_SALT',       'P*oeMI0NnUjF>Nt{Z0b1RbZ4X6JpD?w$0B9,e6ZYAm`{89Jl<kI~JQVyqqoUZ*D8');

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
