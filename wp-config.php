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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'lYYzc2Ap+ThnPZaOzbCIW07e7bPFlV39kRktZM63NzZOL5B2/4oTxAVxtDh8Ei12cYu08k53yRKQBNSaaiL8xw==');
define('SECURE_AUTH_KEY',  'PixICDtqpglm8yzpx0i5Fh91PGKFxUpZi0f4uEWk46aQTsvloIzikVbICfEwXpT9jdkYPOUvIkzwhR09gP+qzw==');
define('LOGGED_IN_KEY',    'Sj1Hnku2YedduXeAoatSMjyLr216+OKISn1+WpW5nZqt62Ad6SWAEPqi/v2yo3mnwbVQ1AQ5AuJhO7vTQv94CA==');
define('NONCE_KEY',        'v0y7Rc75WlkAoF03UdycDTHvbvW/7j7pPWCFfAgx7Lb0g4EIVwRi0ujURPXi77dez1LLvxhA0QFKieQW3bu4Jw==');
define('AUTH_SALT',        '4dQgIHtM5qvAPw239eFxWbAvKbkYtZ0FMEbJB29mrCuTg4/u90WHSSbFCwVMeJSRgGXLw6AIHdYeUxBc2MUUIQ==');
define('SECURE_AUTH_SALT', 'o/T29HTlcLmA1nOC9/ruKNrCS80hrR/6ud/5s1xHtr0qGO/6zN2sG+rPYftUQ75o2u5nM5rcR4702v+fTmOsww==');
define('LOGGED_IN_SALT',   'xSX9FpfhjvUAOUReE+lnt8o8nq6OlT9ecAzLpzdgMSjLLNyqG5X2axuqcKqVM9oRhBQWCZYLPGgaRmL9/XMDqg==');
define('NONCE_SALT',       '0mPD+dD6YvzfBG/0CkkPBcTtv6lFVnZj48vlDyWHqQfUeW9+dWYcae8Sg/9yLbbV2n4gNh61VigARAhI1TeqxA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
