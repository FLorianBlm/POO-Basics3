<?php

require_once "HighWay.php";

final class PedestrianWay extends HighWay
{
    /**
     * @var integer
     */
    protected $nbLane = 1;

    /**
     * @var integer
     */
    protected $maxSpeed = 10;

    // argument enfant
    abstract public function addVehicle(Vehicle $Vehicles)
    {
        if ($Vehicles instanceof Bike || $Vehicles instanceof Shateboard) {
            $this->setCurrentVehicules($Vehicles);
        } else {
            $error = "Vehicule non autorisé";
            return $error;
        }
    }
}