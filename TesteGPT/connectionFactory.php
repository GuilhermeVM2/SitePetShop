<?php

// Dados de conexão com o base de dados
$servername = "localhost:80";
$username = "root";
$password = "";
$dbname = "dbvila";

// Criar Conexão com o BD
try {
$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
echo "conectar ao banco de dados";
} catch (PDOException $e) {
    echo "Erro ao se conectar ao banco de dados". $e->getMessage();}
// Configurar o modo de erro para exceção
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>