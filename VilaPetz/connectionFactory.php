<?php

class ConnectionFactory {
    private static $instance;  // Instância única da conexão
    private $conn;

    private function __construct($host, $username, $password, $database) {
        try {
            $this->conn = new PDO("mysql:host={$host};dbname={$database}", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    // Método estático para obter a instância única da conexão
    public static function getInstance($host, $username, $password, $database) {
        if (!self::$instance) {
            self::$instance = new self($host, $username, $password, $database);
        }
        return self::$instance;
    }

    // Método para obter a conexão PDO
    public function getConnection() {
        return $this->conn;
    }
}