<?php

require_once('models/DatabaseModel.php');

class UserModel extends Database
{

    public function create($userObj)
    {
        try {
            $conn = $this->connect_db();

            // Security against sql injections or malicious scripts
            $userObj->setFirstName(mysqli_real_escape_string($conn, $userObj->getFirstName()));
            $userObj->setLastName(mysqli_real_escape_string($conn, $userObj->getLastName()));
            $userObj->setEmail(mysqli_real_escape_string($conn, $userObj->getEmail()));
            $userObj->setPkey(mysqli_real_escape_string($conn, $userObj->getPkey()));
            // Encrypting the password
            $userObj->setPkey(sha1($userObj->getPkey()));

            $sql = $conn->prepare("INSERT INTO users (first_name, last_name, email, pkey) VALUES(?, ?, ?, ?)");
            $sql->bind_param('ssss', $userObj->getFirstName(), $userObj->getLastName(), $userObj->getEmail(), $userObj->getPkey());
            $sql->execute();
            $sql->close();
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }

    public function validate($userObj)
    {
        try {
            $conn = $this->connect_db();

            // Security against sql injections or malicious scripts
            $userObj->setEmail(mysqli_real_escape_string($conn, $userObj->getEmail()));
            $userObj->setPkey(mysqli_real_escape_string($conn, $userObj->getPkey()));

            // Hashing the password
            $userObj->setPkey(sha1($userObj->getPkey()));

            $sql = $conn->prepare("SELECT * FROM users WHERE email = ? AND pkey = ?");
            $sql->bind_param('ss', $userObj->getEmail(), $userObj->getPkey());
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
            $sql = "SELECT * FROM users ORDER BY created_at";
            $result = mysqli_query($this->connect_db(), $sql);
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }

    public function delete($admin, $userObj)
    {
        try {
            $conn = $this->connect_db();
            if ($admin->isAdmin) {
                $sql = $conn->prepare("DELETE * FROM users WHERE user_id = ?");
                $sql->bind_param('i', $userObj->getUserID());
                $sql->execute();
            }
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }
}
