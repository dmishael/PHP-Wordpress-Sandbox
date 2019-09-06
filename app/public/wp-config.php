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

// ** MySQL settings ** //



if (file_exists(dirname(__FILE__) . '/local.php')) {
	//local db settings
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
} else {
	//live db settings
	define( 'DB_NAME', 'danm1526_unidb' );
	define( 'DB_USER', 'danm1526_wp933' );
	define( 'DB_PASSWORD', 'Dmish8391!' );
	define( 'DB_HOST', 'localhost' );

}



/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
 define('AUTH_KEY',         '[0wcV]0?2M?6D)Mwgj3=(|ff_J8^drm5}| s*bN=4D-Ph=h-sPryiZb;/SB5b8|l');
 define('SECURE_AUTH_KEY',  'h9_H4*kx*+^6}m|{Z-i<y-{wC*c]:)geIiJZ7m&jh1*Wi8~-L-w9S /Q=kL[glWj');
 define('LOGGED_IN_KEY',    '##MVlVD@U62Rrj4|Xy%uBoc8Zs/}u+I!%fML}s,jDZ25k~Q$q]Ri**~~ad7rO![1');
 define('NONCE_KEY',        'yJfQu0Q6+}>/nB3Wz;,7Byt`q0~eU}vh_~p?Gk`|e|[^p]D::#J+Id.}[_z4|tTl');
 define('AUTH_SALT',        'W3:`)b|(;gc~R`Upoq#:$N/{jU/wT)X^ =r/ jt/|)_qI0+,!J#MAeM`{~K[xxbi');
 define('SECURE_AUTH_SALT', 'E2Q>6+k-%;/@#s{8xtMJ,H<zl>gMo|^n++movl0>YI}N=j5pl$9n=Vg0FOU=O%TV');
 define('LOGGED_IN_SALT',   'Ib?z+!; #PR^Tj:b?.1P,/7Zhg7$,`!I+O-EP{1T7`RP^p_*)CEg{dnGA6!NsN`}');
 define('NONCE_SALT',       'fV&b-8S4c+1K/mc/@|PM!-M_65<7p)+(a8YELtSZ.>C#ph<$8.8_z~#iCu`~<(Yh');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
