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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'khaled' );

/** Database password */
define( 'DB_PASSWORD', 'wfkbs1979#' );

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
define( 'AUTH_KEY',         ',6t#>;{7Qf>G=nK.O#cE*D)kg`YRNE I(G(a2<]U=sK9XxC4L5c61jLd0kD}T2V5' );
define( 'SECURE_AUTH_KEY',  '53(1$-CQBS9kUSmQf895!%6Xg}rq~j(iK,Wrw<|H3k-eQ9[B_B19iQ$n&JP_8v17' );
define( 'LOGGED_IN_KEY',    'CBv}NeY>*M{U0rZ1Q14e9(I.O2<U;S@,D{C:ap{[aZGd0U?a,92-a0mCV9wa_H#)' );
define( 'NONCE_KEY',        'j!To$7&(5*,<Zo[ziD|/4sJb%}H%qMqqDUwTx)o.#$}KEd82*&Bqt( G?j~QRkV2' );
define( 'AUTH_SALT',        'B36,H MiYbuMM8BDV )->-,f*Kcm a{DA!Zum-u8>WXgLU7N5H3UHQjA)qan!NVE' );
define( 'SECURE_AUTH_SALT', 'Xd^V,:^YzxfW@;?LJ5`x<q?Dfi/(IBeI_%ez0Ct,Wv{O3`zlov=GQ}*K|l804 WI' );
define( 'LOGGED_IN_SALT',   ';/J0PmH{Q@uDn?;Wr7{GqV|CP)&N(9ZE;<Pp#$Ig`&|jlS.w|)i2?WPn%K.6=s4(' );
define( 'NONCE_SALT',       'jVX ZXpR=Y-kID#V3YY.5b,lU qLJzH}$;Td.z$2F9G#QkeGX-#emGAmfGkq Nv<' );

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

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );


define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', '130.162.194.43' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
