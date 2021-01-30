<?php

class UserModel extends Database
{

    public function create($userObj)
    {
        try {
            $conn = $this->connect_db();

            // Security against sql injections or malicious scripts
            $userObj->setUsername(mysqli_real_escape_string($conn, $userObj->getUsername()));
            $userObj->setEmail(mysqli_real_escape_string($conn, $userObj->getEmail()));
            $userObj->setPassword(mysqli_real_escape_string($conn, $userObj->getPassword()));
            // Encrypting the password
            $userObj->setPassword(sha1($userObj->getPassword()));

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
            $userObj->setUsername(mysqli_real_escape_string($conn, $userObj->getUsername()));
            $userObj->setEmail(mysqli_real_escape_string($conn, $userObj->getEmail()));
            $userObj->setPassword(mysqli_real_escape_string($conn, $userObj->getPassword()));
            // Encrypting the password
            $userObj->setPassword(sha1($userObj->getPassword()));

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
