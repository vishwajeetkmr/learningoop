<?php

class Car {
    public $tank;
    
    // adding gallons of fuel
    public function fill($float){
        $this->tank += $float;
        return $this;
    }
    
    // substract gallons of fuel from tank after ride
    public function ride($float){
        $miles = $float;
        $gallons = $miles/50;
        $this->tank -= $gallons;
        return $this;
    }
    
}

$bmw = new Car();

 // when a class's methods return the $this keyword, they can be 
 // chained together to create much more streaming code

// Adding 10 gallons and riding 40 miles
// and get number of gallons left

$tank = $bmw->fill(10)->ride(40)->tank;

echo "The numner of gallons left in the tank: " . $tank . " gal.";

?>