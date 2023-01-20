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
define( 'DB_NAME', 'mandoproject' );

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
define( 'AUTH_KEY',         '.yS}v]^-keL)jBgi5t5?^LXN@7S8C]mzK&z7|gV*bG4u^TaG.1m`3X$t{Hwly1N3' );
define( 'SECURE_AUTH_KEY',  'ob4/*gt-jQuM-h~DSCHc8H]_:#)$th,bM]VWnbAF?W K%N^;oeZ.`3e]8{-&%}WD' );
define( 'LOGGED_IN_KEY',    'A$E:V2-F9=cS*:[T9&z;pt4M#G:X[PC>1Qmp?l?}<6wU7Ga4&Gl1w3)`c]Hml@F[' );
define( 'NONCE_KEY',        'w6E5_#vYgjk6qXv{mqSi{k$C_ 6&I,1fEbltm[C3Vgcx(A)>oPM+Tm>,kTO-w9$m' );
define( 'AUTH_SALT',        '%F3F/HWc VNK@y{m)rtwd~8w8%74O5d7Q|5-ABgxL]}=o%}y$(NL^k?V3B56R!E$' );
define( 'SECURE_AUTH_SALT', '<-OT^p#wGP4pdB*xl%;@sOr+:>U0e`6n}/2=/K0;dmSRtn?9G2?z 0=Q{MRJeff,' );
define( 'LOGGED_IN_SALT',   'nN>REbmbr>H]aei#+GJ~K7,7#L]p:])xwk6C~fL9CKv~w4C&H7E26ST>MW>wK#^A' );
define( 'NONCE_SALT',       'N)k :SR>E2`H.>A!X@X4_ *CP&eee*$)<DK7~5BYdnt` ?QLU|he`$F;aGDg*{bW' );

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
