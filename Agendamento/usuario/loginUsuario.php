<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
//conexões com o banco
include('../conexao/config.php');

//configurações de login
include('../conexao/login.php');

//verifica se o usuario já está logado e o redireciona para o painel de controle
include('../protected/autenticarUsuario.php');

//função que conecta o usuario à conta dele
conectar();
autenticarUser();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="..//styles/sider_menu.css">
    <link rel="stylesheet" href="../styles/cadastroUsuario.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>


<body>
    <form class="form-usuario text-center" action="" method="post">
        <h3 class="mt-5">Faça seu login</h3>
        <img class="logoPrefeitura" src="../imagens/logoCidade.jpeg" alt="">

        <div class="container mt-5">
            <div class="row mt-3">
                <label for="">Digite seu email</label>
                <input class="form-control" type="email" name="email" placeholder="Digite seu email">
            </div>

            <div class="row mt-3">
                <label for="">Digite sua senha</label>
                <input name="senha" class="form-control" type="password" placeholder="Digite sua senha">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Entrar</button>


        </div>
    </form>

    <aside class="menu-lateral">
        <div class="btn-expandir">
            <i class="bi bi-list-task"></i>
        </div>
        <ul>
            <li class="item-menu">
                <a href="./cadastroUsuario.php" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Cadastre seu usuario">
                    <span class="icon"><i class="bi bi-person-lines-fill"></i></span>
                    <span class="txt-link">Cadastrar</span>
                </a>
            </li>
        </ul>
    </aside>

    <script src="../bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>



</body>

</html>