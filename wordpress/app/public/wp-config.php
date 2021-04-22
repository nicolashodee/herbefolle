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
define('AUTH_KEY',         'iAJbymT9Ho2kopMgyCcq98QLJ+/fRmTa67kFO5THQISQhrFp3D8tBfVeGf+Y0PEwBRJYlaZ6/cRrZbDYK0FKeQ==');
define('SECURE_AUTH_KEY',  'PN0eb5gOcD8D+SqSQ81APqnYMKA6AmTE/8TLMyvGmEo1MfmZI2U8CCe/dIqso1Iqo3AjVx0GJEN1uwWYEaNwFQ==');
define('LOGGED_IN_KEY',    'IulDslJYeirNk7xwOckK0YaWK14n5uxiYyd9mWsF6P5qdqTovUHbxUcu2cj/6GytrA+Av5CBaY+x/mlwF6KFWA==');
define('NONCE_KEY',        'RZ1AXg5oWR5xHITi3uyfS9h9njsA7MAHYDL7Wd3GQGqfQ7xeVdOC+u3A334skny7T+EyS3KbrszPX6J/6SaBPg==');
define('AUTH_SALT',        'hitqCORLsImdwGON8UNku4DHqJOLmT06Ys0DaJlURADr6SqD3GvkUpkBTGWmWbGTlcIykBRjg1VnesuTTZat6g==');
define('SECURE_AUTH_SALT', 'DToPOhAwU5Cr2QEr/ghEwsEs17ePDtK4R2mDXSNDYQYKI/Q2GqLhAx8OItEIsORd6QBMDoRWEcBuuGIW5M95jw==');
define('LOGGED_IN_SALT',   '9qt+zkyvy8fZxDke4YEZBv0pb85OT6Rx/fYVaQSKK9YoGpr5OVfcfBFDCrkK1FRC9kH+sCT6DAYthl+2m+/EBQ==');
define('NONCE_SALT',       'w+cygY/iC//akm8Em4t5j1apQj8JocAZfOFa5JPrnS0s1z+GST0SAksAW7TO4jcqfMEwwNz9eNQJFGQcQ9+ucA==');

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
