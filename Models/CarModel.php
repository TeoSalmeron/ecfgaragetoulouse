<?php

namespace App\Models;

use App\Models\Model;

class CarModel extends Model {

    private int $id;
    private string $model;
    private float $price;
    private int $year;
    private string $description;
    private string $image_path;
    private int $stored_in;

    public function __construct() {
        $this->table = "car";
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
     * Get the value of model
     */ 
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set the value of model
     *
     * @return  self
     */ 
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of year
     */ 
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set the value of year
     *
     * @return  self
     */ 
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of image_path
     */ 
    public function getImage_path()
    {
        return $this->image_path;
    }

    /**
     * Set the value of image_path
     *
     * @return  self
     */ 
    public function setImage_path($image_path)
    {
        $this->image_path = $image_path;

        return $this;
    }

    /**
     * Get the value of stored_in
     */ 
    public function getStored_in()
    {
        return $this->stored_in;
    }

    /**
     * Set the value of stored_in
     *
     * @return  self
     */ 
    public function setStored_in($stored_in)
    {
        $this->stored_in = $stored_in;

        return $this;
    }
}