<?php

// definição da classe ConnectionFactory
require_once './connectionFactory.php';

// processaLogin.php

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $email = $_POST['emailLogin'];
    $senha = $_POST['senhaLogin'];

    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbvila";

    try {
        // chamando a function de conexão
        $factory = ConnectionFactory::getInstance($servername, $username, $password, $dbname);
        // Obtenha a conexão PDO
        $conn = $factory->getConnection();

        // Consulta para verificar as credenciais do usuário
        $query = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->execute();

        // Obtém o usuário da consulta
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario) {
            // Usuário autenticado com sucesso
            echo '<script>alert("login realizado com sucesso!");</script>';
            echo 'window.location.href = "cliente.html";</script>';
        } else {
            // Usuário não encontrado ou senha incorreta
            echo "Usuário não encontrado ou senha incorreta. Verifique suas credenciais.";
        }
    } catch (Exception $e) {
        echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
    }
} else {
    // Se o formulário não foi submetido corretamente
    echo "Erro: Formulário não enviado corretamente.";
}
?>
