<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="icon" href="img/logo.png" />
    <!-- Adicione o link para o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="style/stylecadastro.css" rel="stylesheet">
</head>
<script>
    function validarSenha() {
        var senha = document.getElementById("senha").value;
        var confirmarSenha = document.getElementById("confirmar-senha").value;

        if (senha !== confirmarSenha) {
            alert("As senhas não coincidem. Por favor, verifique.");
            return false;
        }

        return true;
    }
</script>

<body>
    <!-- Cabeçalho -->
    <header class="bg-dark text-white text-center py-2">
        <div class="">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="Logo do Meu Site"
                            class="img-fluid" style="height: 50PX;width: 50px;"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="planos.html">Planos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="servicos.html">Serviços</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contatos.html">Contatos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cadastro.php">Cadastro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="cliente.html">Área do Cliente</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>


    <main>
        <div class="container">
            <section>
                <h2>Faça seu Cadastro</h2>

                <?php
                // Verificar se a variável de sucesso está definida
                if (isset($_GET['sucesso']) && $_GET['sucesso'] == 1) {
                    echo '<script>alert("Cadastro realizado com sucesso!");</script>';
                }
                ?>

                <form action="processa_formulario.php" method="post" onsubmit="return validarSenha();">

                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>

                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" required>

                    <label for="confirmar-senha">Confirmar Senha:</label>
                    <input type="password" id="confirmar-senha" name="confirmar-senha" required>

                    <label for="condominio">Condomínio:</label>
                    <select id="condominio" name="condominio">
                        <option value="a">Condomínio A</option>
                        <option value="b">Condomínio B</option>
                        <option value="c">Condomínio C</option>
                        <option value="other">Outro</option>
                    </select>

                    <button type="submit">Cadastrar</button>
                </form>
            </section>
        </div>
    </main>

    <!-- Rodapé -->
    <footer class="bg-dark text-white text-center py-2">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    Petshop@email.com
                </div>
                <div class="col-sm">
                    RUA BEMALI N°123,UMBAIRRO - SÃO PAULO,SP
                </div>
                <div class="col-sm">
                    4002-8922
                </div>
                <div class="col-sm">
                    <img src="img/ZAP.png" style="height: 50px;width: 50px;" alt="">
                </div>
            </div>
        </div>
    </footer>

</body>
<!-- Adicione o link para o JavaScript do Bootstrap (opcional, mas recomendado para algumas funcionalidades) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>


</html>