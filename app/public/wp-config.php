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
define('AUTH_KEY',         'dTBHqh/HoReOyz85H1KGDgGWEYCGRJlQ5cwoUPx5WLghwcEx4OdyvNGw3GPdPZK1Q9b8fAa91EGw0SbZl4cXyQ==');
define('SECURE_AUTH_KEY',  'PQdL/Ot+EdeRx1j8T38qa7hf8o2rMlD6TuZgTEEGsB4H5xVBtDrdhsJMIq5fn5Svyj/bElX+00RENTSUIGNNcg==');
define('LOGGED_IN_KEY',    'CiYi1hjGNyyqqumF0xRqFm2rEHwogVtR1XCliI2TfYcZVcwoCMBB3WIX8H74Ga5TuD9yzOHe+SnoHHjnbs1NDw==');
define('NONCE_KEY',        'HrSohFeRCdXJEKYSZJnLFSgeMJJOXaUSV/cymEmztLcPlUbDcGAm3wd3xaRt8qgmY3olxOuf7F0XAJ5vn0kFlg==');
define('AUTH_SALT',        'ncc4gP1rMSgPw6PzQVBIyV/wFPY0Le5elxgy1jgcyR76s61ThhD4rCqtLFmk/a1uUmQcHJZa13P0Emko5/fqTw==');
define('SECURE_AUTH_SALT', 'JtEupe0g02HfZ7F0wZVjteD9ma5cn+U3EBJd7qp7+ge6uThSMN1k8k+9JJIibh8BVE7Aq1ftt/8Y5M4qyvyxcA==');
define('LOGGED_IN_SALT',   'X2tmqhOZRWjGifkyfU0cAD9Z9wb9tWhlm6raHYGYlBbFLvNHqCPfCWjYO+MDgVbEEVLs/Fh+RdSmw/DfmlrQMw==');
define('NONCE_SALT',       '0ok6zjlIv9lCoapsuKgpxifg9VFGkh//h7A5gaKTlL/nKymny2KxcUtD77UOfA/b3sqI8Fys95ot+XzeRg7A2g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
