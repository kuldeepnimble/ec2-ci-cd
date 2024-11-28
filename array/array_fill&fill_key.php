<?php
$newArray = array_fill(2,4,"testing");   //array_fill(start_index,total_digit,"value")
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "<pre>";
?>


<?php
$a = array("a","b","c","d","e","f");
$newArray = array_fill_keys($a,"testing");      //array_fill_keys (array,"value")
echo "<pre>";
print_r($newArray);
echo "</pre>";
?>
