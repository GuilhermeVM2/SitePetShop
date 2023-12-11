<?php

$host = 'localhost'; // Altere para o seu host
$user = 'root'; // Altere para o seu nome de usuário
$database = 'dbvila'; // Altere para o seu nome de banco de dados

// Conectar ao MySQL
$conn = new mysqli($host, $user, '', $database);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão ao banco de dados: " . $conn->connect_error);
} else {
    echo "Conexão bem-sucedida ao banco de dados!";
}

// Fechar a conexão
$conn->close();

?>
