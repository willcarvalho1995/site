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

define( 'DB_NAME', '' );


/** MySQL database username */

define( 'DB_USER', '' );


/** MySQL database password */

define( 'DB_PASSWORD', '' );


/** MySQL hostname */

define( 'DB_HOST', '' );


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

define( 'AUTH_KEY',         'sY6#z[]Y<NDT0Uht/6]o_gM@uuocReYOwTzkFVo=2N2E0uQ [W;t^O%OdfJY6z?%' );

define( 'SECURE_AUTH_KEY',  '3&+S/yf%8bc>Ml&MH3!;SZR=sDw_bO).nDL3cdlUI9sN%od52}CYBy7j?.,7=8B$' );

define( 'LOGGED_IN_KEY',    'YmQb{ih@e^ppSb#my7]80uvsyvFl9=]e mqPKm]+G<31QZjSv5S6G`RO@p]8?X*2' );

define( 'NONCE_KEY',        '|]Z/XAQTdsi`$$6H+{4#8jBe~xe<*>#z@f(,%/k,Xo4WtnnF9R+G}-s<oZRVj+pA' );

define( 'AUTH_SALT',        ']RLEMB 1BxdU{B,&=yAwcU{WyOCdWPsod><Ui`3<Z() yNzisPn7QJ:5TnpdNYV)' );

define( 'SECURE_AUTH_SALT', 'i$(z|V4`eZY7eT@qdv7|2zM<UH#wFGNApHJ;A<fmG=K4G3_#_.~|1+;jMS;K,NCi' );

define( 'LOGGED_IN_SALT',   'DKb<Qd$ zwZJuHzwEbv[fkAO4 *P2-Ujo6p/rWnwK],*IyLia04InZ!fnMwIk4R<' );

define( 'NONCE_SALT',       '`wuf^hnW(K3n$kb#.91T`+V)v6IKx*eaj89iD>AIc1L<%0%lN!9rd>Bha+Mfnz}F' );


/**#@-*/


/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'cev_';


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

