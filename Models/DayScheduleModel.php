<?php

namespace App\Models;

use App\Models\Model;

class DayScheduleModel extends Model {

    private int $id;
    private string $day;
    private bool $is_opened;
    private string $open_time;
    private string $close_time;
    private int $garage_id;

    public function __construct() {
        $this->table = "day_schedule";
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
     * Get the value of day
     */ 
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set the value of day
     *
     * @return  self
     */ 
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get the value of is_opened
     */ 
    public function getIs_opened()
    {
        return $this->is_opened;
    }

    /**
     * Set the value of is_opened
     *
     * @return  self
     */ 
    public function setIs_opened($is_opened)
    {
        $this->is_opened = $is_opened;

        return $this;
    }

    /**
     * Get the value of open_time
     */ 
    public function getOpen_time()
    {
        return $this->open_time;
    }

    /**
     * Set the value of open_time
     *
     * @return  self
     */ 
    public function setOpen_time($open_time)
    {
        $this->open_time = $open_time;

        return $this;
    }

    /**
     * Get the value of close_time
     */ 
    public function getClose_time()
    {
        return $this->close_time;
    }

    /**
     * Set the value of close_time
     *
     * @return  self
     */ 
    public function setClose_time($close_time)
    {
        $this->close_time = $close_time;

        return $this;
    }

    /**
     * Get the value of garage_id
     */ 
    public function getGarage_id()
    {
        return $this->garage_id;
    }

    /**
     * Set the value of garage_id
     *
     * @return  self
     */ 
    public function setGarage_id($garage_id)
    {
        $this->garage_id = $garage_id;

        return $this;
    }
}