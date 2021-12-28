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
define( 'DB_NAME', 'dbs5144212' );

/** MySQL database username */
define( 'DB_USER', 'dbu291761' );

/** MySQL database password */
define( 'DB_PASSWORD', '431GzxZXx8LDCCXilFniOJ9tQ9q9lwrC35x' );

/** MySQL hostname */
define( 'DB_HOST', 'rdbms.strato.de' );

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
define('AUTH_KEY',         'G7NHCSE9mvF8G0fOibCzOIg6x7aQPlRu0EtYnIsfeP4yGgUY1ahG9PUavtaqfMj8');
define('SECURE_AUTH_KEY',  'oPr0LNDS7FDgwhvwkYU4qVoWworaodIJHFi2rn0AeHjzLUspfthg5BB9vhtcJEYH');
define('LOGGED_IN_KEY',    'MSkuoqyADhfSk7xPTO2RRJa9AmlERGMQT2KullH5fJttU4FAY3wEmjiIdHgFiedA');
define('NONCE_KEY',        'oJ2SBr5kRkdKwkFzv4lZglxvpHc28WilT3jGlyMsRsUYd6Vyr2vyOJipi9CdRcOm');
define('AUTH_SALT',        'PrpmXpP8lliRIr3XalWmHSwalVkT7WIRj08L3cfOlQP3T3bNKGXMHBJQ4SqWwEgU');
define('SECURE_AUTH_SALT', 'gVW7qTPs97LjnsIjtZUtXw6ufaiJBvM6HgbQvEn5pfQ0kk4HpL9bdEjBoBWpHEKp');
define('LOGGED_IN_SALT',   'pdxXAnG1siSTUvvV8u8qQ3VyHuvNQg4CHyhYUfaaYhuFmGb1MY4HWCoBgqz9YkBE');
define('NONCE_SALT',       'HF5uHtFQ0eqnOJQZ1fX0zYxvlyt26x524jiMV1JBgYHuCbDri4I04rwoRrfcXP3v');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'v1cv_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define( "WP_AUTO_UPDATE_CORE", true );