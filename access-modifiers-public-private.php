<?php

class Car{
    
    // private access modifier denies access to method 
    // outside the scope of class
    
    private $model;
    
    // public access modifier allows access to method 
    // outside the the class
    
    public function setModel($model){
        
        $allowdedModels = array("Mercedes Benz", "BMW");
        
        if(in_array($model,$allowdedModels)){
            $this->model = $model;
        }else{
            $this->model = " not in our list of models.";
        }
        
        
    }
    
    public function getModel(){
        return "The car model is " . $this->model;
    }
    
}

$mercedes = new Car();

// setting modewl

$mercedes->setModel("Maruti");

// geting model

echo $mercedes->getModel();

?>