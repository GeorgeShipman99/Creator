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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'creator' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'K[8ixM.{,TysFX_>nu]*D(/S<XBpc7>:3)X<7-rx~pm^&Nxgjf/p4ct?;q|&FXdT' );
define( 'SECURE_AUTH_KEY',  'j^#kDrt:;}?C0w;q/x#N3^gFE3p`*`7y{8g1Ww_?1:Kr5i-v6cY.&GR,|*<2!_k%' );
define( 'LOGGED_IN_KEY',    '<8^=|;d $~SxR$GPep48[I);&bZ>4rJbt~lQ(nhw[1b/CG|m9<u`WI.i].w|}]iS' );
define( 'NONCE_KEY',        'hW`l!DQO~3MbUWv@&J(or+N2u68:ieF#C]5By%cHSKp<B:ji!i=0G7SqpQX=hkrd' );
define( 'AUTH_SALT',        ' ?B%n>efGNuK%7%oo=Qbh6l!3R_*[J1v[2{)^B/h<e1pfm$Zu*b2p-MWG9dsa6b>' );
define( 'SECURE_AUTH_SALT', '1,X2x.-yQM[CAyC=A9d)o@cr}=oFQpBonZ|V4|jsv6C-7;bbj@iO.zpt<,0HhLq5' );
define( 'LOGGED_IN_SALT',   'X(^!-u9&!aQFPF8r}s4aW_]Iy$b`eX-JR9929e]+*_W^-!:ib:0lJ#x_b&|SR]J^' );
define( 'NONCE_SALT',       'rs:=hzp1~6h>wus)?X{ZxuHZG=iM08n?XW0~ev(G=!gex}Kq]wMj*1sLX:Ao=l,F' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('ALLOW_UNFILTERED_UPLOADS', true);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
