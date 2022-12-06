<?php
define('SERVERNAME', "localhost");
define('USERNAME', "root");
define('PASSWORD', "");
define('DBNAME', "db_thucphamsach");
class MY_model
{
    protected $conn;
    function __construct()
    {
        // tạo 1 kết nối với csdl
        $this->conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function close_connection()
    {
        $this->conn->close();
    }
}

