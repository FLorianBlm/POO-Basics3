<?php

require_once "HighWay.php";

final class MotorWay extends HighWay
{
    /**
     * @var integer
     */
    public $nbLane = 4;

    /**
     * @var integer
     */
    protected $maxSpeed = 130;

    // method enfant
    final public function addVehicle(Vehicle $Vehicles)
    {
        if ($Vehicles instanceof Car) {
            $this->setCurrentVehicules($Vehicles);
        } else {
            $error = "Vehicule non autorisé";
            return $error;
        }
    }
}