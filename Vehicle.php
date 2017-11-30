<?php
/**
 * Created by PhpStorm.
 * User: Olika
 * Date: 14.11.2017
 * Time: 17:25
 */
require_once ('ParkingMan.php');
require_once ('Car.php');
require_once ('Parking.php');
require_once ('Moto.php');

class Vehicle
{
    private $model;
    private $ride = false;
    private $type;
    private $number;
    private $year;
   /* private $whole = true;*/
    const MOTO = "Moto";
    const CAR = "Car";

    public function __construct($type, $model, $year, $number)
    {
        $this->type = $type;
        $this->model = $model;
        $this->year = $year;
        $this->number = $number;
    }

   /* public function getWhole(){
        return $this->whole;
    }

    public function setWhole($whole)
    {
        $this->whole = $whole;
    }*/

    public function canRide(){
        return $this->ride = true;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getInfo(){
        return "It is: {$this->type}. The {$this->model} {$this->year}. With numbers: {$this->number}. \n";
    }

    public function getYear()
    {
        return $this->year;
    }


}
