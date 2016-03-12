<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u411003848_qesyx');

/** MySQL database username */
define('DB_USER', 'u411003848_vadun');

/** MySQL database password */
define('DB_PASSWORD', 'manaLubety');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6WdLsahRfP8mItAGo5Ui5icAWnUpVszcXj5mfu1y7CGB9RQ6e66SBupZExMOFL0K');
define('SECURE_AUTH_KEY',  'ewSXSQX79m2ktoIYD219f5C0PBC7m1l8lLb2CnAmhFxnSIMEFnfdq2eE6AJISw2w');
define('LOGGED_IN_KEY',    'f9rPh99gXj6R6aGKQRfZTiR5fgKVMQXchECbTvLBrsEoGowYFJd6Ej1ULZjQmyFW');
define('NONCE_KEY',        'H0mHWVfizi5zTOXk3I00qwXAzD1AXOIKVhP3byBv2YQcmJs3VGIiu6QRB5qP12Gc');
define('AUTH_SALT',        'Y8IXxpWMRxXdKexWOKZ98TtR23VBDPOooQqcoT9YAvpzxpOMoHfSiF6qrFPXqezS');
define('SECURE_AUTH_SALT', 'on07aSW9MSzukLUUrLhI4sTRmaWp4S9QpOWYhY29uYuo6qquuxsAswe1fjYMz3Jm');
define('LOGGED_IN_SALT',   '2r8VxXtYbp9P9pHvTyj7k8JxcsSnBde6ztdBwTCPph1wim4lL7TbXm8oHCTnHhyD');
define('NONCE_SALT',       'hDj5Y8YbkwnX4WDAcOtBhwxYwNm4YsB28yPv37qg8KEZkpKSlSTkPjDe6mRhMow5');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0777);define('FS_CHMOD_FILE',0666);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
