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
        
            <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                    Erro ao logar, email ou senha incorreto.
                </div>
            </div>
      
    </div>
</div>