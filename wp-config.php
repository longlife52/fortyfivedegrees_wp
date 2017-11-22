<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'fortyfivedegrees_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'm]n]eKisWrGw|([?vcD)QadmjS%Tw|=qNzAAl{pooc|qRqmEpE%{[/m_:Nc#.)(j');
define('SECURE_AUTH_KEY',  'jXPKs+!h*^/y1_EXr>5|h5pDTYF%l#~L%pLbY;Y/FQ6,W7(~[~s F)a<~2uFRy>}');
define('LOGGED_IN_KEY',    'xZ*G,io5] Yiaz2~3Z{c_Sr37eOqAO]nAygv+)IMnp6GKkmiI-J(LlGd8QtC?68_');
define('NONCE_KEY',        'b^_.mvlAvY8EY:A+[@A.0od8q9qSO (bmj8Z;3pNDb*x<-,qayy AvdgQ,71]fNW');
define('AUTH_SALT',        'JyiP78el8 *1-PW_52|PJ=Q!,h2G$)T:OS)ff=w$%~-!KQx]dJoxb1Uo9xp?;Ju7');
define('SECURE_AUTH_SALT', 'kqv/NCBQr!lr8A9/gevj>t&0Bu(vZQ:tl:7i;88-)818Yly&D+}k+{v|?J5(~:zc');
define('LOGGED_IN_SALT',   'gFGsu6~R=RiVgbeYDK7ucwK!({ciHw_1;/%]Wz]O%.2j&)Ul@$yyZf&t3(Qo%Mo2');
define('NONCE_SALT',       '53#%&<dAqi$bO.(Qd+;!Xs^zzGa)u0sa.Yd9`xeX{,%SZg[{vcM9EVqX04yH,}/]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** this code prevents contact form 7 plugin from adding empty <p> and <br> tags that *interere with custom sytles */
define ( 'WPCF7_AUTOP', false );
