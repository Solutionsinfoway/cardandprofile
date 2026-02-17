<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include 'db.php';

$sql = "SELECT * FROM Employees";
$stmt = $conn->query($sql);

echo "<h2>Employee List</h2>";
echo "<table border='2'>";
<<<<<<< HEAD
echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
=======
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Company_Name</th></tr>";
>>>>>>> 3f9b98e39c5e8f5496d0d1275fad54f42f1a1d12

while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    echo "<td>".$row['EmpID']."</td>";
    echo "<td>".$row['FullName']."</td>";
    echo "<td>".$row['Email']."</td>";
<<<<<<< HEAD
    echo "<td>".$row[]
=======
    echo "<td>".$row['Company_Name']."</td>";
>>>>>>> 3f9b98e39c5e8f5496d0d1275fad54f42f1a1d12
    echo "</tr>";
}
echo "</table>";
?>
