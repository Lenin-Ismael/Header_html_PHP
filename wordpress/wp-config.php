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
define( 'DB_NAME', 'wordpress6' );

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
define( 'AUTH_KEY',         '<fRvUv6xA+C).B4M?X8[SX?78Hk3r%5;[Fy$rUMn?Y8:gK?:/cYRej[XwHtMsK#4' );
define( 'SECURE_AUTH_KEY',  'E51fx`1$+Om+79<K)<4a)30|UXl&ZqUx^eu.2d.:8?Q+B~s-#vlVbwIdj!HllfMz' );
define( 'LOGGED_IN_KEY',    ']=UVJIx-.0?$SZ[@G+Ox>7c]E _hQvO%a~*z%K(nKBnxF:JoIb`Ci,aVxDTW~sPP' );
define( 'NONCE_KEY',        '[h;I+lA^Kntq. ;u%%)z#NC]AQB(K>1$RGP>t9G<b^E7V+1LXD?n*bXSFff}{!Pk' );
define( 'AUTH_SALT',        'd <<^Jh1&),>byb|/<n2+/jJWHmX6!~GyQ gz&=9&#~1c#;>Gy*7%^]Fb#K6]|Uv' );
define( 'SECURE_AUTH_SALT', ')vurHcFR0cuj5=UdLB*Z}4* ,SzcV@6? &wJiOvty|bNL*]k]41q!8x5Vx)=bK1y' );
define( 'LOGGED_IN_SALT',   '7tZ]Nfcc02eT#^=8#f7{Xg12``KnWA|Tl1Sy-$a+Q[<^uuFmBJZ?6MT(cc9`cHc[' );
define( 'NONCE_SALT',       '%i?a^uHP}<1*.Sim~#]%SoIz&_5f;;lnI| #>bK!m]d=o90wV+>%e`52JnCt[[(C' );

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
