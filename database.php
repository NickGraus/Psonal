<?php 
function databaseConnection() {
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $database = 'Psonal_users';

    $connection = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    return $connection;
}
?>