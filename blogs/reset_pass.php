<?php
require( dirname(__FILE__) . '/wp-load.php' );

$user_login = 'admin';
$new_password = 'password123';

$user = get_user_by( 'login', $user_login );

if ( $user ) {
    wp_set_password( $new_password, $user->ID );
    echo "<h1>Success!</h1>";
    echo "<p>Password for user <strong>$user_login</strong> has been reset to: <strong>$new_password</strong></p>";
    echo "<p><a href='wp-login.php'>Login Here</a></p>";
} else {
    echo "<h1>Error</h1>";
    echo "<p>User <strong>$user_login</strong> not found!</p>";
}
?>
