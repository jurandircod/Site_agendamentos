<?php 
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
                    <?php 
                    $dataHora = new DateTime($agendamento['date_time_inicio']);
                    $horaFim = new DateTime($agendamento['date_time_fim']);
                    $horaInicio = new DateTime($agendamento['date_time_inicio']);
                    
                    $diaFormatado = $dataHora->format('d/m/y');
                    $horaFimFormatado = $horaFim->format('H:i');
                    $horaInicioFormatado = $horaInicio->format('H:i');
                    ?>

                    <td><?php echo $horaInicioFormatado; ?></td>
                    <td><?php echo $horaFimFormatado; ?></td>
                    <td><?php echo $diaFormatado; ?></td>
                    <td>local</td>

                    <td>
                        
                            <a  onclick="alerta()" href="alterar_agendamento.php?id=<?php echo $agendamento['id_agendamentos']; ?>" class="btn me-4" style="background-color:#cfcf30;" type="button" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="alterar Agendamento">
                                <i id="icone_alterar" class="bi bi-calendar-plus"></i>
                            </a>

                            <a onclick="alerta()" href="../../controller/agendamentos/excluir_agendamento.php?id=<?php echo $agendamento['id_agendamentos']; ?>" class="btn" style="background-color:#c2000d;" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Excluir agendamento">
                                <i id="icone_excluir" class="bi bi-calendar-x-fill"></i>
                            </a>
                        
                    </td>

                </tr>
            <?php endwhile; ?>
            </tbody>
    </table>
</div>

<script>
    function alerta(){
        alert("Tem certeza que deseja excluir esse agendamento ?");
    }
</script>