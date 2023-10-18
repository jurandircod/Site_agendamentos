<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="../../public/bootstrap/js/bootstrap.min.js"></script>
<?php
include("../../model/users/cadastrar.php");
include('../../controller/protected/autorizar_entrada.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
autorizar_Entrada();


function verificarCampos()
{
    if (strlen($_POST["nome"]) > 0 && strlen($_POST["senha"]) > 0) {

        cadastrar();
    } else {
        include('../../controller/errors/errosClass.php');
        $erroAgendar = new PainelDeErro($mensagensDeErro[2]['mensagem'], $mensagensDeErro[2]['tipo']);
        $erroAgendar->exibirErro();
        echo "<script> $(document).ready(function() {mostrarMensagem();});</script>";
    }
}

if (isset($_POST['enviar'])) {
    verificarCampos();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/sider_menu.css">
    <link rel="stylesheet" href="../../../public/css/cadastroUsuario.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>


<body>
    <form class="form-usuario text-center" action="" method="post">
        <h3>Cadastre seu usuario</h3>
        <img class="logoPrefeitura" src="../../../public/img/logoCidade.jpeg" alt="">
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
        <div class="ms-5 mb-4" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Barra de ferramentas">
            <img class="text-center" id="logo" src="../../../public//img//logoCidade (3).png">
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


    <script src="../../../public/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>


</body>

</html>