<?php
// Senha a ser hashada
$senha = 'senha123';

// Cria o hash da senha
$hashSenha = password_hash($senha, PASSWORD_DEFAULT);

// Exibe o hash da senha
echo "Hash da Senha: $hashSenha";
?>