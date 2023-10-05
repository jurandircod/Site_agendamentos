<?php
include("../conexao/cadastrar.php");
cadastrar();
include('./protected/autenticarUsuario.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="..//styles/sider_menu.css">
    <link rel="stylesheet" href="../styles/cadastroUsuario.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>


<body>
    <form class="form-usuario text-center" action="" method="post">
        <h3>Cadastre seu usuario</h3>
        <img class="logoPrefeitura" src="../imagens/logoCidade.jpeg" alt="">
        <div class="container mt-3">

            <div class="row mt-3">
                <label for="">Digite seu nome</label>
                <input class="form-control" type="text" name="nome" placeholder="Nome de usuário*">
            </div>

            <div class="row mt-3">
                <label for="">Digite seu email</label>
                <input class="form-control" type="email" name="email" placeholder="Digite seu email">
            </div>

            <div class="row mt-3">
                <label for="">Digite sua senha</label>
                <input class="form-control" type="password" name="senha" placeholder="Digite sua senha">
            </div>
            <button type="submit" name="enviar" class="btn btn-primary mt-3">Enviar</button>

        </div>
    </form>

    <aside class="menu-lateral">
        <div class="btn-expandir" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Menu de tarefas">
            <i class="bi bi-list-task"></i>
        </div>
        <ul>
            <li class="item-menu">
                <a href="./loginUsuario.php" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Logue com sua conta">
                    <span class="icon"><i class="bi bi-door-closed"></i></span>
                    <span class="txt-link">Login</span>
                </a>
            </li>
        </ul>
    </aside>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    
    <script src="../bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>


</body>

</html>