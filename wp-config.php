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
define( 'DB_NAME', 'gravityform' );

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
define( 'AUTH_KEY',         '?X(dA2nOctqCQ~5lkxEL@qvRj>02DdKE8ce)YelG-0du4B[JgGXoYfS%THAr<7uh' );
define( 'SECURE_AUTH_KEY',  '>P@bFP()(>tNpgaD!x^.]Wk1 +Rny&ibiGBtecXj_wo==^#Iu k9gWC-b#uQVXUe' );
define( 'LOGGED_IN_KEY',    'z(mFataYCnl( RcqH4z}`AC=Wv^`2}KI+iK2:Xmx2EbMS?X+%T]pm[^3nP_BBc@O' );
define( 'NONCE_KEY',        '8*#$QD[S0rz&QFYYpRfv/3{4rm-iPis-!#Rw{+,e5ynJL&:P#e*_dQO1j./-6dE1' );
define( 'AUTH_SALT',        '&M1?;fx`93DE(SQUq|3616(mpzNYHoVEcoJ5;pqw`Q3,^7ve-> yrD?U..~++G`{' );
define( 'SECURE_AUTH_SALT', ':m-&w1DOLIC;)te|R`AxQ^Ln{^tOnyh6p#)>N7Aq5X-xP9-P*ewB__z6,+,]k>`N' );
define( 'LOGGED_IN_SALT',   '*s?w80~4,@$kD/~g-&gJH[.L^NDp=LX`3NLz3zf4=7dKLGg0fL^TjgLI(oa)#CAe' );
define( 'NONCE_SALT',       ' bYb(;);SFy`x/9?v?]K:$jkf7xgb8}cR?r0+U]K[8-F3I YxtAOxZtTh)YSBia*' );

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
