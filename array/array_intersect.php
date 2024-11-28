<?php
$a1 = [ "a"=>"mango","b"=>"grapes","c"=>"banana","d"=>"guava"];
$a2 = [ "a"=>"mango","f"=>"pineapple","d"=>"date"];
$newArray = array_intersect ($a1,$a2);                        // array_intersect =>check same values
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "<br>";
?>

<?php
$a1 = [ "a"=>"mango","b"=>"grapes","c"=>"banana","d"=>"guava"];
$a2 = [ "a"=>"mango","f"=>"pineapple","d"=>"date"];
$newArray = array_intersect_key ($a1,$a2);                   //array_intersect_key => check same keys
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "<br>";
?>

<?php
$a1 = [ "a"=>"mango","b"=>"grapes","c"=>"banana","d"=>"guava"];
$a2 = [ "a"=>"mango","f"=>"pineapple","d"=>"date"];
$newArray = array_intersect_assoc ($a1,$a2);                //array_intersect_assoc => check same key and value
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "<br>";
?>

<?php
function compare ($a,$b){
    if ($a === $b){
        return 0;
    }
    return($a>$b)? 1:-1;
}
$a1 = [ "a"=>"mango","b"=>"grapes","c"=>"banana","d"=>"guava"];
$a2 = [ "a"=>"mango","f"=>"pineapple","d"=>"date"];
$newArray = array_intersect_uassoc ($a1,$a2,"compare");         //array_intersect_uassoc =>user define associate 
echo "<pre>";                                                   //check same keys
print_r($newArray);
echo "</pre>";
echo "<br>";
?>