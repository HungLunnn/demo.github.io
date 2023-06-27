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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         'r]e,Mod%D;DJJzy=$94a4&X[%9VLDSk|RcYyF/0rEE,q=QvW0iK^wCS:EOCQHMxn' );
define( 'SECURE_AUTH_KEY',  'N0)hdRojEoRx81V/sDD!)KRUu){Xmv8v({`F-$,6PlX})5D15w6.[OO~g|3&uptp' );
define( 'LOGGED_IN_KEY',    ':Gw~!*6:Hpc&Jx7gVM_6YWh@APd<`+|[JJBKp0E}Xt~2}aI1}=tSyq^5=YSA0eGm' );
define( 'NONCE_KEY',        '#dv1lTbzg.0jLcGo?@)_r=u!Zz[V LPPVJk~vqyx;7kCK-bWmI2F`[NPbnSbOjnN' );
define( 'AUTH_SALT',        '!F?dkiU~cWg})vIH6hw.bMb[c95(?po!0stTyBa{]sace/v{HY~mL<+Ee&b(H#KG' );
define( 'SECURE_AUTH_SALT', 'ab7}$7|_+r;X(<wb;n0&6.nah@y_?vfr)xBy4;Xboz^*XX}.7DPvY<ToQVOS+Vh(' );
define( 'LOGGED_IN_SALT',   '*q,<`S@7^:?_^u>c6FjkH8rxn_H?p;IJ_M2G3.7.4I@{,{w^bZ%wp<a|=4>%MdqT' );
define( 'NONCE_SALT',       'eG[w1GZK{9H4*Iou*4pil8}z5R$/dNYzon!G7 bX2GCe{DU)lDPv,ZI>5dL5211}' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
