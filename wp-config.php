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
define( 'DB_NAME', 'theme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '-hkGy:^E[0+*NP.-$={j$v-bD3Oc<EtI$T~xRO~TG#[Eu1F41#viM1IaCmVzlUY2' );
define( 'SECURE_AUTH_KEY',  'XS=WtDpnAZ&8M[e<=@Va~Py`Xa}#{1(e:P<I*f.9i>9+BYJ{I/b)n|WotK:sIao[' );
define( 'LOGGED_IN_KEY',    'Ssq`a8l5%A}I?aJO&w;#rkl.!UGUEX{q&)dFvolagEAb8~7)8b~67yg,%9Qv*+Q)' );
define( 'NONCE_KEY',        '+]d5Ns]7+8{aGu]1gUg0l*5ZnaG36k01EWl$_Ypu~&Qa(xNJ_PzWz<|Q-+lASOmy' );
define( 'AUTH_SALT',        'T[,C&fY3EPwlPyLRzg`SFgdL@dXq.iS(2>yHd55Fe}7JvRdIh-mm);^^O~jeMn*l' );
define( 'SECURE_AUTH_SALT', 'nT|sQMXk9/o)lxFp*ZyoYog9#qU5$@7Int=gD<%#~QLh?&hvbq? .f3;W~LsS3Dk' );
define( 'LOGGED_IN_SALT',   'avMxY3J$KA$ME`.OJ0IyqG^K1 TE:HlUu$V:`>*+JHxc7}qt82-q#*E,{Ha(Wz4O' );
define( 'NONCE_SALT',       'qJGn@Ov6gbA#8P`s0]H4!,Y|n:-4B[/RT{N?d32JNFTf/F*93t. LAy-!d;P[Vsj' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
