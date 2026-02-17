<?php
$connectionInfo = getenv("SQLAZURECONNSTR_DefaultConnection");

if (!$connectionInfo) {
    die("No connection string found.");
}

$parts = [];
foreach (explode(";", $connectionInfo) as $part) {
    if (strpos($part, "=") !== false) {
        list($key, $value) = explode("=", $part, 2);
        $parts[trim($key)] = trim($value);
    }
}

$server = str_replace("tcp:", "", $parts["Server"]);
$database = $parts["Initial Catalog"];
$username = $parts["User ID"];
$password = $parts["Password"];

try {
    $conn = new PDO("sqlsrv:server=$server;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
