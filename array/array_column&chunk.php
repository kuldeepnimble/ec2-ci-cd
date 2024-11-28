<?php
$array = array (
    array (
        'id'=> 2201,
        'first_name'=> 'Ram',
        'last_name' => 'sharma'
    ),
    array (
        'id'=> 2202,
        'first_name'=> 'shyam',
        'last_name' => 'soni'
    ),
    array (
        'id'=> 2201,
        'first_name'=> 'geeta',
        'last_name' => 'pandey'
    )
);
$newArray = array_column($array,'first_name');            //array_column (array,value,key)
echo "<pre>";
print_r ($newArray);
echo "</pre>";

?>


<?php
$array = array (
    array (
        'id'=> 2201,
        'first_name'=> 'Ram',
        'last_name' => 'sharma'
    ),
    array (
        'id'=> 2202,
        'first_name'=> 'shyam',
        'last_name' => 'soni'
    ),
    array (
        'id'=> 2201,
        'first_name'=> 'geeta',
        'last_name' => 'pandey'
    )
);
$newArray = array_column($array,'first_name','id');
echo "<pre>";
print_r ($newArray);
echo "</pre>";

?>


<?php
$color = ['a'=>"red", 'b'=>"green", 'c'=>"blue", 'd'=>"yellow", 'e'=>"black"];
$newArray = array_chunk($color,2);                 // array_chunk(array,size)=>make array , no. of values
echo "<pre>";
print_r($newArray);
echo "</pre>";

?>