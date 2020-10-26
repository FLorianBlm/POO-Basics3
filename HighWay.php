<?php

abstract class HighWay
{
    /**
     * @var array
     */
    protected $currentVehicules = [];

    /**
     * @var integer
     */
    protected $nbLane;

    /**
     * @var integer
     */
    protected $maxSpeed;

    public function setNbLane(int $nbLane)
    {
        $this->nbLane = $nbLane;
    }

    public function getNbLane() : integer
    {
        return $this->nbLane;
    }

    public function setMaxSpeed(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    public function getMaxSpeed() : integer
    {
        return $this->maxSpeed;
    }

    public function setCurrentVehicules(Vehicle $Vehicles)
    {
        $this->currentVehicules[] = $Vehicles;
    }

    public function getCurrentVehicules() : array
    {
        return $this->currentVehicules;
    }

    /**
     * method abstract
     */
    abstract public function addVehicle(Vehicle $Vehicles);
}