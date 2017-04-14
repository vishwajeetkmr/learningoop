<?php

abstract class Car {
    
    // Abstract classes can have properties
    
    protected $tankVolume;
    
    public function setTankVolume($volume){
        
        $this->tankVolume = $volume;
        
    }
    
    // Abstarct method
    
    abstract public function calcNumMilesOnFullTank();
    
}

class Honda extends Car {
    
    // Since we inherited abstract method, we need to 
    // define it in child class
    
    public function calcNumMilesOnFullTank(){
        
        $miles = $this -> tankVolume*30;
        
        return $miles;
        
    }
    
}

class Toyota extends Car {
    
    public function calcNumMilesOnFullTank(){
        
        return $miles = $this -> tankVolume*30;
            
    }
    
    public function getColor(){
        
        return "beige";
            
    }
    
}


$toyota1 = new Toyota();
$toyota1 -> setTankVolume(10);
echo $toyota1 -> calcNumMilesOnFullTank();
echo "</br>";
echo $toyota1 -> getColor();

?>