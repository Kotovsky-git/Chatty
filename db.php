<?php
$host = "";
$db   = '';           // Database name
$user = "";      // Username
$pass = "";
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       
    PDO::ATTR_EMULATE_PREPARES   => false,                 
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Polish Time Zone (CET/CEST), Winter Time
    $pdo->exec("SET time_zone = '+02:00'");
} catch (\PDOException $e) {
    // Error
    die("Błąd połączenia z bazą: " . $e->getMessage());
}
?>