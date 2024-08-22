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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'c)/L$UG1)W.PqA#jK0@l;q1S+3DV$uS!V1LdDRX]t*^/.p.%[2Gk<dX~nwHq5TGW' );
define( 'SECURE_AUTH_KEY',   'F35Z |a#R@=r$sVcrg04/B<WwTZVnc$Q}KL8@6>Re`O|{eW]27i0_+f:$f.%LMyy' );
define( 'LOGGED_IN_KEY',     'Et44S@,ewQu`Y~ju=&4wlwG&dTO&OY0Mq.[*;.)E77yv%J9u7%5`f!3B*6k:BHJF' );
define( 'NONCE_KEY',         'F$7BQ|[)P5`]B$!hhfDE*C/R%6f/@l]*DDDL|4!_YdQ)%o /%CB5FR=!W+!9)d7a' );
define( 'AUTH_SALT',         '@j3oi~;.@Ji21q_13thX#2?u,YCv5(slM8T-JhRV{F$6*JF}CA5b[LBM{8+,87|m' );
define( 'SECURE_AUTH_SALT',  '^#rSEK|OMx(RSb&.g+b~v9KROgMW~n@I=>Pk~&Co#x[5)W|KYk!Sos{H]oE1WW6M' );
define( 'LOGGED_IN_SALT',    '>c(myMG97,}n *5}X8N::JWpfrz|r{pop[UXjtU?ThUb<`Vc1DzVfT1CUK,fZ:7n' );
define( 'NONCE_SALT',        '4PN[Zt1HcXwzBG2%7m&q/$8S7nntg|YPWTzZl5&qOGj+Z_9-zvM.JF-9+f%6Pbz|' );
define( 'WP_CACHE_KEY_SALT', '^g]9{^I{HDe[M=7}.zm_8|3*@<Xb6vh`dK9hJhQYMx87&u~R_]Sp+LG8/F`t45x9' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
