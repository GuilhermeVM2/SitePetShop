<?php
require_once 'ConexaoBanco.php';

// Conexão com o banco de dados (usando PDO)
$servername = "localhost:80";
$username = "root";
$password = "";
$dbname = "dbvila";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Receber os dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    // Inserir os dados no banco de dados
    $stmt = $pdo->prepare("INSERT INTO cadastro (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->execute([$nome, $email, $senha]);

    // Mensagem de confirmação
    echo "Cadastro realizado com sucesso!";

    // Redirecionamento para outra página após 2 segundos
    header("refresh:1;url=Login.html");
} catch (Exception $e) {
    echo "Erro ao processar o formulário: " . $e->getMessage();
}
?>