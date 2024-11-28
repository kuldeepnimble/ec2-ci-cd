<?php
$fruits =["orange","apple","lemon","banana"];
$fruits1 =["orange","apple","lemon","banana"];
sort($fruits);                   //sort=> index array sort
rsort($fruits1);                 //rsort => reverse sorting of index array
echo "sort :=>";
echo "<pre>";
print_r($fruits)."sort";
echo "</pre>";
echo "rsort  :=>";
echo "<pre>";
print_r($fruits1)."rsort";
echo "</pre>";
echo "<br>";
?>




<?php
$fruits =["a"=>"orange","b"=>"apple","c"=>"lemon","d"=>"banana"];
$fruits1 =["a"=>"orange","b"=>"apple","c"=>"lemon","d"=>"banana"];
asort($fruits);                    //asort=> associative array sorting
arsort($fruits1);                  //arsort => associative reverse sorting
echo "asort :=>";
echo "<pre>";
print_r($fruits)."asort";
echo "</pre>";
echo "arsort  :=>";
echo "<pre>";
print_r($fruits1)."arsort";
echo "</pre>";
echo "<br>";
?>



<?php
$fruits =["a"=>"orange","b"=>"apple","c"=>"lemon","d"=>"banana"];
$fruits1 =["a"=>"orange","b"=>"apple","c"=>"lemon","d"=>"banana"];
ksort($fruits);                    //ksort=> key array sorting
krsort($fruits1);                   //krsort => key reverse sorting
echo "ksorting :=>";
echo "<pre>";
print_r($fruits)."ksort";
echo "</pre>";
echo "krsorting  :=>";
echo "<pre>";
print_r($fruits1)."krsort";
echo "</pre>";

?>

<?php
$fruits =["orange","apple","lemon","banana"];
array_reverse($fruits);
echo "array reverse :";
echo "<pre>";
print_r($fruits);
echo "</pre>";
?>