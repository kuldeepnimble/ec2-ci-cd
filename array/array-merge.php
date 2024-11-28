<?php
$colors = array("yellow","green", "white");
$fruits = array("guava", "mango","banana"); //array-merge (index array)

$newarray = array_merge($colors,$fruits);
echo "<pre>";
print_r ($newarray);
echo "</pre>";
echo "<br>";
?>


<?php
$colors = array('a' => "yellow", 'b' => "green", 'c' => "white");
$fruits = array("guava", "mango","banana"); //array-merge (associative array)

$newarray = array_merge($colors,$fruits);
echo "<pre>";
print_r ($newarray);
echo "</pre>";
echo "<br>";
?>

<?php
echo "array_merge (associative array): =>";
$colors = array('a' => "yellow", 'b' => "green", 'c' => "white");
$fruits = array('b' => "guava", 'e' => "mango","banana"); //array-merge (associative array)
                     
$newarray = array_merge($colors,$fruits);            // green replace by guava                          
echo "<pre>";                                           
print_r ($newarray);
echo "</pre>";
echo "<br>";
?>

<?php
echo "normal addition array :=>";
$colors = array('a' => "yellow", 'b' => "green", 'c' => "white");
$fruits = array('b' => "guava", 'e' => "mango","banana"); //array-merge (associative array)
                     
$newarray = $colors + $fruits;            // guava replace by green                       
echo "<pre>";                                           
print_r ($newarray);
echo "</pre>";
echo "<br>";
?>


<?php
echo "array_merge_recursive :=>";
$colors = array('a' => "yellow", 'b' => "green", 'c' => "white");
$fruits = array('b' => "guava", 'e' => "mango","banana"); //array-merge-recursive
                     
$newarray = array_merge_recursive($colors , $fruits);            //same index value convert in initial array                       
echo "<pre>";                                           
print_r ($newarray);
echo "</pre>";
echo "<br>";
?>

<?php
echo "array_combine :=> ";
$name = array("ram", "shyam", "geeta");
$age = array("32", "21","25"); //array-merge (associative array)
                     
$newarray = array_combine ($name , $age);            // guava replace by green                       
echo "<pre>";                                           
print_r ($newarray);
echo "</pre>";
?>