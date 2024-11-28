<?php
$colors=array("red","blue","green","yellow");
echo "<ul>";
for ($i=0;$i<4;$i++){
    echo "<li> $colors[$i] </li>" ;
}
echo "</ul>";
echo "<br>";
echo "-----------------------------------------------------------";
?>


<?php
echo "<br>";
$colors=array("red","blue","green","yellow");
print_r ($colors);
echo "<br> -----------------------------------------------------------";

?>

<?php
echo "<br>";
$colors=array("red","blue","green","yellow");
echo "<pre>";
print_r ($colors);

echo "</pre>";
?>