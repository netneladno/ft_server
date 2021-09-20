<?php
define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'admin' );
define( 'DB_PASSWORD', 'admin' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
define( 'AUTH_KEY',         'My)_$Unique$_pHrase$__Phrase_$erwrew' );
define( 'SECURE_AUTH_KEY',  'My)_$Unique$_pHrase$__Phrase_$werwerwer' );
define( 'LOGGED_IN_KEY',    'My)_$Unique$_pHrase$__Phrase_$werwerwer' );
define( 'NONCE_KEY',        'My)_$Unique$_pHrase$__Phrase_$sdfsdfsdfsdfsdf' );
define( 'AUTH_SALT',        'My)_$Unique$_pHrase$__Phrase_$sdfsdfsdf' );
define( 'SECURE_AUTH_SALT', 'My)_$Unique$_pHrase$__Phrase_$sdfsdf' );
define( 'LOGGED_IN_SALT',   'My)_$Unique$_pHrase$__Phrase_$sdfsdfsdf' );
define( 'NONCE_SALT',       'My)_$Unique$_pHrase$__Phrase_$sdfsdf' );
$table_prefix = 'wp_';
define( 'WP_DEBUG', false );
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
require_once( ABSPATH . 'wp-settings.php' );
?>

