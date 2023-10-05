<?php
function agendar()
{
    include('../conexao/config.php');
    include('../protected/protected.php');
    
    
    $horaInicio = $_POST['horaInicio'];
    $horaFim = $_POST['horaFim'];
    $nomeUser = $_POST['nameUser'];
    $dia = $_POST['dia'];
    $userId = $_SESSION['id'];

    // $newStart = new DateTime($horaInicio); talvez use depois
    // $newEnd = new DateTime($horaFim);

    // Consulta SQL para verificar conflitos nos horários
    
    $query = "SELECT * FROM tb_agendamentos WHERE (hora_inicio <= ? AND hora_fim >= ?) AND dia = '$dia'";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $horaFim, $horaInicio); // 'ss' indica que são strings
    $stmt->execute();

    // Verifique se há conflitos
    if ($stmt->num_rows > 0) {

        echo "Conflito detectado. Escolha uma data/hora diferente.";
    } else {
        // Insere o novo agendamento no banco de dados
        $stmt->close();

        $sql = "INSERT INTO tb_agendamentos (nome, dia, hora_inicio, hora_fim, id_usuario) VALUES (?, ?, ?, ?, ?)";
        $stmtInsert = $conn->prepare($sql);
        $stmtInsert->bind_param("issss", $nomeUser, $dia, $horaInicio, $horaFim, $userId);

        if ($stmtInsert->execute()) {
            echo "<script>alerta(); <script>";
        } else {
            echo "Erro na inserção: " . $stmtInsert->error;
        }

        $stmt->close();
    }
?>

    <script>
        function alerta() {
            alert("Agendamento realizado com sucesso")
        }
    </script>
<?php

}
?>