<?php

class DBconfig {
    private $conn;

    /**
     * DBconfig constructor.
     * @param $connection
     */
    public function __construct($conn) {
        $this->conn = $conn;
    }

    function connect() {
        include_once("Config.php");

        //connect to the Database
        $this->conn = new mysqliy(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        // Check for database connection error
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        // returing connection resource
        return $this->conn;
    }
}
?>