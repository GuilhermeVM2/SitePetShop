<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $condominio = $_POST['condominio'];

    // Conectar ao banco de dados (certifique-se de ajustar as informações conforme necessário)
    $conexao = new mysqli('localhost', 'root', '', 'dbvila');

    // Verificar a conexão
    if ($conexao->connect_error) {
        die("Falha na conexão ao banco de dados: " . $conexao->connect_error);
    }

    // Inserir dados na tabela usuarios
    $sql = "INSERT INTO usuarios (nome, email, senha, condominio) VALUES ('$nome', '$email', '$senha', '$condominio')";

    if ($conexao->query($sql) === TRUE) {
        // Redirecionar de volta para o formulário com uma mensagem de sucesso
        header('Location: cadastro.php?sucesso=1');
    } else {
        echo "Erro ao cadastrar: " . $conexao->error;
    }

    // Fechar a conexão
    $conexao->close();
} else {
    echo "Acesso não autorizado.";
}

?>