<?php

require('models/UserModel.php');
require('models/User.php');
require_once('models/DatabaseModel.php');

session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();

class UserController
{
    public function __construct()
    {
        $this->userObj = new UserModel();
    }

    public function userHandler()
    {
        $user = isset($_GET['user']) ? $_GET['user'] : NULL;
        switch ($user) {
            case 'create':
                $this->createUser();
                break;
            case 'validate':
                $this->validateLogin();
                break;
            case 'guest':
                $this->guestLogin();
                break;
            case 'logout':
                $this->logout();
                break;
        }
    }

    public function validateSignUpCredentials($newUser)
    {
        if (empty($newUser->getFirstName())) {
            array_push($newUser->errorMsg, "First name field is empty");
        } else {
            $newUser->setFirstName($_POST['first_name']);
        }

        if (empty($newUser->getLastName())) {
            array_push($newUser->errorMsg, "Last name field is empty");
        } else {
            $newUser->setLastName($_POST['last_name']);
        }

        if (empty($newUser->getEmail())) {
            array_push($newUser->errorMsg, "Email field is empty");
        } else {
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                array_push($newUser->errorMsg, "Not a valid email");
            } else {
                $newUser->setEmail($_POST['email']);
            }
        }

        if (empty($_POST['pkey'])) {
            array_push($newUser->errorMsg, 'Password field is empty');
        } else {
            $newUser->setPkey($_POST['pkey']);
        }

        return $newUser->errorMsg;
    }

    public function validateLoginCredentials($registeredUser)
    {
        if (empty($registeredUser->getEmail())) {
            array_push($registeredUser->errorMsg, 'Email field empty');
        } else {
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                array_push($registeredUser->errorMsg, "Not a valid email");
            } else {
                $registeredUser->setEmail($_POST['email']);
            }
        }

        if (empty($_POST['pkey'])) {
            array_push($registeredUser->errorMsg, 'Password field empty');
        } else {
            $registeredUser->setPkey($_POST['pkey']);
        }

        return $registeredUser->errorMsg;
    }

    public function createUser()
    {
        try {

            if (isset($_POST['submit'])) {
                $newUser = new User();
                $newUser->setFirstName(trim($_POST['first_name']));
                $newUser->setLastName(trim($_POST['last_name']));
                $newUser->setEmail(trim($_POST['email']));
                $newUser->setPkey($_POST['pkey']);

                // Set error messages
                $this->validateSignUpCredentials($newUser);

                if (!empty($newUser->errorMsg)) {
                    $_SESSION['userObj'] = serialize($newUser);
                    header('Location: views/signup.php');
                } else {
                    $user = $this->userObj->create($newUser);
                    foreach ($user as $id) {
                        $_SESSION['user_id'] = $id['user_id'];
                    }
                    $_SESSION['first_name'] = $newUser->getFirstName();
                    $_SESSION['userObj'] = serialize($newUser);
                    header('Location: views/home.php');
                }
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function validateLogin()
    {
        try {
            $registeredUser = new User();
            if (isset($_POST['submit'])) {
                $registeredUser->setEmail(trim($_POST['email']));
                $registeredUser->setPkey($_POST['password']);

                // Set error messages
                $this->validateLoginCredentials($registeredUser);
                if (!empty($registeredUser->errorMsg)) {
                    $_SESSION['userObj'] = serialize($registeredUser);
                    header('Location: views/signin.php');
                }
                // Check for login values
                $checkArr = $this->userObj->validate($registeredUser);
                if (!empty($checkArr)) {
                    foreach ($checkArr as $row) {

                        // Check if they are admin first
                        if ($registeredUser->isAdmin()) {
                            $_SESSION['first_name'] = $row['first_name'];
                            $_SESSION['user_id'] = $row['user_id'];
                            $_SESSION['userObj'] = serialize($registeredUser);
                            header('Location: views/home.php');
                        }

                        if (
                            $registeredUser->getEmail() == $row['email'] &&
                            $registeredUser->getPkey() == $row['pkey']
                        ) {
                            $registeredUser->setUserID($row['user_id']);
                            $registeredUser->setFirstName($row['first_name']);
                            $_SESSION['first_name'] = $row['first_name'];
                            $_SESSION['last_name'] = $row['last_name'];
                            $_SESSION['user_id'] = $row['user_id'];
                            $_SESSION['userObj'] = serialize($registeredUser);
                            header('Location: views/home.php');
                        }
                    }
                } else {
                    array_push($registeredUser->errorMsg, "Error in form");
                    $_SESSION['userObj'] = serialize($registeredUser);
                    header('Location: views/signin.php');
                }
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function guestLogin()
    {
        $_SESSION['username'] = "Guest";
        header("Location: views/home.php");
    }

    public function logout()
    {
        session_unset();
        header('Location: views/signin.php');
    }
}
