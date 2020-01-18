<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dev42' );

/** MySQL database username */
define( 'DB_USER', 'dev42' );

/** MySQL database password */
define( 'DB_PASSWORD', 'WReFrumOze1r' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql12-farm70.uni5.net' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'N#^l.c=0uVcI;AskW!^ZlD%F>3FeLrp1G^VtJ~6BHJty3HEN(yyGJ;?h*<|z@t8&' );
define( 'SECURE_AUTH_KEY',   ',p{~j^</&rg]$R{hFPE{(oaUF(S{YO|=G{G(BTWTR7qXx{%=#XVc}/^%sO<g@=qS' );
define( 'LOGGED_IN_KEY',     'vJ<>3GcvP704^`tUsqNBvtpt.f|6J!fSQZCkpwZ`W)=&0*qFqK idz_zh^U{,cHD' );
define( 'NONCE_KEY',         '1*9ldR$/~+4%m4;<`$UQZ@_-RLL8j%LO55SUhTZZ)gCSB&| V?S}B^wTqP49RFd3' );
define( 'AUTH_SALT',         '8b#&R8w{mNYIl9BW:;MH#t9Z[K&[I7lU+HY-_@z!E)/#e K%Qlm9za>n*}{n7}.i' );
define( 'SECURE_AUTH_SALT',  'WAMEnkSVK2{lv.ois$8|9(!BiROuIhDb#16iw8,1 `LN 1VXeGq.v+bdg]or7gK1' );
define( 'LOGGED_IN_SALT',    'j&mD$dY$A+BQmFYZ1u`CwWD_,^DA{>#Y+9MSR`|rs4-9-uB{6zf&|2 JW(/3c25S' );
define( 'NONCE_SALT',        'h_k]w|L;N6x4Pk^aHu*3A$>zkfyi{m,}KaGH*l/vcrpBBK@mDMqNtE9;[U`<7^7w' );
define( 'WP_CACHE_KEY_SALT', 'q}#X)LmZX4GHJv>B4_9Yx&$ gCdPr=6TAhspMuTDquFNf%uCzJ&i[.L?}-N8.P~T' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
