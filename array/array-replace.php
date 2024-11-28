<?php
$colors = array ( "blue", "red","green","yellow");
$veggi = array ("carrot", "pea");
$fruits = array ("mango", "banana","apple");
$newarray = array_replace($colors , $fruits);               //array-replace
echo "<pre>";
print_r ($newarray);
echo "</pre>";
echo "<br>";
?>

<?php
$colors = array ( "blue", 'a' => "red","green","yellow");
$veggi = array ('a' => "carrot", 'b' => "pea");
$newarray = array_replace($colors , $veggi);
echo "<pre>";
print_r ($newarray);
echo "</pre>";
echo "<br>";

?>

<?php
$array1 = array ( "a" => array("red"), "b" => array("blue","green"));
$array2 = array ( "a" => array ("white"), "b" => array("black"));
$newarray = array_replace_recursive ($array1 , $array2);          //array-replace-recursive
echo "<pre>";
print_r ($newarray);
echo "</pre>";


?>