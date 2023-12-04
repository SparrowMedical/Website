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

define( 'DB_NAME', 'bitnami_wordpress' );


/** Database username */

define( 'DB_USER', 'bn_wordpress' );


/** Database password */

define( 'DB_PASSWORD', 'm2zvyKju29FNOjdCLmrvpNe5ttjmCw3yw2LFrDCfMsax4hdyKPuJiKdG6XcRsiYi' );


/** Database hostname */

define( 'DB_HOST', '127.0.0.1:3306' );


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

define( 'AUTH_KEY',         'QYrUejKS!h#C{L!S3;v0~VF=]4.7+dh8D)f;803`xE0X41@JHQ6X9;!mJ,CCSj ;' );

define( 'SECURE_AUTH_KEY',  '*y|9J`[m>47rGQRKCn!q!E.%t5~:9j.E;>3tR!R0@jd`L6vX2sH}<YU%ix71WRUY' );

define( 'LOGGED_IN_KEY',    'z||5o68A*f%{pm0k:ki:#JgG+N;?S(ovT]5L(X?m`> 5h@_@aMnvH]YK8l}Y#z5' );

define( 'NONCE_KEY',        ')G,=}u|?5{_qYWoCx/?R~T*ZV]pvA_Si$f8U&tcJ`pY+igE{Nph1*JCj4W<r;Z+a' );

define( 'AUTH_SALT',        '0H1 zld#hYj`lxPb/M<[O<!s|EYkgRAvP#X<(Y[PR]H(~s~kjycJQJ$AH>I.;7EO' );

define( 'SECURE_AUTH_SALT', 'l{(Qjep)s.mx06#]>kB/Ysqh~aS5VEkV$zQN5^;p0vUb3>p(RandCmgen*[]}x}4' );

define( 'LOGGED_IN_SALT',   'VJ)A!k^|U40DAr3pPWPVA,yVNhb{mcZ9QPICW*B0n+<}eb 9Wz6:iXl7*Qe2-q5T' );

define( 'NONCE_SALT',       ';D/gOG3]P9(.6Ov!AR+bk{&%t677O%#@rF`j~Hv`R*5uLDy=I2=mFDw$oB50xu:Q' );


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




define( 'FS_METHOD', 'direct' );
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME','http://example.com');
 *  define('WP_SITEURL','http://example.com');
 *
 */
if ( defined( 'WP_CLI' ) ) {
	$_SERVER['HTTP_HOST'] = '127.0.0.1';
}

define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */


/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}


/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

/**
 * Disable pingback.ping xmlrpc method to prevent WordPress from participating in DDoS attacks
 * More info at: https://docs.bitnami.com/general/apps/wordpress/troubleshooting/xmlrpc-and-pingback/
 */
if ( !defined( 'WP_CLI' ) ) {
	// remove x-pingback HTTP header
	add_filter("wp_headers", function($headers) {
		unset($headers["X-Pingback"]);
		return $headers;
	});
	// disable pingbacks
	add_filter( "xmlrpc_methods", function( $methods ) {
		unset( $methods["pingback.ping"] );
		return $methods;
	});
}
