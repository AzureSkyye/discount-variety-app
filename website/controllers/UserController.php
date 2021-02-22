<?php

require('models/UserModel.php');
require('models/User.php');
require('ProductController.php');
require_once('models/DatabaseModel.php');

session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();

class UserController
{
    public function __construct()
    {
        $this->userObj = new UserModel();
        $this->displayObj = new ProductController();
    }

    public function validateSignUpCredentials($newUser)
    {
        try {
            if (empty($_POST['first_name'])) {
                $newUser->errorMsg['first_name'] = "First name field is empty";
            } else {
                $newUser->setFirstName(trim($_POST['first_name']));
                if (!preg_match('/^[a-zA-Z\s]+$/', $newUser->getFirstName())) {
                    $newUser->errorMsg['first_name'] = "No special characters or numbers";
                } else if (!preg_match('/^[a-zA-Z]{2,20}+$/', $newUser->getFirstName())) {
                    $newUser->errorMsg['first_name'] = "Between 2-20 characters long";
                }
            }

            if (empty($_POST['last_name'])) {
                $newUser->errorMsg['last_name'] = "Last name field is empty";
            } else {
                $newUser->setLastName(trim($_POST['last_name']));
                if (!preg_match('/^[a-zA-Z\s]+$/', $newUser->getLastName())) {
                    $newUser->errorMsg['last_name'] = "No special characters or numbers";
                } else if (!preg_match('/^[a-zA-Z]{2,20}+$/', $newUser->getLastName())) {
                    $newUser->errorMsg['last_name'] = "Between 2-20 characters long";
                }
            }

            if (empty($_POST['email'])) {
                $newUser->errorMsg['email'] = "Email field is empty";
            } else {
                if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $newUser->errorMsg['email'] = 'Invalid email';
                } else {
                    $newUser->setEmail(trim($_POST['email']));
                }
            }

            if (empty($_POST['pkey'])) {
                $newUser->errorMsg['pkey'] = 'Password field is empty';
            } else {
                $newUser->setPkey($_POST['pkey']);
                if (!preg_match('/^[a-zA-Z0-9]{8,}$/', $newUser->getPkey())) {
                    $newUser->errorMsg['pkey'] = "At least 8 characters long";
                }
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function validateLoginCredentials($registeredUser)
    {
        try {
            if (empty($_POST['email'])) {
                $registeredUser->errorMsg['email'] = "Email field is empty";
            } else {
                if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $registeredUser->errorMsg['email'] = 'Invalid email or password';
                } else {
                    $registeredUser->setEmail(trim($_POST['email']));
                }
            }

            if (empty($_POST['pkey'])) {
                $registeredUser->errorMsg['pkey'] = 'Password field empty';
            } else {
                $registeredUser->setPkey(trim($_POST['pkey']));
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function userSignup()
    {
        try {
            $newUser = new User();
            if (isset($_POST['submit'])) {
                // Set user properties
                $this->validateSignUpCredentials($newUser);
                $errorArr = $newUser->errorMsg;
                // Unset empty Keys
                foreach ($errorArr as $key => $value) {
                    if (empty($value)) {
                        unset($errorArr[$key]);
                    }
                }
                // Check errors before signup
                if (!empty($errorArr)) {
                    $_SESSION['userObj'] = serialize($newUser);
                    header('Location: views/signup.php');
                } else {
                    $userProperties = $this->userObj->create(
                        $newUser->getFirstName(),
                        $newUser->getLastName(),
                        $newUser->getEmail(),
                        $newUser->getPkey(),
                    );
                    foreach ($userProperties as $row) {
                        $newUser->setFirstName(trim($row['first_name']));
                        $newUser->setLastName(trim($row['last_name']));
                        $newUser->setUserID(trim($row['user_id']));
                    }
                    $_SESSION['userObj'] = serialize($newUser);
                    header('Location: views/home.php');
                }
            }
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function userLogin()
    {
        try {
            $registeredUser = new User();
            if (isset($_POST['submit'])) {
                // Set user properties
                $this->validateLoginCredentials($registeredUser);
                $errorArr = $registeredUser->errorMsg;
                // Unset key values
                foreach ($errorArr as $key => $value) {
                    if (empty($value)) {
                        unset($errorArr[$key]);
                    }
                }
                // Check for errors before login
                if (!empty($errorArr)) {
                    $_SESSION['userObj'] = serialize($registeredUser);
                    header('Location: views/signin.php');
                }

                // Check if it is an admin
                $adminArr = $this->userObj->verifyAdmin();
                foreach ($adminArr as $row) {
                    if (
                        $registeredUser->getEmail() == $row['email'] &&
                        sha1($registeredUser->getPkey()) == $row['pkey']
                    ) {
                        // Set Inventory Objects
                        $this->displayObj->inventoryStore();
                        $this->userStore();
                        $registeredUser->setFirstName(trim($row['first_name']));
                        $_SESSION['userObj'] = serialize($registeredUser);
                        header('Location: views/admin/inventory.php');
                    } else {
                        $userProperties = $this->userObj->validate(
                            $registeredUser->getEmail(),
                            $registeredUser->getPkey()
                        );
                        if (!empty($userProperties)) {
                            foreach ($userProperties as $row) {
                                $registeredUser->setFirstName(trim($row['first_name']));
                                $registeredUser->setLastName(trim($row['last_name']));
                                $registeredUser->setUserID(trim($row['user_id']));
                            }
                            $_SESSION['userObj'] = serialize($registeredUser);
                            header('Location: views/home.php');
                        } else {
                            $registeredUser->errorMsg['login_error'] = "Invalid email or password";
                            $_SESSION['userObj'] = serialize($registeredUser);
                            header('Location: views/signin.php');
                        }
                    }
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

    public function userLogout()
    {
        session_unset();
        header('Location: views/signin.php');
    }

    public function userStore()
    {
        try {
            // Load all of the product objects properties
            $userStore = $this->userObj->readAll();
            $_SESSION['userStore'] = serialize($userStore);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function deleteUser()
    {
        try {
            if (isset($_POST['delete_user'])) {
                echo $_POST['user_id'];
                $this->userObj->delete($_POST['user_id']);
                $this->userStore();
                header('Location: views/admin/users.php');
            }
        } catch (Exception $e) {
            throw $e;
        }
    }
}
