<?php

class Car{
    private $model = "N/A";
    
    public function __construct($model = null){
        
        if($model){
            
            $this->model = $model;
            
        }
            
    }
    
    public function getCarModel(){
        
        // using __CLASS__ magic constant
        
        return "The <b>" . __CLASS__ . "</b> model is : "  . $this->model;
            
    }
    
}

// creating object without passing value

$car1 = new Car();

echo $car1->getCarModel();

?>