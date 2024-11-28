<?php
echo "Using For loop <br>"; 
$fruits = array ( 'orange', "mango","banana", "grapes");
$len=count($fruits);
for ($i=0; $i<$len;$i++){
    echo  $fruits[$i]."<br>";
}

echo "<br>";
echo "count function :  ". count($fruits) ;  //count function
$len=count($fruits);
echo "<br>";
echo "length of fruits :  " . $len;           //length function
echo "<br>";
echo "size of function  :  ". sizeof($fruits);  // sizeof function
echo "<br>";
echo "<br>";
echo "<br>";
echo "print_r function : <pre>";
print_r($fruits);
echo "</pre>";
echo "<br>";
?>
=========================================================================

<?php
echo "<br>";
$foods = array(
    'fruits' => array ('orange','mango','grapes','apple'),
    'veggie' => array('pea', 'patato', 'carrot', 'ladyfinger')
);
echo count($foods['fruits'],1);
echo "<pre>";
echo array_count_values($foods);
echo "</pre>";
?>
