<?php

namespace App\Models;

use App\Models\Model;

class EmployeeModel extends Model {

    private string $id;
    private string $email;
    private string $password;
    private int $works_for;

    public function __construct() {
        $this->table = "employee";
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of works_for
     */ 
    public function getWorks_for()
    {
        return $this->works_for;
    }

    /**
     * Set the value of works_for
     *
     * @return  self
     */ 
    public function setWorks_for($works_for)
    {
        $this->works_for = $works_for;

        return $this;
    }
}