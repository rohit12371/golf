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
define('DB_NAME', 'db_golf');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'b]n7tlTP-g=]WC@q5]HRh5]ja;bxQ#7}<?R+XbL5l(/[4wQ$%Yx!=BT=BdL$,4Ej');
define('SECURE_AUTH_KEY',  'J(14$y6[;}LaRT:1m&I@jC18~_P(y|Jm#Au:h}-ftsmB-J>]`H=}(?Jw&M)6VQl|');
define('LOGGED_IN_KEY',    '?S%R|Jm31Nxc1pMWfu]8s{v; a.oCvPT1NE%qb{GlD2EB*jx GQ3jW#oT]dnX|gy');
define('NONCE_KEY',        'mcA:E#Kr:9vJhH8:.fG3?:h0A8WFkoW)i[P@NoG!rsUV4T=QCxXFljiLGLk2-<gZ');
define('AUTH_SALT',        'fK #jw=I>BNn>r,K4]#+jy6d{)7 /%o4S]cKL5VZX4Az_)ByZe@c<rO@ymgq,/il');
define('SECURE_AUTH_SALT', '7yl9hy(aB6$<-8FQCVOr,(z3Tn>4[KI(F->%~! Okv]6[S#Lw&L|Gob!Q$>-en<U');
define('LOGGED_IN_SALT',   'u/JR,(@v6GA:/1PL5plUp5m6wx7K@fz5-.Ncq<PoL_U_DUKKw#h<w!9qDX.9?yWp');
define('NONCE_SALT',       '_3:r3;-8iSg)WzxbLUZ#vYJszcsAr),,(~Vz8:vq2lBt}14DXm^}=fi#=C@+{i3e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'golf_';

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
