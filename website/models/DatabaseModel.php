<?php
require_once('../config/db_config.php');

class Database
{
    public function __construct()
    {
        $this->host = DB_HOST;
        $this->user = DB_USER;
        $this->pkey = DB_PKEY;
        $this->db_name = DB_NAME;
    }

    public function connect_db()
    {
        $this->conn = mysqli_connect($this->host, $this->user, $this->pkey, $this->db_name);
        if (!$this->conn) {
            die('Connection error: ' . mysqli_connect_error());
        } else {
            return $this->conn;
        }
    }

    public function close_db()
    {
        $this->conn->close();
    }
}
