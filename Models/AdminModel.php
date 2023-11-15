<?php

namespace App\Models;

use App\Models\Model;

class AdminModel extends Model {

    private string $id;
    private string $email;
    private string $password;
    private int $manages;

    public function __construct() {
        $this->table = "admin";
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
     * Get the value of manages
     */ 
    public function getManages()
    {
        return $this->manages;
    }

    /**
     * Set the value of manages
     *
     * @return  self
     */ 
    public function setManages($manages)
    {
        $this->manages = $manages;

        return $this;
    }
}