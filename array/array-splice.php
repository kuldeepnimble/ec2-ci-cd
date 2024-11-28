** array splice => delete the value and replace the values => array_splice(array,lenstart,,arrayII) 
** array_slice  => show the value => array_slice (array,start,length)
<?php
$fruits = [ "Mango","Guava","Grapes","Apple"];
array_splice($fruits,1,2);
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo "<br>";
?>


<?php
$fruits = [ "Mango","Guava","Grapes","Apple"];
$newarray=array_slice($fruits,1,2);
echo "<pre>";                                      //splice - show the values
print_r($newarray);
echo "</pre>";
?>

<?php
$fruits = [ "Mango","Guava","Grapes","Apple"];
array_splice($fruits,1,2);
echo "<pre>";                                    //splice - delete the value ( array,start,len,arrayII )
print_r($fruits);
echo "</pre>";
?>

<?php
$fruits = [ "Mango","Guava","Grapes","Apple"];
$colors = ["Black","White"];
array_splice($fruits,1,2,$colors);
echo "<pre>";
print_r($fruits);
echo "</pre>";

?>