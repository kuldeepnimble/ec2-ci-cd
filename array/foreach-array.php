<?php
$colors=array("red","blue","green");  //index array
foreach ($colors as $value) {
echo $value . "<br>";
}
echo "<br>";
echo "------------------------------------"
?>

<?php
echo "<br>";
$age=[ "Joe"=> 33, "Mike"=>21 , "Nik"=> 32];  //associative array
echo "<ul>";
foreach ($age as $key => $value){
    echo "<li> $key = $value  </li>";
}
echo "</ul>";
?> 