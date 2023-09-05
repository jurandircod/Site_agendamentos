<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Agendamento</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="shortcut icon" href="https://seeklogo.com/images/U/umuarama-logo-7C2C091546-seeklogo.com.jpg" type="image/x-icon">

</head>

<body>
    <!--  nav  -->
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <i class="navbar-brand image-logo" href="#"><img src="https://www.umuarama.pr.gov.br/img/logoumuarama.svg" class="logopf" alt=""></i>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Agendamentos-->

    <div class="h1 mt-3">
        <h1>REALIZE SEUS AGENDAMENTOS</h1>
    </div>

    <section class="cards mt-4" style="list-style: none;">
        <ul class="li"></ul>
        <li>
            <div class="card">
                <img style="height: 300px;" src="https://umuarama.pr.gov.br/files/Noticias/capa/070619000-1575058681.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Anfiteatro</h5>
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
                            <!-- Outras linhas... -->
                        </tbody>

                    </table>

                    <button href="formularios.php" id="anfiteatro" class="btn btn-primary">Agendar</button>
                </div>
            </div>
        </li>
        <li>
            <div class="card">
                <img style="height: 300px;" src="https://umuarama.pr.gov.br/files/Noticias/capa/52863977357-47ce1ffa3b-c-1684266756.jpg" class="card-img-top" alt="...">
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
                <img style="height: 300px;" src="https://umuarama.pr.gov.br/files/Noticias/capa/1690575935.jpg" class="card-img-top" alt="...">
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


    <form class="row g-3" id="overlay">

        <div id="modal" class="">
            <h1 class="mb-6" id="anfi">Agendamento do Anfiteatro</h1>


            <img id="imgsimbolo" src="../imagens/WhatsApp Image 2023-08-22 at 11.30.17 (1).jpeg" alt="">
            <div class="container">
                <form class="row" action="processar.php" method="POST" class="formdata">

                    <div class="name mt-3">
                        <label for="inputEmail4" class="form-label">Seu nome completo:</label>
                        <input type="text" class="form-control" id="">
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

                    <div class="input-group mt-3">
                        <input type="text" class="form-control" placeholder="Cadastramento de setor" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cadastrar setor</button>
                    </div>
            </div>
    </form>





    <script>
        function alerta() {
            alert("Agendamento realizado com sucesso")
        }
    </script>
    <div class="col-12 text-center mt-3">

    </div>
    <div class="col-12 text-center">
        <button onclick="alerta()" type="submit" class="btn btn-primary">Agendar</button>
        <button type="submit" class="btn btn-danger" id="fechar-btn">Fechar</button>


        </button>
    </div>
    </div>
    </form>
</body>
</body>

<script src="../js/script.js"></script>

</html>