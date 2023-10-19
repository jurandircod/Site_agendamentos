<?php
include("../../controller/protected/autenticar.php");
include('../../model/agendamentos/agendar.php');
include("../../controller/showUsers.php");
include("../../config/config.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


$user = new paineis();
autenticar();
autenticarAdministrador();

if(isset($_POST['nome_local'])){

    include('../../model/adicionar_locais/adicionar_local.php');
    if($query->execute()){
        echo 'Cadastro realizado com sucesso!';
    }else{
        echo 'Erro ao cadastrar, tente novamente mais tarde...' . $query->error;
    }
    
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamentos</title>
    <link rel="stylesheet" href="../../../public/css/sider_menu.css">
    <link rel="stylesheet" href="../../../public/css/style.css">
    <link rel="shortcut icon" href="../../../public/img//logoCidade (3).png" type="image/x-icon">
    <link href="../../../public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>

    <aside class="menu-lateral">

        <div class="ms-3" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Prefeitura de umuarama">
            <img class="text-center" id="logo" src="https://www.umuarama.pr.gov.br/img/logoumuaramaBranco.svg">
        </div>
        <ul>


            <li class="item-menu">
                <a href="?page=agendar" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Início">
                    <span class="icon"><i class="bi bi-menu-button-wide"></i></span>
                    <span class="txt-link fs-7">Adicionar novos locais</span>
                </a>
            </li>

            <li class="item-menu">
                <a href="?page=AgUsuarios" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Listar todos os agendamentos">
                    <span class="icon"><i class="bi bi-calendar-event"></i></span>
                    <span class="txt-link fs-7">Listar todos os agendamentos</span>
                </a>
            </li>
           
            <li class="item-menu">
                <a href="?page=AgUsuarios" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Listar todos os usuarios">
                    <span class="icon"><i class="bi bi-person-plus-fill"></i></span>
                    <span class="txt-link fs-7">Listar todos os usuario cadastrados</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="../index.php" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Todos os horarios">
                    <span class="icon"><i class="bi bi-person-square"></i></span>
                    <span class="txt-link fs-7"><?php $user->painelUser(); ?></span>
                </a>
            </li>
            <li class="item-menu">
                <a href="?page=logout" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Sair">
                    <span class="icon"><i class="bi bi-box-arrow-left"></i></span>
                    <span class="txt-link fs-7">Sair</span>
                </a>
            </li>
        </ul>


    </aside>

    <header class="text-center texto_agendamentos">
        <div>
            <img id="logopf" class="logo_prefeitura" src="../../../public//img//logoCidade.jpeg" alt="">
        </div>


        <button class="btn btn-success mt-3" type="button" name="" data-bs-toggle="modal" data-bs-target="#modal_adcionarLocais">Adicionar novos locais</button>

        <div class="modal fade text-center" id="modal_adcionarLocais" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Adicionar locais</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    
                        <img id="imgsimbolo" src="../../../public/img/logoCidade.jpeg" alt="">
                        <form action="" method="post">
                            <div class="col">
                                <label for="" class="form-label mt-3">Nome do local:</label>
                                <input type="text" name="nome_local" class="form-control" placeholder="Ex.: Praia de Itapema">
                            </div>
                            
                            <div class="mt-3">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                                <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>


    </header>

    <?php
    switch (@$_REQUEST['page']) {
        case 'AgUsuarios';
            include('../listarAgUsuarios.php');
            break;
        case 'agendar';
            include('../cardsAgendar.php');
            break;
        case "logout";
            include("../../controller/logout.php");
            destroirsessao();
            break;
        default;
            include("../cardsAgendar.php");
    }
    ?>




    <div class="modal fade text-center" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Agendamento do Anfiteatro</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <img id="imgsimbolo" src="../../../public/img/logoCidade.jpeg" alt="">
                    <form action="" method="post">
                        <div class="name mt-3">
                            <label for="inputEmail4" class="form-label">Seu nome completo:</label>
                            <input type="text" name="nameUser" class="form-control" placeholder="Digite seu nome completo" id="">
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label for="">Selecione seu setor</label>
                                <select id="inputState" name="setores" class="form-select">
                                    <option selected="">Selecionar...</option>
                                    <option>DTI</option>
                                    <option>SAUDE</option>
                                    <option>JURIDICO</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                    <option>...</option>
                                </select>
                            </div>

                            <div class="col">
                                <label for="">Dia de agendamento:</label>
                                <input class="form-control" type="date" id="data" name="dia">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label for="">Horário de inicio</label>
                                <input type="time" class="form-control" name="horaInicio" placeholder="First name" aria-label="First name">
                            </div>
                            <div class="col">
                                <label for="">Horario de termino</label>
                                <input type="time" class="form-control" name="horaFim" placeholder="Last name" aria-label="Last name">
                            </div>
                        </div>


                        <div class="mt-3">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                            <button type="submit" name="enviar" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="../../../public/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>



</body>

</html>