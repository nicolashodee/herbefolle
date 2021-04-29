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
define('AUTH_KEY',         'FD+TNRl9q3/ebZY0A6Nl30proiYRcRSUVNPl/ttwzJ3LpGD2+FugviKqa+ykSANY8e7QxwUmGxjuuD+R4SvhRQ==');
define('SECURE_AUTH_KEY',  'WYmpzBbkt63viu4a9NxUd0HT16i7P2Uz2+YjxEx1fJgN0MSVGTEb/ARTGjyLqaxYa/aw4//pgaHkVcwaulgG4A==');
define('LOGGED_IN_KEY',    't1NKRT23givxwpwgCeOboo1rCwn02A3RaBi5VqJcKWFoJ7994yWY+jXCycRWAQe0iLljb5FBlOqleyki0Yj9og==');
define('NONCE_KEY',        'TgHXtr3gmGk7zhMU6pH+3rB5OFSwsxl7iPcVpgMSKg3dN+baqaH+5SNmZ6tGomoaVV9eBXVxGnuvR0l9Q23g+Q==');
define('AUTH_SALT',        'p4brpvl1KpFYcKh2ms5IuFYNt+WenHYzheOgrCXUHrAhJEkOH1YgAH1/BSoG8vex/3S/xowcVqEvjB3KGysIQQ==');
define('SECURE_AUTH_SALT', 'BxBwE0a/X3A+4ON9RKfl/Dg1WMO8ROc9llLbvvNszRXf0cUM/5dYOvwpU1pFnxoLndEt3f18EQxLuqlRb/PUqw==');
define('LOGGED_IN_SALT',   'R+3kH3HelNlrFPHjFIDaQBiWpYjNXjkVDLRVZLY+GF1cmF23gwxjLnfzvRw2E2tgasSzuzsKAbiUG8mOhx2WPw==');
define('NONCE_SALT',       'A1FYnkMyn7ME2T73p4EuTaFmpwIRNeiKGU4GIPxO13eN68gmVuoD+LZBVFRh3rNo5VJCpOJeHIhsEn4ih1cHfQ==');

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
