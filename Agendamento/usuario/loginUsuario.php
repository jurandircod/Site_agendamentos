<?php
//conexões com o banco
include('../conexao/config.php');

//configurações de login
include('../conexao/login.php');

//verifica se o usuario já está logado e o redireciona para o painel de controle
include('../protected/autenticarUsuario.php');


//função que conecta o usuario à conta dele
conectar();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="..//styles/sider_menu.css">
    <link rel="stylesheet" href="../styles/cadastroUsuario.css">
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
        <?php include("./sider_menu.php"); ?>

        <li class="item-menu">
            <a href="./cadastroUsuario.php">
                <span class="icon"><i class="bi bi-person-lines-fill"></i></span>
                <span class="txt-link">Cadastrar</span>
            </a>
        </li>
        </ul>
    </aside>


</body>

</html>