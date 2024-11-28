<?php
$fruits = array ( "banana","guava","mango","grapes");
array_shift ($fruits);
echo "<pre>";
print_r ($fruits);
echo "</pre>";
echo "<br>";
?>



<?php
$fruits = array ( "banana","grapes");
array_unshift ($fruits, "guava" );
echo "<pre>";
print_r ($fruits);
echo "</pre>";
echo "<br>";
?>
