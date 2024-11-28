<?php
$a = "black";
$color = array('a'=>"red",'b'=>"green",'c'=>"blue");
extract($color,EXTR_SKIP);              //extract => change array in variable
echo "Value of a :".$a . "<br>";
echo "Value of b :".$b . "<br>";
echo "Value of c :".$c . "<br>";
?>


<?php
echo "<br>";
$a = "black";
$color = array('a'=>"red",'b'=>"green",'c'=>"blue");
extract($color,EXTR_PREFIX_SAME,"test");
echo "Value of a :". $a . "<br>";
echo "Value of a :".$test_a . "<br>";
echo "Value of b :".$b . "<br>";
echo "Value of c :".$c . "<br>";
?>



<?php
echo "<br>";
$a = "black";
$color = array('a'=>"red",'b'=>"green",'c'=>"blue");
extract($color,EXTR_PREFIX_ALL,"test");
echo "Value of a :".$test_a . "<br>";
echo "Value of b :".$test_b . "<br>";
echo "Value of c :".$test_c . "<br>";
?>

<?php
echo "<br>";

$first_name = "Kuldeep";
$last_name = "Bhardwaj";
$age = 30;
$gender = "male";
$country = "india";
$extra = ["gender","country"];
echo "<pre>";
print_r(compact("first_name","last_name","age",$extra));
echo "</pre>";

?>