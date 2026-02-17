<?php
$connectionString = getenv("SQLAZURECONNSTR_Defaultconnection");

try {
    $conn = new PDO("sqlsrv:$connectionString");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
