<?php
$a1 = ["a"=>"red", "b"=>"green", "c"=>"yellow", "d"=>"black"];
$a2 = ["a"=>"red", "f"=>"green", "d"=>"purple"];
$newArray = array_diff($a1,$a2);                          //array_diff => display different value
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "<br>";

?>


<?php
$a1 = ["a"=>"red", "b"=>"green", "c"=>"yellow", "d"=>"black"];
$a2 = ["a"=>"red", "f"=>"green", "d"=>"purple"];
$newArray = array_diff_key($a1,$a2);                  //array_diff_key => display different key
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "<br>";

?>

<?php
$a1 = ["a"=>"red", "b"=>"green", "c"=>"yellow", "d"=>"black"];
$a2 = ["a"=>"red", "f"=>"green", "d"=>"purple"];
$newArray = array_diff_assoc($a1,$a2);                //array_diff_assoc => display different key & value
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "<br>";

?>

<?php
function compare($a,$b){
    if($a === $b){
        return 0;
    }
    return ($a>$b)? 1:-1;
}
$a1 = ["a"=>"red", "b"=>"green", "c"=>"yellow", "d"=>"black"];
$a2 = ["a"=>"red", "f"=>"green", "d"=>"purple"];
$newArray = array_diff_uassoc($a1,$a2,"compare");                    //array_diff_uassoc
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "<br>";

?>

<?php
function compare1($a,$b){
    if($a === $b){
        return 0;
    }
    return ($a>$b) ? 1 : -1;
}
$a1 = ["a"=>"red", "b"=>"green", "c"=>"yellow", "d"=>"black"];
$a2 = ["a"=>"red", "f"=>"green", "d"=>"purple"];
$newArray = array_udiff($a1,$a2,"compare1");                        //array_udiff
echo "<pre>";
print_r($newArray);
echo "</pre>";
echo "<br>";

?>

