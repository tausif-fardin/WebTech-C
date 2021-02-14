<?php

$txt = "Hello World";
$x = 5;
$y = 10.5;
echo "Printing " . $txt . " in php.<br>";
echo "Value of x is " . $x . " and y is " . $y;
echo "<br>";
echo "Total: ";
echo $x + $y;
echo "<br>";
echo "Declaring array in PHP: <br>";
$cars = array("Audi", "BMW");
var_dump($cars); //Shows the size and value of an array.
echo "<br>";
echo "Cars: " . $cars[0];
echo "<br>";
print_r($cars);
echo "<br>";
//associative array.
$movies = array("Titanic" => "9.8", "Godfather" => "8.5");
foreach ($movies as $x1 => $x_value) {
    echo "Key=" . $x1 . ",Value=" . $x_value;
    echo "<br>";
}
?>