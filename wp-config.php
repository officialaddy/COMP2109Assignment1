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

define( 'DB_NAME', 'assignment3' );


/** MySQL database username */

define( 'DB_USER', 'root' );


/** MySQL database password */

define( 'DB_PASSWORD', "" );


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

define( 'AUTH_KEY',         '|W65R*(i|Ftx&`}aW(_kKZDWN`=)+BeddM=3nUJq=t5iUm-/=fk*gsxk+|MY_j5>' );

define( 'SECURE_AUTH_KEY',  'Q$N%wujd_Ogl0m[AO~:LyJeh~6QlfWo7=Bi@7N$L}@j,X@+598h+pqpc3kRsxmGv' );

define( 'LOGGED_IN_KEY',    '%r~,i?.z6A^6wIIFaHIfY^`V pwy({7Xu]6W^ou$D1nwFc8eb0XzVCr}1hA]0^[7' );

define( 'NONCE_KEY',        'X6t&HQk_~r;wgCu3=~$$1l$To]p*I7>W`IsBNVvl`Y1&sW[/p)JET9+CJ9{vG5$R' );

define( 'AUTH_SALT',        '4o4 ?fD]8t8Q$G!6P&g$R}!SjV>8yH!m42k7rs0-t)su&?1xgq?2kVXZl2E->&!X' );

define( 'SECURE_AUTH_SALT', 'rrc1n<h|]DgI]-n8[Xe`Agq@x5W0d#2q&^-gqmBLT.`ic5Y(- &BH6wp5b^trn~&' );

define( 'LOGGED_IN_SALT',   'p7 }QQm+nQY~{zfPfLWM41{Fw4!5xdeq7MWF:0H`)B6Z3iTBH.Rjg:!cHBADSIm{' );

define( 'NONCE_SALT',       '2zck{8b<,qw+%nHX+R1pA::-#:&/$c~-dLqr]2m_=<& A Vzfw>nrGZLvB4Y]p^S' );


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

