<?php

class Car {
    
    public $comp;
    public $color = "beige";
    public $hasSunRoof = true;
    
    public function hello(){
        
        // $this keyword is used to access class's own methods and properties within scope the class
        
        return "Beep I am a <i>" . $this->comp . 
            "</i>, am I am <i>". $this->color;
    }
    
}

    $bmw = new Car();
    $mercedes = new Car();
    
    $bmw->comp = "BMW";
    $bmw->color = "Red";
    
    $mercedes->comp = "Mercedes Benzi";
    $mercedes->color = "Blue";
    
    // Calling the hello method for $mercedes object

    echo $mercedes->hello();

    echo "<br />";

    // Calling the hello method for $bmw object

    echo $bmw->hello();

?>