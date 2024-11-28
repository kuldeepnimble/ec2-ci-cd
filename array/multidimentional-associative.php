<?php
$marks = [
    "Ram" =>
        [
         "Chemistry" =>  64 ,
         "Physics" => 76 , 
         "Math" => 73
        ],
    "Shyam" => 
       [ 
         "Chemistry" => 55,
         "Physics" => 84 ,
         "Math" => 79
        ],
    "Geeta" => 
         [ 
         "Chemistry" => 69 ,
         "Physics" => 77, 
         "Math" => 59
         ]
];
echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
echo "<tr>
    <th> Student Name </th>
    <th> Chemistry </th>
    <th> Physics </th>
    <th> Math </th>
</tr>";

foreach ( $marks as $key => $v1){
    echo "<tr>";
    echo "<td> $key  </td>";
    foreach ( $v1 as $v2){
        echo "<td> $v2  </td>";
    }
    echo "</tr>";
}

echo "</table>";
echo "<pre>";
print_r ($marks);
echo "</pre>";
?>