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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'homepage' );

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
define( 'AUTH_KEY',         'TDxNi<hR!|qq&;88A04J(o>V2tQnNHXYXK8rd=9>l L3d/@A{`m<k6$DZa!1k=(+' );
define( 'SECURE_AUTH_KEY',  ')/G%]38ocH}I^3yP@|e|1Ojg0 r,BuuHdRUbnIpp(6[%U0$h^$5_iN?_{|[^M8J0' );
define( 'LOGGED_IN_KEY',    ' ~>OqmMeC]TR$O wU2o=}.~-!z{)M :<eO+=8+<e4D8tF_tQgAL?J$O/,$^I6o~a' );
define( 'NONCE_KEY',        'v7R=d:F&s?f;p=B@X<:Pc#>>nXw/7X;,kb5=Mpj,hPq lnCAL]!gfOwrS(K[$KQO' );
define( 'AUTH_SALT',        '?O25S7I bG*X@AgI8{3hVi+,*ta.!2[f^Eg7G4-8g^s#26UmU:>+C}v*jrA4yuX5' );
define( 'SECURE_AUTH_SALT', '..S]GqP7lz=1?eGfq_ts+Acs6-l|`cKLMl,e:Spdk(<qW=sNF6)bHm!=;c{rFdOR' );
define( 'LOGGED_IN_SALT',   'i4+q@ixeR67{tiBhKd:.a#??eQ}L)/k8V;$:2zhKD$ygf_PeL~<V4~H^+BCH})v6' );
define( 'NONCE_SALT',       'U%z3++r|Z]2G X7;>..CLsHmr_10{=duGW>44z?z#o!hh[+>Yi7 -jj;e5+cEH,>' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
