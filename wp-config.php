<?php

define('WP_MEMORY_LIMIT','256M');

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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wilderee_wp' );

/** MySQL database username */
define( 'DB_USER', 'wilderee_wp' );

/** MySQL database password */
define( 'DB_PASSWORD', '0Hz9NPQGlnBh' );

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
define( 'AUTH_KEY',         'B:*:?J&M/!eG9m+QsirNAi*[{ZmGZu;p9$|S}.HdE|Dts[t[BpoZ[o5>wlS{ @BL' );
define( 'SECURE_AUTH_KEY',  '}mU>)s|X>BGX/bS[?:X*)x#8OFR*yM8m1ZD9-0oTBn.i,qATAA|Hz=IR*l=qqs4K' );
define( 'LOGGED_IN_KEY',    '~;_<&A$WY/P^kX1A>MUw0rD+JloVy.;WpE Xu0>%X#ZK1S(p.apWw/`Xw_%9V4k$' );
define( 'NONCE_KEY',        'HJgd{IQB<Tc4iH`{!-f)!TGmI%OAloL:]e-vxc4#p)V5KqYZi[qUah+QYhLJ*)93' );
define( 'AUTH_SALT',        'wMA>oGwd3x.j},=Q3sQ,tZe4/,TlI%LM-73+U=~w8i0Cm&LyUa)W{:~iv*e`,NG2' );
define( 'SECURE_AUTH_SALT', 'O@=Gwi8}^8|C)B=pZ5_D,>5,3r/rB+HgmN5yp2n[z3kcs$FZd*Y*.u)M>{V*5K>S' );
define( 'LOGGED_IN_SALT',   '*r9g>W0EXX@_|}Qjhu)dlPm+kj7DhtfIvLhA|gLX kiFG#1*rk%#K}pbFB-Ki^Ga' );
define( 'NONCE_SALT',       '1o-S8`MqTjd4F4pl[WPM8VCrbtCG)-Q7~k,dzIW~fF0U(9h5Ikcl2-K4*j?{t@h|' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';



/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
