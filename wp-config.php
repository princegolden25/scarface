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
define( 'DB_NAME', 'blog_db' );

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
define( 'AUTH_KEY',         '0_[Vd(g__vvp^k*Be0@qjEfL?T@>@9Ml@HLLZ~em%4l#,n/W(40p#tm/ac|RkA:%' );
define( 'SECURE_AUTH_KEY',  '+#yro;6OJ;C0bCPm&Z`ZP,5jxWBNUw##P`M0t.H@J~H@_?e{.W?G(mvZI}likF k' );
define( 'LOGGED_IN_KEY',    ')Id &iBO;NttHEk;;3_[%UuJ /+j*n8@y1i((FiUI#^!S=660(cK1i`)x<cq3;E@' );
define( 'NONCE_KEY',        ',&84<#]SxZNk{}`+x9HH.CoCrqzT$Q.ZTN-{s&+Y^:.2U?!1O{TX<<7j&K;^nlWh' );
define( 'AUTH_SALT',        'Sr52dCm|bHbdYe6YO11$4Kzyaa!I{@^gsuG|GQi,k$6$gJVY) znEDgj-t7)<r_1' );
define( 'SECURE_AUTH_SALT', 'KxLveaPYv+hiSm<Xxi7I|p[D[~A}<R|YyZ$LDJ+A>|nU(|+-JVq2P`GsUdo(]=~ ' );
define( 'LOGGED_IN_SALT',   'f<,B?:GJ 9aSp@]>0-Tj^Z8ibbDAxvJ4[i&g)p2/9gT^;l+Py8F{CX9XK:ilNZ[b' );
define( 'NONCE_SALT',       'ct< <P%1_LL.JrZs`P#T<X+^FDnzSE-|;Jt~q.112ghNl|.}tLfdSu47|FIn<q:q' );

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
