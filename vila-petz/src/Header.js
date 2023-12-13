import React from 'react';

const Header = () => {
    return (
        <header className="bg-dark text-white text-center py-2">
            {

                <div class="">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <div class="container-fluid">
                            {/* <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="Logo do Meu Site"
                                class="img-fluid" style="height: 50PX;width: 50px;"></a> */}
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

            }
        </header>
    );
};

export default Header;