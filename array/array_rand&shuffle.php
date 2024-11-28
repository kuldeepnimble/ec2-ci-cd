<?php
$color = array("red","yellow","green","yellow","purple");
$newArray = array_rand($color);       //array_rand => pick random value
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo $color[$newArray];
echo "<br>";
?>



<?php

$color = array("a"=>"red", "b"=>"yellow", "c"=>"green", "d"=>"yellow", "e"=>"purple");
$newArray = array_rand($color,2);       //array_rand => pick random value
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo $color[$newArray[0]]."<br>";
echo $color[$newArray[1]]; 
echo "<br>";
?>

<?php
$color = array("red","yellow","green","yellow","purple");
shuffle($color);       //shuffle => change the position of values
echo "<pre>";
print_r($color);
echo "</pre>";
?>