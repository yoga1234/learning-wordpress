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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         '9qFbmna5PB2tZmWoCHziNIQ6TnN0H1/g9/GI898P13yqtIOJ2LPlhmc4ZZfuBEPcQa3R6oc/9SGwJtIHSfWZjw==');
define('SECURE_AUTH_KEY',  '4UpMo+PPXf8g5ASija1VuILvn7AhBFNTe529/cgTo5b0IPLDGb+0x08GJM6tnYG+PnWT1uVUuwbZ0lbtSnnr+Q==');
define('LOGGED_IN_KEY',    'xXmS0PdX1EIcsu6FqezLRYYkAQeHwcCFl0MsfYjEvhKcKETA+xOMCQ5LllGvjbu4F+DDgfMlnLkHifQ9pd1rsw==');
define('NONCE_KEY',        'ibUZHaQ5N3rqqr1TIlp6CrGvamMLtiyiFxXJt3DvKlpc+nVCiVNjQ/25tAq5lWKrHGgcxDe0XYzu7aDf2xCbNA==');
define('AUTH_SALT',        'MuwOwR1MWn79WJg48q5ojnE+CRYJPaJJK8sfkT0vgheFA3RYCoVO/82Ggg5O8yVYK9oxnrQNjBmlYzGwIcPL2g==');
define('SECURE_AUTH_SALT', 'JSiah5WHvlsh4FTWK2HegDZ4b/WsmBZy9+X/79gpQ9ueUZ/TBdB+Rkqj8wn3W+8h7JdyFdM/edPWLxf/93y/Rg==');
define('LOGGED_IN_SALT',   'cbye8cmjZHmdfy9FsJg4MiHUql13xpMAjrJorxlUM7XFpwqVPZD/OP3rC7mMr3phcmczOCLu95VSzYk51uNHsg==');
define('NONCE_SALT',       'CrbTpxHeOU8IzC5HKs1f6TawZ50F0Fy8qjkfhwJ0Yqad+QbNPJFPFsut8NWLjkrlS/PgGo0qe8ZWIs4d+50WZw==');

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
