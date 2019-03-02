<?php

    class dbConnection {
        //locale variable
        private $conn;

        public function __construct() {
        }

        //connection to the database
        function connect()
        {
            include_once("Config.php");
            $this->conn = new mysqli(host, user, pwd, db);

            //checks if there is anything wrong with the connection (like wrong password, wrong user
            // or server down etc)
            if(mysqli_connect_errno()) {
                echo "Connection Failed: \n" . mysqli_connect_errno();
                die();
            }
            return $this->conn;
        }

        //close connection with the database
        function closeConnection() {
            mysqli_close($this->conn);
        }
    }
?>