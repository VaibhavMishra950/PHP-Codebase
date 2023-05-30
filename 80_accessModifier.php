<?php

echo "<title>Access Modifiers in PHP </title>";

// Access Modifiers in PHP
// 1. Public      -> Can be accessed from outside
// 2. Private     -> Can only be accessed by member functions of the class.
// 3. Protected   -> Can be accessed from within the class and from the derived class.

// By default properties and methods are treated as public

class Employee{
    private $name = "Vaibhav";

    function showName(){
        echo "$this->name";
    }

}

$emp1 = new Employee();
// echo $emp1->name;  // Won't work as name is a private property.
$emp1->showName();


?>