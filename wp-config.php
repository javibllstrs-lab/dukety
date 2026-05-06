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
define( 'DB_NAME', 'dukety' );

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
define( 'AUTH_KEY',         'FJ$)}3KHa*uQ7o:}#V?bDOiZ]:`@}u8iJ2Xu y?k+U%^NrPk}{kQ%|Oz,dz]n;sW' );
define( 'SECURE_AUTH_KEY',  'fK.u;f>E?H`:(BpO] g]i9nf6ng<(Jo2Z;/1aB^nu7-sC{?c2A9RbwQ7}K;#d*,7' );
define( 'LOGGED_IN_KEY',    'C(!K=ZTszjFs5.*8!Ou.T)G!im#9T$-l!nj~ZQu?+pA_2;)$>`y7#NI!x8B)5055' );
define( 'NONCE_KEY',        'MKR(2Rlysbn>3(8p~WhW6Bf0mWL}gEV^Jq0hA<&uy+Sjz=|{}A-}? $E5fPq/Haa' );
define( 'AUTH_SALT',        'ye)G=VQuDO6)_nX?p}:D)TYz8k8EZtnE[hDWyV94WcHx}HzLd[{Cp0].T/q>,In_' );
define( 'SECURE_AUTH_SALT', 'js!Jpz)PhX4Dqr#9@@<VitUO^[vi|(W?<Il6V$LJ@RL_k~42C:LknPV#+C:nd!@`' );
define( 'LOGGED_IN_SALT',   '4t a;p^$p*a8LbGO D0iwR4S`<;vX~A3+Sod(c*FBTjT1KA,Al_]!cA*~4Pl+4l>' );
define( 'NONCE_SALT',       '4{=5hjs=PAlLhs#e/NN~Mq^s&[tr<gjPS~-%9S.S<gI[$,YLw(&s;eE{gg^{coW|' );

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

define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '256M');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
