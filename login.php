<?php
session_start();

// require config for information
require_once("Config.php")

if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
        
        // get user data from database
        $con = new mysqli($db_host, $db_user, $db_pass, $db_name);
        $stmt = $con->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param('s', $_POST['username']);
        $stmt->execute();
        $result = $stmt->get_result();
    	$user = $result->fetch_object();
    		
    	// verify user password
    	if ( password_verify( $_POST['password'], $user->password ) ) {

            // set session
    		$_SESSION['user_id'] = $user->ID;
    	}
    }
}
?>