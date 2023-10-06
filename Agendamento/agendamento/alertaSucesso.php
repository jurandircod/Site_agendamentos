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
        <h4 class="modal-title">Mensagem de Alerta</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        Sua mensagem de alerta aqui.
      </div>
    </div>
  </div>
</div>
