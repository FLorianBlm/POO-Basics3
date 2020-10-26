<?php

require_once "HighWay.php";

final class ResidentialWay extends HighWay
{
    /**
     * @var integer
     */
    protected $nbLane = 2;

    /**
     * @var integer
     */
    protected $maxSpeed = 50;

    // argument enfant
    abstract public function addVehicle(Vehicle $Vehicles)
    {
        $this->setCurrentVehicules($Vehicles);
    }
}