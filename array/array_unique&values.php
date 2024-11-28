<?php
$color = ["a"=>"red", "b"=>"green", "c"=>"red", "d"=>"black"];
$newArray = array_values($color);                  //array_values => show the values of array and show index
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "<br>";

?>

<?php
$color = ["a"=>"red", "b"=>"green", "c"=>"red", "d"=>"black"];
$newArray = array_unique($color);                  //array_unique => show the unique values
echo "<pre>";                                     // remove duplicate values
print_r($newArray);
echo "</pre>";
echo "<br>";

?>