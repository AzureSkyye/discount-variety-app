<?php

require_once('models/DatabaseModel.php');

class UserModel extends Database
{

    public function create($first_name, $last_name, $email, $pkey)
    {
        try {
            $conn = $this->connect_db();

            // Reset auto-increment beginning at 1;
            $reset = "ALTER TABLE users AUTO_INCREMENT = 1";
            mysqli_query($conn, $reset);

            // Security against sql injections or malicious scripts
            $first_name = mysqli_real_escape_string($conn, $first_name);
            $last_name = mysqli_real_escape_string($conn, $last_name);
            $email = mysqli_real_escape_string($conn, $email);
            $pkey = mysqli_real_escape_string($conn, $pkey);
            // Encrypting the password
            $pkey = sha1($pkey);

            $sql = $conn->prepare("INSERT INTO users (first_name, last_name, email, pkey) VALUES(?, ?, ?, ?)");
            $sql->bind_param('ssss', $first_name, $last_name, $email, $pkey);
            $sql->execute();
            $result = $sql->get_result();
            $sql->close();
            return mysqli_fetch_all($result, MYSQLI_ASSOC);;
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }

    public function validate($email, $pkey)
    {
        try {
            $conn = $this->connect_db();

            // Security against sql injections or malicious scripts
            $email = mysqli_real_escape_string($conn, $email);
            $pkey = mysqli_real_escape_string($conn, $pkey);
            // Hashing the password
            $pkey = sha1($pkey);

            $sql = $conn->prepare("SELECT * FROM users WHERE email = ? AND pkey = ?");
            $sql->bind_param('ss', $email, $pkey);
            $sql->execute();
            $result = $sql->get_result();
            $sql->close();
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }

    public function readAll()
    {
        try {
            $sql = "SELECT * FROM users WHERE is_admin != 'true' ORDER BY created_at";
            $result = mysqli_query($this->connect_db(), $sql);
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }

    public function delete($userID)
    {
        try {
            $conn = $this->connect_db();

            // Reset auto-increment beginning at 1;
            $reset = "ALTER TABLE users AUTO_INCREMENT = 1";
            mysqli_query($conn, $reset);

            $sql = $conn->prepare("DELETE FROM users WHERE user_id = ?");
            $sql->bind_param('i', $userID);
            $sql->execute();
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }

    public function verifyAdmin()
    {
        try {
            $conn = $this->connect_db();
            $sql = $conn->prepare("SELECT * FROM users WHERE is_admin = 'true'");
            $sql->execute();
            $result = $sql->get_result();
            $sql->close();
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } catch (Exception $e) {
            throw $e;
            return false;
        }
    }
}
