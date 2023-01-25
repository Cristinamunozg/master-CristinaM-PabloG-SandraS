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

define( 'DB_NAME', 'nuevowordpress' );

// Database username 
define( 'DB_USER', 'root' );

//Database password /
define( 'DB_PASSWORD', '' );

//Database hostname /
define( 'DB_HOST', 'localhost' );



/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'fV9nerbVuANueLlOcAd6hYBZQQAHgu2XYnxtI9taU34Gk5NIppJL82xjWFdRtoRW' );
define( 'SECURE_AUTH_KEY',  'L24bZLDBuVSDFkSnXItqp4y5h7ndxeF877wIbOE55kvbisWqSZY4c0wJLS21FJI4' );
define( 'LOGGED_IN_KEY',    'd14qNdmF0A0NrElwJlXpgvTWv1wYkPukw9bmldAFLDpqQfZ1nD4FjhBMdDgDmxYU' );
define( 'NONCE_KEY',        'emhF2BhN64VBqUxVdgGd5I1Po1IDKBYoan1MXsPzpX3FzkLTKn4CFl4RflQdseQX' );
define( 'AUTH_SALT',        'CGBL3KkrEppAFMxO655sDqbZhDifDNsaMrgokYnV7yULiz4enkPhYLKbdeQgMAly' );
define( 'SECURE_AUTH_SALT', 'WHBETMLoTN12b2JHiJBVvlV02ksealnz1bZv8U4m6PTh7qSxdrGkevxNRbh7Vj0G' );
define( 'LOGGED_IN_SALT',   'VklkeWNLbCwnH5Dpahb3xB8XqVPnaSUjF1ErEksSTEkv5GQZFHxd2pmcl8Tsfymk' );
define( 'NONCE_SALT',       'cq0DaUq3Xlz606DK6uKsSJBtkKfIffrA3c91KdAtJHrTNPIwyCen2AnN3X4ULh3C' );

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
