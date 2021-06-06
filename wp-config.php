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
define( 'DB_NAME', 'Wordpress2' );

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
define( 'AUTH_KEY',         'N7J@d(CC#7 &&eF^-o }j|;|DzCA@Xaf>F|$>OO!HBb0K=S!F<*;K5H_v=uFKE7 ' );
define( 'SECURE_AUTH_KEY',  '~%%2WdV(qZN{@]LGDhSbZ_cCma-49)sNKYgOC>u#@FO5:f!l38E-*yzW?~a*t^cr' );
define( 'LOGGED_IN_KEY',    'lpld_XOBxKJlk`JM,x$(NsRm.-;<XsBsP^Z<+ l>|,v`l+aqPSJ7&`sGP%YI  cV' );
define( 'NONCE_KEY',        'G(zfSgO1V5b[U+G1f6%bN_Ezd>s/2|p<7kj.KmauH?>@}M();3)VBkb9$7ak6<,J' );
define( 'AUTH_SALT',        '##*:K37fOKpVRn.9v!?0 a7,gk98,pDH{P)]+<7y4397[TwevbI/q-zVgk-lg;LW' );
define( 'SECURE_AUTH_SALT', 'FKV[*@B|Hq!$]INPK}Z;3[7]iD^Ca*<lU4kl4CSd4Str*,M;XI3,fCfIQ2)`|UD?' );
define( 'LOGGED_IN_SALT',   '8@#%N7dAoiUn=?v##@gS4R~=IlD~Mv}TA4y^+YY$y#r-TVk]U`XX2~q1XiUY PGn' );
define( 'NONCE_SALT',       '):3++QGvu~If`XK[:4hbv/>%Wb}sGgj.9URG;jbY/j549.xZpsvhbT<;lriFbRrj' );

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
