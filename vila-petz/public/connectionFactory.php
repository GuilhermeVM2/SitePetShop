<?php

// Dados de conexão com o base de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbvila";

// Criar Conexão com o BD
try {
$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
echo "Conexão ao banco de dados bem-sucedida!";
} catch (PDOException $e) {
    echo "Erro ao se conectar ao banco de dados". $e->getMessage();}
// Configurar o modo de erro para exceção
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>