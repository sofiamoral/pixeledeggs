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
define('DB_NAME', 'pixeledeggs');

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
define('AUTH_KEY',         '%gI_tj6yL&u YW!g=PaM^BIeZ$hwY+DdMB#S`Z`Fk&Yc|!+Ry;%[4-9,WcD_k)@a');
define('SECURE_AUTH_KEY',  '7j4Qc=:_ VVQ[Mg!urN=<}hidO]aetd*G4q<K%g/Mf.DZAoE+5yW}oZd+f&.^Gv+');
define('LOGGED_IN_KEY',    '-||ofubu~M%:G8J&nm,bS?6N-[//#H{S1:q<X=sb|Lp+()u}39*eNpOX<Yx*^^b$');
define('NONCE_KEY',        's&%n8|F|K<Ipt9g#ZO(-,A^t}V)FB(^sIj<q9k=FI;te#WDQ(qJmF}~+K9,$59+(');
define('AUTH_SALT',        'D-zA@ahKb o@4Kkl)mDI?^ltFjoCF}| 4 2ia^Ns>Lv%xeL/)9;;MYYuH_*m%6BY');
define('SECURE_AUTH_SALT', 'k3)Pyl(/.$3ITN$iMNq)r$&G,#kxIL$B%4$i12[o<~uo<D(aE0f@]@C>6DB]b+jC');
define('LOGGED_IN_SALT',   '3$[U|1q40Q<|3E|AV>wEAEV+-0MBgX/~gSIv$,JG$PCoy?V@WX; TeDu9=4yeMh7');
define('NONCE_SALT',       '/ &B_apnat3d33|Idc@v.jBU:mr =IY5<h0>Y3*2xM#uKJ2Tc~aLRR8A.H:h8@xh');

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
