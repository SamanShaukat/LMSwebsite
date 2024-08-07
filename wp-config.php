<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'LMSwebsite' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '&FnhXcO2:qq[?oVgZ+3T/jW}#K6Bq-M3hDP(OZy%7r;UD`GM$8*HZ%>dDyJmgoHX' );
define( 'SECURE_AUTH_KEY',  'do|A?SDVEvD20=1)Ht^yJ+Dybdou(Tkc^iG(hDJWH,WSQMy0kE2])26QKJ&|}GQ[' );
define( 'LOGGED_IN_KEY',    '9y~NS}B[K~qKg~xm%}7lh8V@D7p^~?}j?>5OI[JI.);lL0hJnX$GScFD`2`M_^C$' );
define( 'NONCE_KEY',        'et[A  m8CPVO21s`6oskMsUe1~fe-j5g:]zb`83iLOS_icAVh!jYh2T|f@NeP[HY' );
define( 'AUTH_SALT',        '{}ACO7bN~){h;GEjSL6P02w6R(e;TeR,t#TwJ54b6/S(c5]w;l0@TTCIf48C3zm1' );
define( 'SECURE_AUTH_SALT', '-sie,hFqA1Y{a`6P_txNf;-wx|i=3Fi1^m0#9Y rPWuBh6}j9v3~o#|obW.Hi^QX' );
define( 'LOGGED_IN_SALT',   '~>h< VdQ^+`!1,jXkyRNj)ryT}1xY3%diR[E7VTD`a) H7cb.(> n~*$j;@=7pRz' );
define( 'NONCE_SALT',       '$HG5u;o&g6pCoAp?N6oNzKjFr6=o2hYEp[T*!=e:%, 0Yq`_n+Ow]oh;_]%I[obx' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
