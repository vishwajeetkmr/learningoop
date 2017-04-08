<?php

class Car{
    
    private $model;
    
    public function setModel($model){
        $this->model = $model;
    }
    
    public function getModel(){
        return $this->model;
    }
    
}

class SportsCar extends Car {
    
    private $style = "fast and furoius";
    
    public function driveItWithStyle(){
        return "Drive a " . $this->getModel() . " <i>" . $this->style . "</i>";
    }
    
}

$sportsCar1 = new SportsCar();

$sportsCar1->setModel("Merceded Benz");

echo $sportsCar1->driveItWithStyle();

?>