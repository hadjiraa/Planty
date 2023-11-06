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


define('AUTH_KEY',         'z/u0M5dUQ5WM/VhrhM5+j5imqkaqmAEjzILZLeVqOW5qqT5qNOoVZB/aqzCsisTDnQ/7+PWmwm0beZKhE1dbgw==');
define('SECURE_AUTH_KEY',  'xedECtUyfpz7G4bmd1ZSfRDUzfNcjKQBNsJb8tTz0rqnYswHgiu1JGqtQL7QkqNqkimSvWROFKLROnwogok3tg==');
define('LOGGED_IN_KEY',    '6h0ZjIJFn/w552FYKu/3E0TjJ8Wv17iI23jfYUwBZzYtYNyYBGQ1XgfOLmO3ovIhVWCTlyg2UFXUXpdK0QiUSw==');
define('NONCE_KEY',        '3E3iJ1DWw9+LTsCj8TFCZapiX2e84CyzyQRzzcWbBjBMDF9cFWziicj3bOwah66zcWAnj9jG1MpyukbfcFs5fA==');
define('AUTH_SALT',        'gc7ihru83xusy5+XsFlh0wBJSqy7/ItwAnvZUTuz36aXo+OJM1Px3NMbQa06QmLVp3flwVUIHsrZJo4EiTrRrg==');
define('SECURE_AUTH_SALT', 'a+PBWco91k+z7nvMchjLaISSNGz9VmA43XuPPWP+ICCI4haUrOWpfIn8UmuF2gWcpluWJWizKKxvPbdI6IO8Eg==');
define('LOGGED_IN_SALT',   'pnYBi7pxsbia9++t8DdkzlYWjer6JO/j149fhHIsHBh35FwF0WhqJlyRRoO5sv6fOvwAKP6KGvOKIAROI+/3Qw==');
define('NONCE_SALT',       'E8X1oOlm5wjzQLuVEdpsZrmZHnKrGlhRGpvhJtKraVXNZcRv/LS5k2+uWuOMEhuYQShxtRl8eH/j9LKZ4oVvfg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
