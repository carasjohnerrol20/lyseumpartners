<?php
$host = $_SERVER['HTTP_HOST'] === 'localhost' ? 'localhost' : 'your_production_db_host';
$db   = 'lyseumpartnersdb';
$user = 'administrator';
$pass = '8%g&BN_9=ghG';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    echo 'Database connection failed: ' . $e->getMessage();
    exit;
}
?>
