<?php
echo "array-pop condition : ";
$fruits = array("banana","lemon","grapes","guava");
array_pop ($fruits);
echo "<pre>";
print_r($fruits);                   // array-pop - delete array's last value
echo "</pre>";
echo "<br>";
?>


<?php
echo "array-push condition : ";
$fruits = array("banana","lemon");
array_push ($fruits, "apple");
echo "<pre>";
print_r($fruits);                   // array-push - add value in last
echo "</pre>";
?>
