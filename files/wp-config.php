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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         'p&{Ysg^NB]?mmNpG_Zvq~mOT2ukkM4GG~dXVg<W%0xi~Qi)t4C~iTQHREW&4L,G)' );
define( 'SECURE_AUTH_KEY',  '1nEmK)6;)QE7Y+${LA/q}fsc=u1QH3#h=[DJ@6ewx@L[mYTglb;7P]063x%S!#+a' );
define( 'LOGGED_IN_KEY',    'Wx%ekFHVAq$]eZS}H#ZoDbmNcXr){x|DpzUtCiT#0H.we3))v MNcSo-lhAxb_nE' );
define( 'NONCE_KEY',        'z|&F9ed+h*nn]?;31L(,hfT&.Pg5&Z*EWst7U[y#IlLx_G/jVX-RJY_1f|YTT:Tm' );
define( 'AUTH_SALT',        'PT zrbtSTBS1UW53%0(]Yl6^J`[+;:}C2,=lb!xm#?/Ls(x`SEq](?*_SjXH^-N3' );
define( 'SECURE_AUTH_SALT', 'ZqrS)~zE79!vMy&-M0;]^57z`E]ubjfJA[dUCCY:N<>UQCriZM]e`%#<r@,e&N8=' );
define( 'LOGGED_IN_SALT',   'pn+? %Mc0!Eh^QP96A#>+B4t--37D+BOyaOq{H@#jXkttY`&@[q3M_wp{.JEfni~' );
define( 'NONCE_SALT',       '#_$WQ8mA i}dk$ay(-!U3Lf_BKSCP@_l,y23jyJv6_x,X[S)#G_:<;*p-5IeUn+o' );

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
