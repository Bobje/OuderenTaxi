<?php
// config file voor de database connection
//$serverName = "dbserverdscs.mysql.database.azure.com";
//$username = "dscadmin";
//$password = "dscs@UvA2019";
//$db = "taxidb";

define("DB_USERNAME","dscadmin");
define('DB_PASSWORD', 'dscs@UvA2019');
define('DB_HOST', 'dbserverdscs.mysql.database.azure.com');
define('DB_NAME', 'taxidb');

define("USER_CREATED_SUCCESSFULLY",0);
define('USER_CREATE_FAILED', 1);
define('USER_ALREADY_EXISTED', 2);
?>