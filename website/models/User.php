<?php

class User
{
    private $user_id;
    private $first_name;
    private $last_name;
    private $email;
    private $pkey;

    public $user_error;

    public function __construct()
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->pkey = '';
        $this->user_error = array();
    }

    public function getUserID()
    {
        return $this->user_id;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPkey()
    {
        return $this->pKey;
    }

    public function setPkey($pkey)
    {
        $this->pkey = $pkey;
    }
}
