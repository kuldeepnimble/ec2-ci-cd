<?php
$fruits = ["apple","mango","grapes","banana"];
$newarray = array_keys($fruits);
echo "<pre>";
print_r($newarray);                      // array_keys  => show total keys
echo "</pre>";

echo "<br>";
?>

<?php
$fruits = [
    "first" => "apple",
    "second" => "mango",
    "third" => "grapes",
    "forth" => "banana"
    ];
$newarray = array_key_first($fruits);           // array_key_first => show first key
echo "<pre>";
print_r($newarray);
echo "</pre>";
echo "<br>";
?>

<?php
$fruits = [
    "first" => "apple",
    "second" => "mango",
    "third" => "grapes",
    "forth" => "banana"
    ];
$newarray = array_key_last($fruits);                  // array_key_last => show last key
echo "<pre>";
print_r($newarray);
echo "</pre>";

echo "<br>";
?>

<?php
$fruits = [
    "first" => "apple",
    "second" => "mango",
    "third" => "grapes",
    "forth" => "banana"
    ];
$newarray = array_key_exists("third", $fruits);           //array_key_exists (key,array)
echo "<pre>";
print_r($newarray);
echo "</pre>";

echo "<br>";
?>