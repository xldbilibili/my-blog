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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mysql' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456xld' );

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
define( 'AUTH_KEY',         '6y.o|ZZQ2SmV=9$Hn{ r{6<&@LG^,~@x[zP[C1+f@g ]|H.$>MFml%M03.#VK~+y' );
define( 'SECURE_AUTH_KEY',  '3c4CpMbE8N!|V=|N;;?H`iLA/{L me(e<GRcg1V$I*=5Tu.~i1CviW*i)-3[|l>g' );
define( 'LOGGED_IN_KEY',    '-dV0Eu<X/g?kA^[3]f6.Uxs0SGe94x@JF|3YgRX[pV3(m.EAge^x~{?9Ge?YC|aJ' );
define( 'NONCE_KEY',        '}u<4z&^>- /)sP2{1<-eEQ-ZGpu=6.|0q[`E!08Y.Ihb02Rw!FX13H(-mbv=+no1' );
define( 'AUTH_SALT',        's;$9-*U6h[Yi6g>I50FJb-HBxqJO7-;^<jX=+NAXIdAiRR!-)T`.0).I+@=d&L-1' );
define( 'SECURE_AUTH_SALT', 'qc4J&E3=DkdKTH^!aub.[w))hdad`U(!FL*wh>z#/,+un_S`$}eK#@Am9R,mJ2IE' );
define( 'LOGGED_IN_SALT',   '`1mTg@# FW^8_$gWpY!:;B_evozOLYQ=%~;WB F{R=AYFOJG(kiRy?h.Fxgq&Yiy' );
define( 'NONCE_SALT',       '%D?b<:s1P^W.HLySVT=S|MCY5E]VBw6km~Elid5Z=Llhk1q;@N3&bxP.hJR0[gm9' );

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
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
