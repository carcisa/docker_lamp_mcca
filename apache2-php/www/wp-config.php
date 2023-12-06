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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'carcisar' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

/** Database hostname */
define( 'DB_HOST', 'db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'DB_PORT', '8081' );

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
define('AUTH_KEY',         '&&W[> |A=DeMr)`r9(-g,NL,>+7q>($4!;G9&}!LDuTJTZZ%FtJW+2[rPqMLJ{;5');
define('SECURE_AUTH_KEY',  'Nx$;JtBwCc!4~{?n2:$7C@OAVJnHfg+^tzDzkb-|R8:h:w_r$/<Zyxp+:Ts>f-g9');
define('LOGGED_IN_KEY',    '5v07|i-4/_GH:H]g:)L3>8{1MG{/1^;VQwXI;kENuC`kN.E-HXJFz=s/H!Ms|bz$');
define('NONCE_KEY',        '|q4L-|3b1J%GP;6AAMIOcEg+IO#+sJ4Kmt]{L7_9CY;fvhenQgcf;)K -^4v,@Tn');
define('AUTH_SALT',        'TlFiPuxF+Y%r^lN,{+2ekzeUEsG7:^eao@}>UQRjoPTFY~}F~|5&wBU!OA3-<n}L');
define('SECURE_AUTH_SALT', 'b&_Xi+RS-4GfE ,HUehiPTC^f`7)dFEz%RpcW9q^u2f-/2UT>$w:nb*Qdnu@d}v0');
define('LOGGED_IN_SALT',   ':-:(a{ENgv+R+kKSK*TP{u8lkRb)ue2=UK%DC1-a@I)?vj_DS,@{)!/@Z-/+FhW;');
define('NONCE_SALT',       'r,99 n.%!`0[x=n],5GhH(QINGoU6hu5qU1uPUoxdC#1m52>gJ$%}n(%~<9JD_md');

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
