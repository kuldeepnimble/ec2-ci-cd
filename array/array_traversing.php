$color = ["red","green","yellow","blue"];
<?php
$color = ["red","green","yellow","blue"];
echo "<br>";
echo "current value : ". current($color). "<br>";
echo "current value : ". key($color). "<br>";
echo "current value : ". pos($color). "<br>";
next($color);
echo "current value after next command :". current($color). "<br>";
prev($color);
echo "current value after prev command :". current($color). "<br>";
end($color);
echo "current value after end command :". current($color). "<br>";
//echo "<pre>";
//print_r(each($color));
//echo "</pre>";
reset($color);
echo "current value after reset command :". current($color). "<br>";
?>