<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Cadastro do anfiteatro</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success" role="alert">
                    Cadastro realizado com sucesso
                </div>
            </div>
        </div>
    </div>
</div>
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
        }, 5000);
    }
</script>

<?php

function agendar()
{
    include('../conexao/config.php');
        


    $horaInicio = $_POST['horaInicio'];
    $horaFim = $_POST['horaFim'];
    $nomeUser = $_POST['nameUser'];
    $dia = $_POST['dia'];
    $userId = $_SESSION['id'];
    
    
    // $newStart = new DateTime($horaInicio); talvez use depois
    // $newEnd = new DateTime($horaFim);

    // Consulta SQL para verificar conflitos nos horários

    $query = "SELECT * FROM tb_agendamentos WHERE (hora_inicio <= ? AND hora_fim >= ?) AND dia = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('sss', $horaInicio, $horaFim, $dia); // 'ss' indica que são strings
    $stmt->execute();

    $result = $stmt->get_result();
    // Verifique se há conflitos
    if ($result->num_rows > 0) {
        include('../erros/erroAgendar.php');
        echo "<script>
                $(document).ready(function() {mostrarMensagem();});</script>";
    } else {
        // Insere o novo agendamento no banco de dados
        $stmt->close();

        $sql = "INSERT INTO tb_agendamentos (nome, dia, hora_inicio, hora_fim, id_usuario) VALUES (?, ?, ?, ?, ?)";
        $stmtInsert = $conn->prepare($sql);
        $stmtInsert->bind_param("sssss", $nomeUser, $dia, $horaInicio, $horaFim, $userId);

        if ($stmtInsert->execute()) {
            include('../erros/sucessoAgendar.php');
            echo "<script>
                $(document).ready(function() {mostrarMensagem();});</script>";
        } else {
            echo "Erro na inserção: " . $stmtInsert->error;
        }
    }
}
?>