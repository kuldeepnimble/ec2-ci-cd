<?php
$fruits = array(
    "a"=> "mango",
    "b"=> "orange",
    "c"=> "banana",
    "d"=> "grapes"
);
array_walk($fruits,"myfunction");          //array_walk working as foreach loop
function myfunction($value,$key){
    echo "$key : $value <br>";
}
echo "<br>";
?>


<?php
$veggie = ["1"=>"carrot", "2"=>"patato"]; 
$fruits = array(
    $veggie,
    "a"=> "mango",
    "b"=> "orange",
    "c"=> "banana",
    "d"=> "grapes"
);

array_walk_recursive($fruits, "myfunction", "is a key of");

function myfunction($value, $key, $param){
    echo "$key $param $value  <br>";
}
?>
