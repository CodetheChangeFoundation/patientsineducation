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
define('AUTH_KEY',         'pXRKR4t64JzUBd3uKqFdTYeW2Bm63Fe/kULBOjiTDcyeM3aI3Lp2lolP3KzDI1wzhzpv1RRoGcz+ZdttbjCiBA==');
define('SECURE_AUTH_KEY',  'm+PE6iriWRK3EZ9CO4kXLTGE1xR3H4BR85Sswnrf2XqLcorU6++g8dXCs3RBsxmUVQcH4NASL2Ze1rbOTb0HBA==');
define('LOGGED_IN_KEY',    'JI6b3jrVqHZdrTT+bsTkQGp7ymbWx2JlNnXCawJWeDrSEJquZjkay/dZWARpX3G6StTA9E7MW6kubLbjU+gsQQ==');
define('NONCE_KEY',        'cXL4IxYNyOKxaSHtjRaRkfYJsTyCawo04/V3zkTVWAgGv67n+7N6aMaAThaqHEp9oRlbQvkHB/QNaH9fse21QA==');
define('AUTH_SALT',        'vmxngV+KA3X9oKHm51YSCFMJACyyH4p4WzNCZ5mZDH45S3cLFHTlOBs8yyvJCMH6KlW86v9hFN/6Us+qTtDr3A==');
define('SECURE_AUTH_SALT', 'DKL0s6Qoi++eHo/6jAxXfSx+OYvQQDPnj9MJur7FbdV4yWH1tJZtwqraPyi7Lili6lMnGpP5yu73kYv+HYICKg==');
define('LOGGED_IN_SALT',   'glrIIileEf6GvBlttqzW8BigL3AEp9OiqVHwgLTxwXnHgcFZna/bZ176btdKrh4504iLmoapG5KRlJ6NnZYpDg==');
define('NONCE_SALT',       '6slDgTbD+HVAzSKFMmBuRP6mvdZpoBV8xCtQCGN9yoqR8U09CMup8G04eRWRPuHOYQLwEiV43eJJlfYtoo0HLQ==');

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
