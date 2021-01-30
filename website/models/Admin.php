<?php

class Admin extends User
{
    private $is_admin;

    public function __construct()
    {
        $this->isAdmin = true;
    }

    public function isAdmin()
    {
        return $this->is_admin;
    }
}
