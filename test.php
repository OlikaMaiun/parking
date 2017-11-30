<?php
/**
 * Created by PhpStorm.
 * User: Olika
 * Date: 29.11.2017
 * Time: 17:58
 */
require_once ('ParkingMan.php');
require_once ('Car.php');
require_once ('Parking.php');
require_once ('Moto.php');
require_once ('Vehicle.php');

$car1 = new Car(Vehicle::CAR, "bmw", "2009", "765755");
//$moto1 = new Moto(Vehicle::MOTO, "suzuki", "1998", "765453");

$parkingman1 = new ParkingMan();
$parking1 = new Parking(3);
$parkingman1->setParking($parking1);

echo $parking1->openParking();
echo $parking1->getFreePlaces();
$parkingman1->toParkTheVehicle($car1);
//$parkingman1->toParkTheVehicle($moto1);
$parking1->getInfoAboutAllVehicleOnParking();
print_r($parking1->getPlacesOfMotorbikes());
$parking1->getInfoAboutCars();
$parking1->getInfoAboutYoungCars("2008");
echo $parking1->checkTheVehicleOnParking($car1);
$parkingman1->toGetOutOfParking("76553");



