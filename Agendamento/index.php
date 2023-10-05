<?php include("./class/paineis_Index.php");
if (!isset($_SESSION)) {
    session_start();
}
$paineis = new paineis();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Agendamento</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="shortcut icon" href="https://seeklogo.com/images/U/umuarama-logo-7C2C091546-seeklogo.com.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body>

    <!--  nav  -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <i class="navbar-brand image-logo" href="#"><img src="https://www.umuarama.pr.gov.br/img/logoumuarama.svg" class="logopf" alt=""></i>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link p-3" href="?page=painelAdministrador">
                            <h4>Painel Administrador</h4>
                        </a>
                    </li>
                </ul>

                <span class="navbar-text">
                    <a class="nav-link p-3 active" aria-current="page" href="./usuario/loginUsuario.php">
                        <?php if (!isset($_SESSION['id'])) {
                            $paineis->loginUser();
                        } else {
                            $paineis->painelUser();
                        }
                        ?>
                        <i class="bi bi-person-bounding-box"></i>
                    </a>
                </span>
            </div>
    </nav>
    <!-- Agendamentos-->


    <!--texto central-->
    <br>
    <br>
    <div class="">
        <h1>REALIZE SEUS AGENDAMENTOS</h1>
    </div>
    
    <!--cards-->
    <section class="" style="list-style: none;">
        <div class="container">
            <div class="card">
                <img src="https://umuarama.pr.gov.br/files/Noticias/capa/070619000-1575058681.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Anfiteatro</h5>
                    <p class="card-text"></p>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">horario</th>
                                <!--Outras colunas-->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>19/10/2023</td>
                                <td>10:20 - 15:40</td>
                            </tr>
                            <!-- Outras linhas... -->
                        </tbody>

                    </table>
                    <?php
                    if (!isset($_SESSION)) {
                        session_start();
                    }

                    // switch (isset($_REQUEST["enviar"])) {
                    //     case "enviar":
                    //         if (!isset($_SESSION["id"])) {
                    //             die("você precisar estar logado para agendar");
                    //         }
                    //         break;
                    // }

                    ?>

                    <button type="button" name="enviar" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Agendar
                    </button>

                </div>
            </div>


            <div class="card">
                <img src="https://umuarama.pr.gov.br/files/Noticias/capa/52863977357-47ce1ffa3b-c-1684266756.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Fundação cultural</h5>
                    <p class="card-text"></p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Datas </th>
                                <th scope="col">horarios </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>19/10/2023</td>
                                <td>10:20 - 15:40</td>

                            </tr>
                        </tbody>
                    </table>
                    <button href="formularios.php" id="fundacao" class="btn btn-primary">Agendar</button>
                </div>
            </div>

            <div class="card">
                <img src="https://umuarama.pr.gov.br/files/Noticias/capa/1690575935.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Sala de reuniões</h5>
                    <p class="card-text"></p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">horario</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>19/10/2023</td>
                                <td>10:20 - 15:40</td>
                            </tr>
                        </tbody>
                    </table>
                    <button href="formularios.php" id="sala_de_reunioes" class="btn btn-primary">Agendar</button>
                </div>
            </div>

            <div class="card">
                <img src="https://umuarama.pr.gov.br/files/Noticias/capa/1690575935.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Sala de reuniões</h5>
                    <p class="card-text"></p>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">horario</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>19/10/2023</td>
                                <td>10:20 - 15:40</td>
                            </tr>
                        </tbody>
                    </table>
                    <button href="formularios.php" id="sala_de_reunioes" class="btn btn-primary">Agendar</button>
                </div>
            </div>
        </div>
    </section>
   
    <script>
        function alerta() {
            alert("Agendamento realizado com sucesso")
        }
    </script>

<button type="button" class="btn btn-secondary"
        data-bs-toggle="tooltip" data-bs-placement="top"
        data-bs-custom-class="custom-tooltip"
        data-bs-title="This top tooltip is themed via CSS variables.">
  Custom tooltip
</button>
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade text-center" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Agendamento do Anfiteatro</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <img id="imgsimbolo" src="./imagens/logoCidade.jpeg" alt="">
                    <div class="name mt-3">
                        <label for="inputEmail4" class="form-label">Seu nome completo:</label>
                        <input type="text" class="form-control" placeholder="Digite seu nome completo" id="">
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <label for="">Selecione seu setor</label>
                            <select id="inputState" class="form-select">
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
                            <input class="form-control" type="date" id="data" name="data">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col">
                            <label for="">Horário de inicio</label>
                            <input type="time" class="form-control" placeholder="First name" aria-label="First name">
                        </div>
                        <div class="col">
                            <label for="">Horario de termino</label>
                            <input type="time" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                    </div>


                    <div class="mt-3">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



</body>


<script src="./js/script.js"></script>

</html>