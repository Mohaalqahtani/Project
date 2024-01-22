<?php
define( 'WP_CACHE', true );
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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'N]@nxN5fk]I}dz6Orc],R>IqWXo@+P>{ty5cUJrh.#alN?|h:IN4Z/;gC| :q*3U' );
define( 'SECURE_AUTH_KEY',  'oO_`u@DFr.pIP31p)xR_ Di@YSQlJ5`;9IbfC>1!wT{mKK2f-G;zuc%{$!PXA$|`' );
define( 'LOGGED_IN_KEY',    'HrCdRdPP:Gl~c>jC53}9F~i8:y`(NO}=gu5]U5#)3;RO<RX2re1SE1jhm9]%fP`0' );
define( 'NONCE_KEY',        '<YE0<]nIO#x)jG1+X)5iM#7x&8;TqvU+L&IV6?l>?T|MxIkO&Rn>zk9j&cJKn?)`' );
define( 'AUTH_SALT',        'PF%So=Elm~hsVSrk|6BrTcbteKYq|`HL>zD~[z{Iem}6BNTD}ndFlDqLb*C9I7]w' );
define( 'SECURE_AUTH_SALT', '+DjcXl>:`%)@tzx_UoKdwd3v*zi)!^TL[bLozz-|0qLQj*[EMN~|m(Gz=8s.{)>Y' );
define( 'LOGGED_IN_SALT',   'bivZt@a!#6_Qt7t;FRK]@WJsHGbF@7jG>OO/bl-a(1(Lm{;Pax*$tX~djNya;_AY' );
define( 'NONCE_SALT',       '^Z,5>WW3sy0ROV{C4|*6,YM#Y:A27R;Zbm#Ocs^{x,HY/9nc%GoVYeNjSKH1VlyM' );

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
