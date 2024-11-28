<?php
$fruits = array ( 'banana','grapes','apple',55);
if (in_array('55', $fruits, true)){       // check exact value , by default false and true check exact value
    echo "Find Successfully";             
}else{
    echo "Can't find";   //output is can't find because '55' is string and 55 variable
}
echo "<br>";
?>


<?php
$fruits = array ( 'banana','grapes','apple', 55);
echo array_search ('banana', $fruits);             //array-search is index array - find the position of value
?>