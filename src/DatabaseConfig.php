<?php

namespace App;

class DatabaseConfig {
    private $databaseConfig;

    public function __construct($configFile)
    {
        if (file_exists($configFile)) {
            $this->databaseConfig = require $configFile;
        }
        else {
            throw new \Error('Config file does not exist.');
        }
    }

    public function getHost() {
        return $this->databaseConfig['host'];
    }

    public function getDatabase() {
        return $this->databaseConfig['database'];
    }

    public function getUsername() {
        return $this->databaseConfig['username'];
    }

    public function getPassword() {
        return $this->databaseConfig['password'];
    }
}