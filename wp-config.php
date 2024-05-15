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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-learning' );

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
define( 'AUTH_KEY',         '/XFvVELZ^Y)r_H]m,|9C3dHI_f~^#9BHKBlbn[J}8[g}0HBwYre=x} h# 3MqZs|' );
define( 'SECURE_AUTH_KEY',  '<Qa>goNUHZ<9uNfySNX`7;hGai~dBPP7!&V3xx:$;{zuu/29k:x#y4bwhd=FfY,l' );
define( 'LOGGED_IN_KEY',    '7] -Y8*XuJ?eq}L;V|x47gPYAP,e!sE-o?[9tE=Io6-8=WNX[RoQFQ&mvk&A[QW$' );
define( 'NONCE_KEY',        'dHC@U28S?z]+^cyaIAd&,aI%3Ekl#Id0|>RH9.$/vfD(Bi{nnB#)W6MV3r3Kd]a0' );
define( 'AUTH_SALT',        'H^1.q2oiN~^?P9h{FU^q2cG<o4uG]NY-[CEqejjaDmVYVB1d<i!&d;b-qXHPRtQS' );
define( 'SECURE_AUTH_SALT', '?uehJ}>^D^jiYu$]VD!KfA%ArCFe@[Man9ooO9y_!YeEHxdK,zJa-%h^bmG?+M64' );
define( 'LOGGED_IN_SALT',   'J-7v7_RJD!xuaSzYP25tv+JQK&Zdv45k$eBa3>dXkd$^S#5?@n`&H7dBLWeP=t1V' );
define( 'NONCE_SALT',       'z2YgLNA+Gmz7k[``ZuwsF.0Z;h|DVpe[M$AwZgL:nPTEw!]dNx}n]G=X[b*g#!Dp' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
