<?php 
// functions.php
// Conexão com o banco de dados (usando PDO)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbvila";

// Função para obter o nome do usuário por ID
function getUserNameById($userEmail, $pdo) {
    // Lógica para conectar ao banco de dados e obter o nome do usuário por ID
    $stmt = $pdo->prepare("SELECT nome FROM usuarios WHERE email = ?");
    $stmt->execute([$userEmail]);
    $user = $stmt->fetch();

    //Retorne o nome do usuário (substitua por sua lógica real)
    return $user ? $user['nome'] : null;
}
?>


