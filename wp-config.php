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

define('DB_NAME', 'cyberma4_s2017');



/** MySQL database username */

define('DB_USER', 'cyberma4_s2017');



/** MySQL database password */

define('DB_PASSWORD', 'Develop786@');



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

define('AUTH_KEY',         'm_0X[PwCT9UjwAB#*!,pC(V(87s3>qzB(`Q:v%NdUQd!t=2{m7B+b?4`*o!fsPPI');

define('SECURE_AUTH_KEY',  '<uR<=1~}_bCkOw(|i*l__<?<|8ozx4d`wYz0y^}.]X-vwBxcxFB1^g~}Q;U8-+ K');

define('LOGGED_IN_KEY',    'yzan@x(V&<iv2.hTbrCvYrfoI*S=Bx,j77;=X&|YzO%A.=|iqQ(5tEBs7u&=!mX0');

define('NONCE_KEY',        'PBmc?x?~P%Tx%dk:L)lTB{X*s .Owd4@Z(;?zUD}}HgF0{h%[T7LbDTL@ :Utv/2');

define('AUTH_SALT',        'Rb$g]v|9YoWBlPp=a95atBJ7zh4H|0&O<1j-`:bk$H587CRd=; #k-A2VX^9u]WP');

define('SECURE_AUTH_SALT', '0xg%- gZwg3#^48J[vEkIoO-/D]ZLYIW$SD*--RM$BZz`1(Z.Kis5^TjifGm8x,=');

define('LOGGED_IN_SALT',   '^tTr5!UHM-8pUayCclo`Bq#Z:<<q E.:%6#!HDg!^959H:Fb2Foq(V-?Iw+n99DR');

define('NONCE_SALT',       '21&x2,}PgT9A-]?Pybz*ggQW8@xaqbT$duu2]=b1]5aYG?Zte;>E;.ClYxLAi3?X');



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'cms_';



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

