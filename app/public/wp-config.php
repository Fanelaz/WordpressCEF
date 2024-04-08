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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '55r-UeoQ$4I/RUvpLzy8[w+VWhXzt8m+Js?P[bqqcpAnfaIyCWc]?)o+w?&@.(Or' );
define( 'SECURE_AUTH_KEY',   '9k]=(YAa(ZRJf>_(IA#_<ChjEb:|M~qVo%3R)iW^6EM(TXu=3Y4_i,T~GE/aE,aT' );
define( 'LOGGED_IN_KEY',     'SMeXPY0.f@2|&I3<gVYl-107NewE?B#(*!1Q1z0)Z;LCYypq>j9CjW{K-?N~heFU' );
define( 'NONCE_KEY',         'iYK$P~iSilDN0 ?{rAIpjV28#$kOTik&K7Z=nD=e#c.Spj:>t~FV?SPoDHk]9$R*' );
define( 'AUTH_SALT',         '#v@U7xggq(~**k  8fM!6D<@AQWnE+ 0V)chv.o&a4{_rWmHZpwe-DnjO%>D$FlS' );
define( 'SECURE_AUTH_SALT',  'U35?dtZi}k#c>9Xtq<}6dDjwl+4;BXvxb9$9PB5~H<!=SL<^UyQ^q~BCWrCf6q&2' );
define( 'LOGGED_IN_SALT',    'U;F6w?mgx7K|+xo]SWZFL,x9kEUH.]O(X~sqO0_{]nmp]qv6LX?>/BYt0y$oi.>D' );
define( 'NONCE_SALT',        ';@T:`ZqNZ@@iY?*JKu!SNm74E^cUWFP4j6+^Ju8ePGJMV#b~5{>A=/B)f0/d;|UW' );
define( 'WP_CACHE_KEY_SALT', '~+qV^tGS$`XwXmMQ.r3A!SW,f&)u`WKp6gw!9eo.k3ij8w3SXu%WRTm@y/op<Hv-' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
