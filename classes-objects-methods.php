<?php

// Creating Class

class Car {
    
    // properties
    
    public $comp; // without default value
    public $color = "beige"; //  with default value
    public $hasSunRoof = true;
    
    // creating a method (function inside a class)
    
    public function hello()
    {
        return "beep";
    }
    
}

    // Creating Objects

$bmw = new Car();
$bmw = new Car();

// accessing its properties
// property name doesnot start with $ symbol

echo $bmw->color;

echo "<br />";

$mercedes = new Car();

echo $mercedes->color;

echo "<br />";

// setting the properties

$bmw->color = "blue";

$bmw->comp = "BMW";

$mercedes->comp = "Benz";

// output new properties

echo $bmw->color;

echo "<br />";

echo $mercedes->comp;

echo "<br />";

// accessing methods
// create objects before accessing methods

echo $bmw->hello();

echo "<br />";

echo $mercedes->hello();

echo "<br />";


?>