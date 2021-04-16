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
define( 'DB_NAME', 'tqut' );

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
define( 'AUTH_KEY',         'W)I1{>35yMlXZ1pbi F3%[/*Yw4 B|[l)FQk0mj5I-Hb00f +d.+k09#!F?urcN[' );
define( 'SECURE_AUTH_KEY',  ';92WdUvJi4G^<Fof8IM{7HA(rf5z0CK 1*7o.fjLGIc?g|VE/=PbI(l[gQKU>r$D' );
define( 'LOGGED_IN_KEY',    '`TvlX,S:p3|dJ?V}LOLKam5ap%P[;z!K?on>e-va-+aB[5B#_r&H&aV y4-YCK8%' );
define( 'NONCE_KEY',        'K|psF)#d! 9xia&d_[yzxh>?N. ={9pFlUI5c@hy%WyBHI_$In0[8813Es=Ar([,' );
define( 'AUTH_SALT',        'Mt-#0^7ZUASA|>Ivt=I4J~(TOt).v4z%_3-vK=P9|SZK(3oVa)gg-MWW:;ZIL.Ab' );
define( 'SECURE_AUTH_SALT', '*KibDD]k|DI;.,eIDxAS8r?Cdff4f?-TBkKi 4r<YqwZ`kb<HNALZKI<o^z+Mdc7' );
define( 'LOGGED_IN_SALT',   'vZCM-*. bzoj{xiv!MthDZq#`B,%Vfi`T.vw6rKa^F`)[D75:!;iwh2jmp>te_cb' );
define( 'NONCE_SALT',       ']An$G=vK%,],M5ueQ^.D[**ro|vd|ctxO^7ZF/lFDqu)qGm54#a9t6|.M8[+aeME' );

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
