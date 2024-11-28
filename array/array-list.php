<?php
$emp = [
    [1, "Ram" , "Manager", 50000],
    [2, "Shyam", "Computer Operator", 52000],
    [3, "Mohan", "DevOps Eng.", 47000 ],
    [4, "Radhe", "Developer", 34000]
    ];

echo "<table border='2px' cellpadding='5px' cellspacing= '0'>";
echo "<tr>
    <th> Emp ID </th>
    <th> Name </th>
    <th> Designation </th>
    <th> Salary </th>
    </tr>";
foreach ($emp as list( $id, $Name , $Designation , $Salary)){
    echo "<tr>
    <td>$id </td>
    <td> $Name </td>
    <td> $Designation </td>
    <td> $Salary </td>
    </tr>";
}
echo "</table>";
?>