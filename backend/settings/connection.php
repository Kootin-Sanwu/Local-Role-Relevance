<?php
$host = getenv('DB_HOST');
$db   = getenv('MYSQL_DATABASE');
$user = getenv('MYSQL_USER');
$pass = getenv('MYSQL_ROOT_PASSWORD');

// $host = 'mysql-db';
// $db   = 'RoleEvaluation';
// $user = 'root';
// $pass = 'K22.Kb16.Nk28.Ny27';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    // echo "Database connection successful!";

} catch (PDOException $e) {
    $hostname = gethostname();
    echo "Host (container) name: " . $hostname . "<br>";
    echo "Trying to connect to MySQL host: " . $host . "<br>";
    echo "Database connection failed: " . $e->getMessage();
}