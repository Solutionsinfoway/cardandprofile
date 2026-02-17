<?php
// PHP Data Objects(PDO) Sample Code:Azure
try {
    $conn = new PDO("sqlsrv:server = tcp:dbcsqlserver.database.windows.net,1433; Database = Emp_Details", "sqladmin", "Admin@123");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "sqladmin", "pwd" => "Admin@123", "Database" => "Emp_Details", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:dbcsqlserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>