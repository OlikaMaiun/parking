<?php
/**
 * Created by PhpStorm.
 * User: Olika
 * Date: 14.11.2017
 * Time: 17:25
 */
require_once ('ParkingMan.php');
require_once ('Car.php');
require_once ('Vehicle.php');
require_once ('Moto.php');

class Parking
{

    private $isOpen;
    private $places;
    private $allPlaces;
    private $currentNumberOfVehicle;


    public function __construct($allPlaces)
    {
        $this->allPlaces = $allPlaces;
        $keys = range(1, $allPlaces);
        $this->places = array_fill_keys($keys, NULL);
    }

    public function closeParking()
    {
        $this->isOpen = false;
        return "Our parking is closed! \n";
    }

    public function openParking()
    {
        $this->isOpen = true;
        return "Our parking is opened! \n";
    }

    public function getFreePlaces()
    {
        $freePlaces = $this->allPlaces - $this->currentNumberOfVehicle;
        return "Free places on the parking: {$freePlaces} \n";
    }

    public function parkTheVehicle($vehicle)
    {
        if ($this->isOpen == true && $this->currentNumberOfVehicle < $this->allPlaces) {
            foreach ($this->places as $key => $value) {
                if ($value == null) {
                    $this->places[$key] = $vehicle;
                    $this->currentNumberOfVehicle += 1;
                    return "Your car was parked on : {$key} place. \n";
                }
            }
        } elseif ($this->isOpen == false) {
            return "The parking is closed! \n";
        }
        return "Sorry, our parking is full. \n";
    }

    public function getOutOfParking($vehicleNumber)
    {
        foreach ($this->places as $key => $value) {
            if ($this->places[$key] != null && $this->places[$key]->getNumber() == $vehicleNumber) {
                $number = $this->places[$key]->getNumber();
                $this->places[$key] = null;
                return "Vehicle with number {$number} was removed from parking. Good luck! \n";
            }
        }
        return "There isn't your Vehicle. \n";
    }

    public function getInfoAboutVehicleOnPlace($place)
    {
        if ($place <= $this->allPlaces && $place > 0) {
            $vehicle = $this->places[$place];
            if ($vehicle == null) {
                return "Empty place. \n";
            } else {
                return $vehicle->getInfo();
            }
        }
        return "There isn't place number: {$place} \n";
    }

    public function getInfoAboutAllVehicleOnParking()
    {
        $arrayAllVehicle = array();
        foreach ($this->places as $key => $value) {
            if ($this->places[$key] != NULL) {
                $arrayAllVehicle[] = $key;
                echo $this->places[$key]->getInfo();
            }
        }
        if (empty($arrayAllVehicle)) {
            echo "There is any Vehicle on the parking. \n";
        }
    }

    public function getPlacesOfMotorbikes()
    {
        $arrayPlacesOfMoto = array();
        foreach ($this->places as $key => $value) {
            if ($this->places[$key] != null && $this->places[$key]->getType() == Vehicle::MOTO) {
                $arrayPlacesOfMoto[] = $key;
            }
        }
        if (empty($arrayPlacesOfMoto)) {
            return "There is any Moto on the parking. \n";
        } else {
            return $arrayPlacesOfMoto;
        }
    }

    public function getInfoAboutCars()
    {
        $arrayCars = array();
        foreach ($this->places as $key => $value) {
            if ($this->places[$key] != null && $this->places[$key]->getType() == Vehicle::CAR) {
                $arrayCars[] = $key;
                echo $this->places[$key]->getInfo();
            }
        }
        if (empty($arrayCars)) {
            echo "There is any Car on the parking. \n";
        }
    }

    public function getInfoAboutYoungCars($year)
    {
        foreach ($this->places as $key => $value) {
            if ($this->places[$key] != null && $this->places[$key]->getType() == Vehicle::CAR && $this->places[$key]->getYear() >= $year) {
                echo $this->places[$key]->getInfo();
            }

        }
    }

    public function checkTheVehicleOnParking($vehicle)
    {
        foreach ($this->places as $key => $value) {
            if ($this->places[$key] == $vehicle) {
                return "This {$this->places[$key]->getType()} is on the parking. \n";
            }
        }
        return "It isn't on the parking. \n";
    }

   /* public function scratchVehicle($vehicle){
        foreach ($this->places as $key => $value) {
            if ($this->places[$key] != null && $this->places[$key] == $vehicle) {
                $this->places[$key]->setWhole(false);
                return "Ups... I have scratched your vehicle! \n";
            }
        }
        return "There isn't this vehicle to scratch it. \n";

    }*/
}