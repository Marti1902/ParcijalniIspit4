<?php

require __DIR__ . '/vendor/autoload.php';

use App\DatabaseConfig;
use App\DatabaseConnection;

$dbConfig = new DatabaseConfig(__DIR__ . '/config/database.php');

$host = $dbConfig->getHost();
$username = $dbConfig->getUsername();
$password = $dbConfig->getPassword();
$database = $dbConfig->getDatabase();

$dbConnection = DatabaseConnection::getInstance($host, $username, $password, $database);

$pdo = $dbConnection->getPDO();