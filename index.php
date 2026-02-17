<?php
include 'db.php';

$sql = "SELECT * FROM Employees";
$stmt = $conn->query($sql);

echo "<h2>Employee List</h2>";
echo "<table border='2'>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Company_Name</th></tr>";

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>".$row['EmpID']."</td>";
    echo "<td>".$row['FullName']."</td>";
    echo "<td>".$row['Email']."</td>";
    echo "<td>".$row['Company_Name']."</td>";
    echo "</tr>";
}

echo "</table>";
?>
