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
                        <form action="">
                            <div class="col">
                                <label for="" class="form-label mt-3">Nome do local:</label>
                                <input type="text" name="nomeLocal" class="form-control" placeholder="Ex.: Praia de Itapema">
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