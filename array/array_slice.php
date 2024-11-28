<?php
echo "array_slice : show the values, add the value";
$colors = array("blue","red","green","yellow");
$newarray = array_slice ($colors,1,3,true);   // array_slice (array,start index,length,preserve-bydefault )
echo "<pre>";                                 // preserve means show exact index which given in question
print_r($newarray);
echo "</pre>";
echo "<br>";
?>


<?php
$colors = array('a' => "blue",'b' => "red", 'c' => "green",'d' => "yellow");
$newarray = array_slice ($colors,2,3);            //associative array
echo "<pre>";                                 
print_r($newarray);
echo "</pre>";
echo "<br>";
?>

<?php
$colors = array("blue","red","green","yellow");
$newarray = array_slice ($colors,-2,2);            //start from -2 -> its means starting index from backside -1
echo "<pre>";                                 
print_r($newarray);
echo "</pre>";
?>