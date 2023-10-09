<?php include("../conexao/config.php");
if (!isset($_SESSION)) {
    session_start();
}

$fk_user = $_SESSION['id'];
$sql_query = "SELECT * FROM tb_agendamentos WHERE id_usuario = '$fk_user'";
$result = $conn->query($sql_query);

?>
<br>
<div class="texto_horarios mb-4 ">
    <h1>Horarios reservados</h1>
</div>

<div class="container-usuarios">

    <table class="table table-dark table-striped table-hover table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">Horario de inicio</th>
                <th scope="col">Horario de fim</th>
                <th scope="col">Dia</th>
                <th scope="col">Local</th>
                <th scope="col">Funções</th>
            </tr>
        </thead>
        <?php while ($agendamento = $result->fetch_assoc()) : ?>
            <tbody class="table">
                <tr>
                    <?php $dataHora = new DateTime($agendamento['dia']);
                    $diaFormatado = $dataHora->format('Y/d/m');
                    ?>

                    <td><?php echo $agendamento['hora_inicio']; ?></td>
                    <td><?php echo $agendamento['hora_fim']; ?></td>
                    <td><?php echo $diaFormatado; ?></td>
                    <td>local</td>

                    <td>

                        
                            <a href="alterar_agendamento.php?id=<?php echo $agendamento['id_agendamentos']; ?>" class="btn btn-warning me-4" style="background-color:yellow;" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="alterar Agendamento">
                                <i class="bi bi-calendar-plus"></i>
                            </a>

                            <a href="excluir_agendamento.php?id=<?php echo $agendamento['id_agendamentos']; ?>" class="btn btn-danger" style="background-color:red;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Excluir agendamento">
                                <i class="bi bi-calendar-x-fill"></i>
                            </a>
                        
                    </td>

                </tr>
            <?php endwhile; ?>
            </tbody>
    </table>
</div>

<?php

?>