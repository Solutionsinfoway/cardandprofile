<?php
$server = "tcp:yourservername.database.windows.net,1433";
$database = "Emp_Details";
$username = "sqladmin";
$password = "Admin@123";

try {
    $conn = new PDO("sqlsrv:server=$server;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
