<?php
define( 'WP_CACHE', true );


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
define( 'DB_NAME', 'u352616857_YKfBC' );

/** Database username */
define( 'DB_USER', 'u352616857_SCgyq' );

/** Database password */
define( 'DB_PASSWORD', 'QoYFTIzZ3n' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'T%!HEP[/$xGepMJ;Y9WV@:V5%.jw,~m<KKa]n!00 6~P=E+t`7hx^STe8n,KpNr(' );
define( 'SECURE_AUTH_KEY',   ',#;z=@Qs|HD~OB&KAQJ~le,Y)pB-E9CYE@N~ x=1p3#vde5-KohFeKVW%jGT3:gJ' );
define( 'LOGGED_IN_KEY',     'qsHXP7-qOdY5$,mOwLFdl)up[LX=u{2[|^&WlvOGY%Mwef $|X&_+[Myk_BYHO3z' );
define( 'NONCE_KEY',         'tE+66pRUDQ N7*- JIQ00$u}=Wae?;{U5H,UcP:2#xSv>Qx8f)J13>>K$*yj<;Qj' );
define( 'AUTH_SALT',         'HN<Y!&IWTS%HbP,{VS!%6B[vitr-:d8KBUS<sH;HNtY7~3}h~57Vq=Td9r%>NMT{' );
define( 'SECURE_AUTH_SALT',  ')sw:*2jP}mlg:zPlD%SFlSmyQ4:UQ7.mj+#m/*sp]J%Z<0d)_%ol/N;Z9%.`-<kp' );
define( 'LOGGED_IN_SALT',    '*3U40e39iM~p.++Ogqbvf_f)&qw0rkuP4g&4s47Q~c9q1#BBY=`HqpKTo1]<(UY!' );
define( 'NONCE_SALT',        '^A/NW_t(::vcR@v.V6pNUB((euh=}d4mgxce=%Y:?,da:hFoMLqXANRAPW[)*1&Z' );
define( 'WP_CACHE_KEY_SALT', '}]iS:kw9Eeulx#;6$tZbvs=VJyhk`xw 4T3YyKLQE|Laa~00.`,OdC@jP$$D54E,' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'SURECART_ENCRYPTION_KEY', 'qsHXP7-qOdY5$,mOwLFdl)up[LX=u{2[|^&WlvOGY%Mwef $|X&_+[Myk_BYHO3z' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
