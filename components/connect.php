<?php
$host = 'us-cluster-east-01.k8s.cleardb.net';  // Your database host
$user = 'b5674afcdd5cf4';  // Your MySQL username
$pass = 'e2ce1ada';  // Your MySQL password
$db = 'heroku_a94bd159d719eff';  // Your database name

// Using MySQLi
$conncheck = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conncheck->connect_error) {
    die("Connection failed: " . $conncheck->connect_error);
}

// Using PDO
try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}



?>
