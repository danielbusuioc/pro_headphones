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
define( 'DB_NAME', 'pro-headphones' );

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
define( 'AUTH_KEY',         'xoBci(<.xkiQB~xt**U0Ealx EaBP#B=-J]Ryg|0~pSQd,jpc~-H@e-rPN+eSL=,' );
define( 'SECURE_AUTH_KEY',  'J}WkppWp>L]j1(HDSQwz{}s)~QaGYNRc+.6kjrDO@E#WO$4dmW|@wMKkgxvB@T:g' );
define( 'LOGGED_IN_KEY',    '~zf+KGe*X&CNKA@EwTk^vxw<t;lZsY?@Wt5DhXf1Qn&}DmTCU(N*l#UiQ)=3::aW' );
define( 'NONCE_KEY',        'IX1bZ ^>A@-/|Yf=::}dkd^6n+^x )d8PaWCNMdNGq!|ng%Y|9(# vS PyO?+E@6' );
define( 'AUTH_SALT',        '~^6N<W^D[c6P?4[f*9b_eTN&JC@pgW?0OT5hb=vau1MvPJ^RL+e}3]fT1|ltQ!17' );
define( 'SECURE_AUTH_SALT', ']8K31/l8x+$B<4pMvx~|}Dqg#^PQ[Lq.d,=Jmyj7aLb@5>V|&]mL3hLZ3|fvU_BF' );
define( 'LOGGED_IN_SALT',   ']S0Fv0Fhser3$BRN:,~4tW&#Dd=qf]A(>Ly>Wk:pIBN|E leg4[H];2=acpEH;qV' );
define( 'NONCE_SALT',       '2PbL:!(e8o7.|c+K(3X^gbA9T}rBx`P+g7??):oGu-nhzmnzuVuQc7>Np0x$*w9c' );

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
