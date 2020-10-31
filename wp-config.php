<?php
define('FORCE_SSL_ADMIN', true);
if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
 $_SERVER['HTTPS']='on';
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
//Databases configs for sidecar container
define( 'DB_NAME', 'frydays');

/** MySQL database username */
define( 'DB_USER', 'root');

/** MySQL database password */
define( 'DB_PASSWORD', 'passwd');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');
define( 'WP_ALLOW_REPAIR', true );
/**#@+
 * Authentication Unique Keys and Salts.s
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BP!Hd.Ia6O7)c<(ggw;[F}P~3x5+R>[qhrrUQd#u?#(LREyzT/I(LdD-[9<5m*k?' );
define( 'SECURE_AUTH_KEY',  'bNck![|E1we;Om@h!nLV{aAy)rXDVzO}V_?;xMRx_*%B^}vysA{W8#m|8;Wq ^^W' );
define( 'LOGGED_IN_KEY',    'cHon@M6eWRpN:ubM3v`JzA%cPHCixaK=UFphT5V7<z=8kd}{C7bVhlNz&L+6s~ g' );
define( 'NONCE_KEY',        'Lm4*?0%?27?jyz>?kz#5g.2|/B}Nz8,B`ad73`1bnwk2RyK6!CBF!2<,:I_R|Tw{' );
define( 'AUTH_SALT',        '4~{t.1-RmUzEYVt.y?J-|yhXOAUye5ye/#FNV5Qrz3XCkr1{^a;tTybe#3z[N .2' );
define( 'SECURE_AUTH_SALT', '{Vn#!Ft[,zCU|A)+(tHkz=Ogwbu^Cnb/,gClu3Ag~.g)FqZy_>En7|RE-G<JFX~ ' );
define( 'LOGGED_IN_SALT',   'PUt4?&,B:H0]H`W4lSu54O;?#so$)-Qx5#W<m{3}NWAd3K)4EL%*b(lHT]`1.rWj' );
define( 'NONCE_SALT',       'vt}xZ<F{=9-@sMMdr2yLwZz>Ye_lnov8Dq ~RAH$()*bCDdmZ8TQc+JGFpF.`}l@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('WP_HOME','https://fccdev.bizkt.com.au');
define('WP_SITEURL','https://fccdev.bizkt.com.au/');
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
#redirects
/*
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
   $_SERVER['HTTPS']='on';
*/
