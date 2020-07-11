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
define('AUTH_KEY',         'LB6itMcmEw8zbnMe1vjS32suphhgke5pdes9qp7tzxTODo8xu9328hse8ZnJWMSjdZ7Ap79gYn+UL99y9UN+WQ==');
define('SECURE_AUTH_KEY',  'S8+0fZEcOuGA8T8pxQNVdutL4lOxmlAIS1yNiPZFl4Tw23IGPJVNOMeGUQmmScVfuE8GKagQK/6849bjuQQ2Og==');
define('LOGGED_IN_KEY',    'xOldKhISRuKUK2a2nM7sktibtihFX9sMs/yUZZpewwpVVmhQLkaXyDs+LJleEruHRau1Suvrfqgkh6xyljx45w==');
define('NONCE_KEY',        'aJBtYxU7IBSkv6/4nNApKgNENJpb++41k1lWxxCqdQT9Y+AOBqsZl5WmmEGFicKRPjiKRrlKvTFk2L+RGKPNQA==');
define('AUTH_SALT',        '/JLGrhn0FpCbTwO/i+fbBdWIoNYeOJyWB5O5L4ySmOQoqj+yn8vtK1dJQkLgS79y5FJjfL70Evj3OjScHr9vwA==');
define('SECURE_AUTH_SALT', 'Oa8/4wusAMAbA2AhPOFG7OwKJGszg3+4coTLqpic8jJ6OL1pCKyZnSBUSfj3DU88ANLfhy83yDckILbwd9znxg==');
define('LOGGED_IN_SALT',   '/Nrax+zZFqsZ37yIHKmG1RjGTSD+iBNzi1GM1HeE29J5nB8/E+CSqSKBALzxdVRFtLV+YoMXJpskCo+uMCIyzg==');
define('NONCE_SALT',       'D++MGBAYiNY0MFmVYfsX6TjAjC9wnQr4fJkOja6JD7sbJ5FqrdwbQeYAzLXiNhwbjupIz137/G4dH8ifglSX3w==');

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
