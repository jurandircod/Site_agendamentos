<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
    function mostrarMensagem() {



        // Seleciona o modal pelo seu ID
        var modal = document.getElementById("myModal");

        // Mostra o modal
        $(modal).modal('show');

        // Define um temporizador para fechar o modal após 3 segundos (3000 milissegundos)
        setTimeout(function() {
            $(modal).modal('hide');
        }, 3000);

    }
</script>



<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cadastro do anfiteatro</h4>

            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert">
                    Agendamento realizado com sucesso.
                </div>
            </div>
        </div>
    </div>
</div>