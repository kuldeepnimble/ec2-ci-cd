<?php
function square($n){
    return $n*$n. "<br>";
}
$a = [1,2,3,4,5];
$newArray=array_map("square",$a);      //array_map(function-name,array)
echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br>";
?>


<?php
function square1($n, $m) {
    return "$n=$m";
}

$a = [1, 2, 3, 4, 5];
$b = ['red', 'green', 'blue', 'black', 'white'];

$newArray = array_map('square1', $a, $b); // array_map(function-name, array1, array2)
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>

<?php
function square2($n, $m) {
    return [$n=>$m];                    //multi dimentional array
}

$a = [1, 2, 3, 4, 5];
$b = ['red', 'green', 'blue', 'black', 'white'];

$newArray = array_map('square2', $a, $b); // array_map(function-name, array1, array2)
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>


