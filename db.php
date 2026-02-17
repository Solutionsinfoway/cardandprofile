<?php
$server = getenv("DB_SERVER");
$database = getenv("DB_NAME");
$username = getenv("DB_USER");
$password = getenv("DB_PASS");

try {
    $conn = new PDO("sqlsrv:server=$server;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
