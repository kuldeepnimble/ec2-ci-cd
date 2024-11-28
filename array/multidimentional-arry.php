<?php
$emp = [
    [1, "ram", "Businessman", 70000],
    [2, "sita", "Artist", 65000],
    [3, "geeta", "musician", 57000]
];
echo "<table border='2px' cellspacing='0' cellpadding= '5px'>";
echo "<tr>
    <th> Sr. No. </th>
    <th> Emp Name </th>
    <th> Designation </th>
    <th> Salary </th>
 </tr>";

for($row=0;$row<3;$row++){
    echo "<tr>";
    for($col=0;$col<4;$col++){
        echo "<td>". $emp[$row][$col] . "</td>" ;
    }
    echo "</tr>";
   
}

echo "</table>";
echo "<br>";


?>

<?php

$emp = [
    [1, "ram", "Businessman", 70000],
    [2, "sita", "Artist", 60000],
    [3, "geeta", "musician", 50000]
];
echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
echo "<tr>
    <th> Sr. No. </th>
    <th> Emp Name </th>
    <th>Designation </th>
    <th> Salary </th>
    </tr>";

foreach ($emp as $v1){
    echo "<tr>";
    foreach ($v1 as $v2){
        echo "<td>  $v2 </td>";
    }
    echo "</tr>";
}
echo "<br>";

echo "<br>";

?>


<?php
echo "<br>";

$marks = [
    [ "Rahul",67 , 54 , 64],
    ["Radhe", 66 , 54 ,86],
    ["Shyam", 77, 43, 60]
];
echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
echo "<tr>
      <th> Name </th>
      <th> Physics </th>
      <th> Chemistry </th>
      <th> Math </th>
      </tr>" ;
foreach ($marks as $v1){
    echo "<tr>";
    foreach ($v1 as $v2){
        echo "<td> $v2 </td>";
    }
    echo "</tr>";
}

echo "</table>";
echo "-------------------------------------------------------------------";
?>

