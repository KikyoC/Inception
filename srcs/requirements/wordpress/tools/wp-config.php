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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'Hv+yQ/=*8e9c7mmL8r5Be~B4Q7L5)X]' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         '>N2;e4=]7Ezhf#Q-1fQ` k}b&1qV/.{>Az,fD(Z9uV(dpIpBUpKed}ASN?hxoO^E' );
define( 'SECURE_AUTH_KEY',  'm?&F3,,28[pU4nR_&iCR;Z3Op#(H]{l {]NnL,kyPq3XhFbKx1IfcuC*0)08K?K3' );
define( 'LOGGED_IN_KEY',    's_p1x*kdLe$Rwddo>WQ6Ojf9HcV~aim6yaF*-FycU,iXwD,.2*HgMa]$]cG@2Vv[' );
define( 'NONCE_KEY',        'O/64YwS~o(k5t=)O_%amZfUN*.Ko/HNF6NMJJmcy<LN&(ymb^7GOyq[oY?gH}!CJ' );
define( 'AUTH_SALT',        'P]H<,0Y>F1>ZmOle`co6E]^AO5UE[Z*$kJ:1]Ny>+Z_o{g X&}Nzs7fS#d`$zvEF' );
define( 'SECURE_AUTH_SALT', 'Lj;K5{}Pg^hXQ.|ofPsTeMYF;_FBi:D=BgT(I<1e)1VBuXL>+03nG^vnb@)_VzPO' );
define( 'LOGGED_IN_SALT',   'G=Xj,LFMK9_)rzB>4UN+m8>DlB-jDg5/^CWpx|gX)rP0TL)R?/&BEys_TT!!Zhe%' );
define( 'NONCE_SALT',       'J]U 1@t<wR.Gu20uz<i}Ja]}Ij`cK5}lN?nv;xqlC{@lp~}@*gX#p0nenv%Tsu|;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

define('WP_REDIS_HOST', '{{ .Env.REDIS_HOST }}');
define('WP_REDIS_PORT', {{ .Env.REDIS_PORT }});
define('WP_REDIS_PASSWORD', ['{{ .Env.REDIS_USER }}', '{{ .Env.REDIS_PASSWORD }}']);


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
