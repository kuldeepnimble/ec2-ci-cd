<?php
$emp = [
    [ 
    "ID" => 1 ,
    "Name" => "Ram",
    "Designation" => "Manager",
    "Salary" => 52000
    ],
    [
    "ID" => 2 ,
    "Name" => "Shyam",
    "Designation" => "Computer Operator",
    "Salary" => 58000
    ],
    [
    "ID" => 3 ,
    "Name" => "Mohan",
    "Designation" => "Driver",
    "Salary" => 52000

    ],
    [
    "ID" => 4 ,
    "Name" => "Radhe",
    "Designation" => "Salesman",
    "Salary" => 52000
    ],
];
echo "<table border='5px' cellpadding = '5px' cellspacing= '0'>";
echo "<tr>
    <th> ID </th>
    <th> Name </th>
    <th> Designation </th>
    <th> Salary </th>
     </tr>";
foreach ( $emp as list("ID" => $ID, "Name" => $Name , "Designation" => $Designation , "Salary" => $Salary)){
    echo "<tr> 
        <td> $ID </td>
        <td> $Name </td>
        <td> $Designation </td>
        <td> $Salary </td>
        </tr>";
}
echo "</table>";

?>