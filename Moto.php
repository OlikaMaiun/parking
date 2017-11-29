<?php
/**
 * Created by PhpStorm.
 * User: Olika
 * Date: 28.11.2017
 * Time: 14:42
 */
require_once ('ParkingMan.php');
require_once ('Car.php');
require_once ('Vehicle.php');
require_once ('Parking.php');

class Moto extends Vehicle{

    public function __construct($type, $model, $year, $number)
    {
        parent::__construct($type, $model, $year, $number);
    }
}
