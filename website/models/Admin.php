<?php

class Admin extends User
{
    private $is_admin;

    public function __construct()
    {
        $this->is_admin = true;
    }

    public function isAdmin()
    {
        return $this->is_admin;
    }
}
