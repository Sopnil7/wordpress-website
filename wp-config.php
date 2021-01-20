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
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'jhzJzLwn2qK6Q&e%w|M0MOUu[;(CcCQ*]yXx!l/(iUeUIb>$V,WELH[XB]_}Avx5' );
define( 'SECURE_AUTH_KEY',  'XP}Eqp:girew5D!H}lF)g]Y}W(PO01<A~09M.l4CO_gFZwE`m5+KM*&z.yX!ggSK' );
define( 'LOGGED_IN_KEY',    '6PSA,};3%3EBI3.R/nBQBj]2a/} 4|}QX<jre.:A[_Wl-h* JPlz=G;8ta6Bu+`9' );
define( 'NONCE_KEY',        'A{d@q(1=}CPNw?gN3QNgj*TxDQrB:Co}X*1&u$_aW[:dOV)z9T`j@`cg}O0Nq/*K' );
define( 'AUTH_SALT',        '<jF1L@szFc9VIhPn0$7Hb|dJJ{I.P#EQXCD#[lnVrc2hWFX}IxRbq[N/RXT<%(6i' );
define( 'SECURE_AUTH_SALT', '@V&YebV=WLj-vE1RLve/PPNS0|3a=Fe<]5:cePOnRu8K UoC-6LK!(W5Tx{Shw)f' );
define( 'LOGGED_IN_SALT',   'd!LQ-N!O`,. ^u<>[A!bIzzoEQp(n~DVI0Z^c$r=C>Jr^d{4Cq~bScx0kvi^4xFT' );
define( 'NONCE_SALT',       ')<;(*XePq-`A>@Zv{yly^{C!7qE;L *65tDb3|*Fu#p/8|BkM{CvY0,f$> oq9Sp' );

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
