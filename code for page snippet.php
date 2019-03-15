<?php
session_start();

if ( isset( $_SESSION['user_id'] ) ) {
    // get user data from the database using the user_id

} else {
    // redirect user to the login page
    header("Location: http://www.yourdomain.com/login.php");
}


