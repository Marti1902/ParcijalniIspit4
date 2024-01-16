<?php

namespace App;

class DatabaseConnection {
    private static ?DatabaseConnection $instance = null;
    private $pdo;

    private function __construct($host, $username, $password, $database)
    {
        try {
            $this->pdo = new \PDO(
                "mysql:host={$host};dbname={$database}",
                $username, 
                $password,
            );
        } catch (\Throwable $th) {
            echo 'Connection failed!', PHP_EOL;
            return;
        }
    }

    public static function getInstance($host, $username, $password, $database): DatabaseConnection {
        if (self::$instance === null) {
            self::$instance = new DatabaseConnection($host, $username, $password, $database);
        }

        return self::$instance;
    }

    public function getPDO() {
        return $this->pdo;
    }
}