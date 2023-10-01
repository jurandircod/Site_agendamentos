<form class="row g-3" id="overlay">

        <div id="modal" class="">
            <h1 class="mb-6" id="anfi">Agendamento do Anfiteatro</h1>


            <img id="imgsimbolo" src="./imagens/logoCidade.jpeg" alt="">
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

                    <div class="col-12 text-center mt-3">
                        <button onclick="alerta()" type="submit" class="btn btn-primary">Agendar</button>
                        <button type="submit" class="btn btn-danger" id="fechar-btn">Fechar</button>
                    </div>
            </div>
        </div>
    </form>