<?php

class ProductModel extends Database
{
    public function create($prodObj)
    {
        try {
            $conn = $this->connect_db();
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }

    public function delete($prodObj)
    {
        try {
            $conn = $this->connect_db();
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }

    public function update($prodObj)
    {
        try {
            $conn = $this->connect_db();
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }

    public function readAll()
    {
        try {
            $conn = $this->connect_db();
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }

    public function readOne()
    {
        try {
            $conn = $this->connect_db();
        } catch (Exception $e) {
            $this->close_db();
            throw $e;
        }
    }
}
