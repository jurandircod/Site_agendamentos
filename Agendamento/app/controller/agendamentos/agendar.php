
<?php

function agendar()
{
    include('../../config/config.php');

    $horaInicio = $_POST['horaInicio'];
    $horaFim = $_POST['horaFim'];
    $nomeUser = $_POST['nameUser'];
    $dia = $_POST['dia'];
    $userId = $_SESSION['id'];
  
  
    $date_time_inicio = new DateTime($dia . $horaInicio);
    $date_time_fim = new DateTime($dia . $horaFim);

    $date_fim = $date_time_fim->format('Y-m-d H:i:s');
    $date_inicio = $date_time_inicio->format('Y-m-d H:i:s');
    
    // Consulta SQL para verificar conflitos nos horários

    $query = "SELECT * FROM tb_agendamentos WHERE (date_time_inicio <= ? AND date_time_fim >= ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $date_inicio, $date_fim); // 'ss' indica que são strings
    $stmt->execute();

    $result = $stmt->get_result();
   
    // Verifica se há conflitos
    if ($result->num_rows) {
       
        include('../../controller/errors/errosClass.php');
        $erroAgendar = new PainelDeErro($mensagensDeErro[1]['mensagem'], $mensagensDeErro[1]['tipo']);
        $erroAgendar->exibirErro();
        echo "<script> $(document).ready(function() {mostrarMensagem();});</script>";
    } else {
        // Insere o novo agendamento no banco de dados
        $stmt->close();

        $sql = "INSERT INTO tb_agendamentos (nome, date_time_inicio, date_time_fim, id_usuario) VALUES (?, ?, ?, ?)";
        $stmtInsert = $conn->prepare($sql);
        $stmtInsert->bind_param("ssss", $nomeUser, $date_inicio, $date_fim, $userId);

        if ($stmtInsert->execute()) {
            
            include('../../controller/errors/errosClass.php');
            $erroAgendar = new PainelDeErro($mensagensDeErro[0]['mensagem'], $mensagensDeErro[0]['tipo']);
            $erroAgendar->exibirErro();
            echo "<script> $(document).ready(function() {mostrarMensagem();});</script>";

        } else {
            echo "Erro na inserção: " . $stmtInsert->error;
        }
    }
}
?>