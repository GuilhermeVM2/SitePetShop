<?php
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
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Consulta SQL para verificar o usuário
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
        $stmt->execute([$email, $senha]);
        $usuario = $stmt->fetch();

        if ($usuario) {
            // Usuário autenticado com sucesso
            echo "Logado com sucesso!";
        } else {
            // Usuário não encontrado ou senha incorreta
            echo "Usuário não encontrado ou senha incorreta. Verifique suas credenciais.";
        }
    } catch (PDOException $e) {
        echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
    }
} else {
    // Se o formulário não foi submetido corretamente
    echo "Erro: Formulário não enviado corretamente.";
}
?>
