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
define( 'DB_NAME', 'bikdb' );

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
define( 'AUTH_KEY',         'vq)7pcLixgws2-fi=Wn=}*_aCEulTm:>>&`#>5Wh#T)XZ1q(sIWT_{!PUZGol3T)' );
define( 'SECURE_AUTH_KEY',  '3`||._ZU,W c~Tq}z!~lIxRVX>%H*@nc_gT7-2D&.!{?z-a4(tXS$Bi9!^V9XORs' );
define( 'LOGGED_IN_KEY',    'o,QL]q9}T=}SEweFnW{[IXr!e69YWKCv1q&qhDhKNdr2G+35T}Kv{no6 =_5`4)J' );
define( 'NONCE_KEY',        '*Ude)qqVSmJaMIC- .4vFR;q0+NP<YT( )$yXK=At/zFXa?blh$bsok^&M^x:$s(' );
define( 'AUTH_SALT',        ':=>@QjRJBVn<5Q8Jago[bc_+Q^UB~ o/v9B5}-)ip;S@GzynLS!cjz6OH7sAo/r<' );
define( 'SECURE_AUTH_SALT', '6p@H+CX5xw<}+_7q5l-!,dqN5Xv#4-&~|Nr6l{ngXso<N9WfZ-b;??ESm|,(eOIg' );
define( 'LOGGED_IN_SALT',   'q6t9bOPC2MqPYeqfi_@3Gl}M&tn_N*d1[]? nVzNv&I1I[0sW2cI*Z.z$iI`v|hk' );
define( 'NONCE_SALT',       '_VQB>HmFYFICnlwtqk?bC0s6MeOVOH} wKZQPX3wwL,7pTofYp9>3YZ8jaJUex`0' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
