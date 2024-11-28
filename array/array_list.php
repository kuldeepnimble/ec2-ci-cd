<?php
$color=array("red","green","blue","purple");
list($a,$b,$c,$d) = $color;
echo "Value of a :".$a. "<br>";
echo "Value of b :".$b. "<br>";
echo "Value of c :".$c . "<br>";
echo "Value of d :".$c ;
echo "<br>";
?>


<?php
echo "<br>";
$num = [13,43,45,54];
list($a,,,$d) = $num;
echo "Value of a :".$a. "<br>";
//echo "Value of b :".$b. "<br>";
//echo "Value of c :".$c. "<br>";
echo "Value of d :".$d. "<br>";
?>

<?php
echo "<br>";
$fruits = array (0=>'banana', 1=>'grapes', 2=>'guava');
list($a) = $fruits;
echo "Value of a :". $a. "<br>";
//echo "Value of b :". $a[1]. "<br>";
//echo "Value of c :". $a[2]; */
//print_r($a[0]);
?>
