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
define( 'DB_NAME', 'ekeneo_db' );

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
define( 'AUTH_KEY',         'y=5~N!<xpW-4x{2J]*2pcn.;p=GU_PsU4NB$VnD-9M#irx87T@b|bZjKdgLA0eFg' );
define( 'SECURE_AUTH_KEY',  '9 jJ5 LQu4,NPbdy+lS[[*|!KAm,&;_}1{S[Y_/kzL?8Ww)3.(HL16ry[/4E/RZb' );
define( 'LOGGED_IN_KEY',    'ejAu#YX4,=D{UU*0xk:{(5~jdy=<Jy=id$h/(B$2phl5=60$sMQI_ZmvSe#AYa@5' );
define( 'NONCE_KEY',        '0yPS;!F*96j1.o5_87oX^}Lck4z!{6-7](wn=hkXj,o(vH/qh=5p)-H7;;.h8wMj' );
define( 'AUTH_SALT',        'x@/-Th-dObrsFAy`~|$I;DOWiaUwB^TSAW4!1rb*3@91s|-^,uJo5B>oY_W?Y<ko' );
define( 'SECURE_AUTH_SALT', '&?cwz;pogyET>S1k~YrL[~VOO^ j/~gwB2(ll$wNT25_4O8st5XD)`BD*4xL@76$' );
define( 'LOGGED_IN_SALT',   'T6RwYjburgn2HczK3ZITA !{8{>En1]=d<n;H`+A,yb*Psk_jlS0,RTXH:bZk!4/' );
define( 'NONCE_SALT',       'kXA:M~$f5ckmw#FIE(^0_+S>Y97ZL$;ozp<X*u#AK>IRb<(.a Papg%K8noYF:`c' );

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
