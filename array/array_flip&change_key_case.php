<?php
$a = array (
    "bill"=>10,
    "jon"=>20,
    "peter"=>24
);
$newArray = array_flip($a);               // array_flip => exchange of key and value
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>


<?php
$a = array (
    "bill"=>10,
    "jon"=>20,
    "peter"=>24
);
$newArray = array_change_key_case($a,CASE_UPPER);         // array_change_key_case => change key's case(upper,lower)
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>