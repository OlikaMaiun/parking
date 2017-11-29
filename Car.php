<?php
/**
 * Created by PhpStorm.
 * User: Olika
 * Date: 15.11.2017
 * Time: 13:50
 */
require_once ('ParkingMan.php');
require_once ('Parking.php');
require_once ('Vehicle.php');
require_once ('Moto.php');

class Car extends Vehicle
{
    public function __construct($type, $model, $year, $number)
    {
        parent::__construct($type, $model, $year, $number);
    }

}