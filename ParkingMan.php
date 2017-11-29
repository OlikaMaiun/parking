<?php
/**
 * Created by PhpStorm.
 * User: Olika
 * Date: 14.11.2017
 * Time: 17:27
 */
require_once ('Parking.php');
require_once ('Car.php');
require_once ('Vehicle.php');
require_once ('Moto.php');

class ParkingMan
{
    private $parking;

    public function setParking($parking){
        $this->parking = $parking;
    }

    public function toParkTheVehicle($vehicle){
       echo $this->parking->parkTheVehicle($vehicle);
    }

    public function toGetOutOfParking($vehicleNumber){
        echo $this->parking->getOutOfParking($vehicleNumber);
    }
//    public function scratchVehicle(){
// }

}