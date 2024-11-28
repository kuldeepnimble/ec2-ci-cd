<?php

$a = ['banana','mango','grapes'];
function myfunction($n,$m){
    return $n ."-".$m;
}

$newArray=array_reduce($a,'myfunction',"black");
echo "<pre>";
print_r($newArray);
echo "</pre>";

?>

<?php
function my($n,$m){
    
    return $n+$m;
}
$a = [1,2,3,4,5];
$newArray=array_reduce($a,'my');
echo "<pre>";
print_r($newArray);
echo "</pre>";

?>

<?php
// Sample array
$fruits = ['black', 'banana', 'mango', 'grapes'];

// Callback function to concatenate values
function myfunction1($n, $m) {
    return $n . '-' . $m;
}

// Using array_reduce with 'myfunction'
$result = array_reduce($fruits, 'myfunction1', '');

echo "<pre>";
print_r($result);
echo "</pre>";
?>
