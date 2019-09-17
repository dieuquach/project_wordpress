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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'project_wordpress' );

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
define( 'AUTH_KEY',         'k7PO]Baj|%.?QGh _8D(jx(A{H}l$C,HKLMNMwqp<q2a/$|3Te,*%UHP8w,L;BD=' );
define( 'SECURE_AUTH_KEY',  ',?Cno)l5MGFC+|we{0W+lXpUCc!VYBB*.g7t;!`3!J__A+kTi&G~m!}dgu,W;yve' );
define( 'LOGGED_IN_KEY',    'm-D3qOv%fy#kQ(rK-%W)87GtmI?{D1H)8DaOY6,9w:1)`>o1CGdwHXMH;O7]o@`j' );
define( 'NONCE_KEY',        '(C/-hBkLKe=TBuIgiO}DKwTOEPB}mFiIWB>A6wWRiyA/+w2JItSw1_pDg7YGT[ff' );
define( 'AUTH_SALT',        '|xgLw,K^pMC1NBOZ))Ej_$XdPVFw}8E9RD]F&zaFgVfz:(Vh0}}7Jyet),S2t<;Z' );
define( 'SECURE_AUTH_SALT', 'E+t}l^9.EbM$6q`)W;^R;^(8Wy;k*@(?&gX=6_ml((Q&OrM)aYv]8U^tnRoYHF,<' );
define( 'LOGGED_IN_SALT',   'I3v1e7BUC+~}j<00w_(-SBEp&Nc(Xk+^8~aoEm&~1{> Z^~.G2st-muy 0YkpYp2' );
define( 'NONCE_SALT',       'S^mP|yTNeL|g*j~LMiP/DT{d]<nLZ[jlctHQYif=]>?-O*]]VSB*X|M/ tPA;VE;' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
