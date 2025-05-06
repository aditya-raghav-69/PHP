<?php
// Integer
$integerVar = 42;
var_dump($integerVar);
echo "<br>"; // New line for better readability
echo "<br>"; 

// Float
$floatVar = 3.14;
var_dump($floatVar);
echo "<br>"; 
echo "<br>"; 

// String
$stringVar = "Hello, PHP!";
var_dump($stringVar);
echo "<br>"; 
echo "<br>"; 

// Boolean
$booleanVar = true;
var_dump($booleanVar);
echo "<br>"; 
echo "<br>"; 

// Array
$arrayVar = array(1, 2, 3, "PHP", true);
var_dump($arrayVar);
echo "<br>"; 
echo "<br>"; 

// Object
class SampleClass {
    public $property = "I am an object property";
}
$objectVar = new SampleClass();
var_dump($objectVar);
?>