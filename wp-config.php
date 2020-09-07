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
define( 'DB_NAME', 'fundacionappis' );

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
define( 'AUTH_KEY',         'I8U#bL}g!W%r#d,tFP]56%!m1Tx0T|$SgLZ)4m<J#o@rYL%T2y?RD/_0[=hKEi?R' );
define( 'SECURE_AUTH_KEY',  'J#TKFwOf!=e`|=SKd-M)0ceR_Bi3:1/cgdie7*(N8 G*rslC-M=gsEsFRBF{Lv2j' );
define( 'LOGGED_IN_KEY',    'Pf?d>7J8mUmcP3?`!fZ%gQQZ|DeZtg2a)QWy3/1EQd8NSR]st(~nveJs+5WG#VZ`' );
define( 'NONCE_KEY',        '.m|FgANfGuen7,!<h}qgyP<KYJ/&Q6 sckV}^=&tsb!U6}m8qb l+_T2Zcc81y9I' );
define( 'AUTH_SALT',        'HjS@=m?TmMW#C~ Sl3 aojyWX{oU]C/|#2T&j#.f@FJoS E<WcpMzUEAm8p^~60/' );
define( 'SECURE_AUTH_SALT', '0Ml;<K 0UHY+_sJNvF>iTS-s9b@p<UKwRR2MDOAah0WL&*$[z9[sM:t_3:6,*v?f' );
define( 'LOGGED_IN_SALT',   '7N*h PAq;/EG3;5/)n#B]2RHK!]LNI$7f874VJn,|*F&bb4fLT;M`<LUPn(Zix|l' );
define( 'NONCE_SALT',       'Oio;nQ@kE[(jMSli~chCMBoVY/4J^`(OD`skSx-Sl,#Mi<B4sj2^w|{o.i+#c<#T' );

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
