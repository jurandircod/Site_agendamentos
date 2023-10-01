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
                        <a class="nav-link p-3 active" aria-current="page" href="./usuario/loginUsuario.php">
                            <h4>Entrar como um usuario</h4>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-3" href="?page=painelAdministrador">
                            <h4>Painel Administrador</h4>
                        </a>
                    </li>
                </ul>
            </div>
    </nav>
    <!-- Agendamentos-->

    <div class="h1 mt-3">
        <h1>REALIZE SEUS AGENDAMENTOS</h1>
    </div>

    <section class="cards mt-5" style="list-style: none;">
        <ul class="li"></ul>
        <li>
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
                                <th scope="col">funções</th>
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

                    <button href="formularios.php" id="anfiteatro" class="btn btn-primary">Agendar</button>
                </div>
            </div>
        </li>
        <li>
            <div class="card">
                <img src="https://umuarama.pr.gov.br/files/Noticias/capa/52863977357-47ce1ffa3b-c-1684266756.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Fundação cultural</h5>
                    <p class="card-text"></p>
                    <table class="table">
                        <thead>
                            <tr>

                                <th scope="col">Datas reservadas</th>
                                <th scope="col">horarios reservados</th>

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
        </li>

        <li>
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
        </li>
        <ul class="li"></ul>
        <ul class="li"></ul>
    </section>

    <!--Formulário de agendamento-->
    

    <!--fim Formulário de agendamento-->
    <?php
    include("./agendamento/locais/local_1.php")
    ?>

    <script>
        function alerta() {
            alert("Agendamento realizado com sucesso")
        }
    </script>

</body>
</body>

<script src="./js/script.js"></script>

</html>