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


define('AUTH_KEY',         'pSItftwd4qM514/Kfuy98xwwsNPBe/bZ4zx2UB7vWZnjHUtKJGw0qLTqY523gBSyM77ixVF8ASyU1vFdqjaxLQ==');
define('SECURE_AUTH_KEY',  'uV2mP9ghtlzZGLNfob/ZLwoQc9gqcj301jY2FXY7u7vmlwfvXvSYVYNaIV45Nr1412jx3YTXETuOhZKG+fzjEA==');
define('LOGGED_IN_KEY',    '9HdLXe9XS7PiPzVWOo/zwOGPNs7nrFE3gsZ0vPyiQUIdn2eiXGn5yYu+bz22LwoOLz1CDcAo60YnzKnjW+UOzg==');
define('NONCE_KEY',        'kZjXfH9hxdMdqhdbeHE9gGP7YdNsh3zhoVnJKDa+XPUCU0/UCspT68iuCJhQ9OOlPu+ZnVPy+zpFJXejO1+Siw==');
define('AUTH_SALT',        'J7k+1wU5bpHZuDB5xuHmNcJZUDUqyVsQaTiRfwaxDRl5y1zEjQYJdQXS3zlDlYr/MyzSTeM1woFpeJ0JOEMakg==');
define('SECURE_AUTH_SALT', 'OTnoWPVOO5H2QAivTEBnZp7LpWSuAS1PKZm9GE97ZVR4xRCpqLCtBqOs+kUrQRSRQoSnel63HY4VQhahA6TEHQ==');
define('LOGGED_IN_SALT',   'K6Akj5Kp4Wp/lJCmennyF3SCxP9PErHh+igrgB1qob+5/m2RpmH8sqk9u8lKxMmBzODth2QiW4fQlEaBU37gfQ==');
define('NONCE_SALT',       'ZeJtxSt2IRe8t7NfhfyAFINwRJiXYycBJAAkuTlLOWAK3E8q/Iih5hkjOK7WzE/H87dyMvUsMv8ty3D7+OPMhg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
