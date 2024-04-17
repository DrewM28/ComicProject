<?php
echo "Beginning Connection\n";
$dsn = 'mysql:host=localhost;dbname=comics';
$dbusername = 'root';
$dbpassword = 'root';

try{
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection Failed". $e->getMessage();
}
?>