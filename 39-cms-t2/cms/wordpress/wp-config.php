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
define( 'DB_NAME', 'cms' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '3:WKo.]_@aU(H7NLy-6{)vxie{U<>Y(x1,:DZA-H!.J6,nC03nis.S<{^8.AA/W1' );
define( 'SECURE_AUTH_KEY',  'QUeglmVd79lV3%:jl`2wy=5 IEL/8+F!p0=2h@jqsC~kN3Z|5`HN?oqeF%<ni9I#' );
define( 'LOGGED_IN_KEY',    'P+xvar:mS|WmPc?T^use8{&rxB>|q<(m1R1d|#yaC!o}:Lod|h-?g;-atIRpbfsR' );
define( 'NONCE_KEY',        '2e1X<E`HpNW<Z%2q0[ xU9rdk2]n]]_;QXIgqz/K4Q}J#!9au,-n^ReZzUQ_ww6z' );
define( 'AUTH_SALT',        ';$^}J0~gp.0C.YnHAMQ%H/]QwXKETY*tCFec;v07 /nf2D;6SLR@$fg^$)Z$cfg<' );
define( 'SECURE_AUTH_SALT', ']n`Ow+GvDn&I>~wsN$^3/e9S[a3y]y#}/A0>Wx6,Geu[m?+>r7*2_5`Z[II61$(R' );
define( 'LOGGED_IN_SALT',   'C?7%|rB-Hclb_XH HlqrMtRHI|McQKFe5}tS_,R4;3k3Blr9q3^DZ5[<P%i/(n#/' );
define( 'NONCE_SALT',       '[mDNPGB U|]a&=Jl|T3vcA.e;{FU-wriDRQ!MIE|$)AFNKFW<eP7T-68Wp9jLlc|' );

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
