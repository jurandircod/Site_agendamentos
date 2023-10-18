<br>
<div class="texto_agendamentos mb-4 text-center">
<h2><strong>Agendamentos</strong></h2>
</div>

<?php
include('../../config/config.php');

$sql = "SELECT * FROM tb_agendamentos";
$result = $conn->query('SELECT * FROM tb_agendamentos');


?>


<div class="container-cards">
    <div class="card">

        <div class="card-body text-center">
            <h5 class="card-title"><strong>Anfiteatro</strong></h5>
            <p class="card-text"></p>

            <table class="table table table-striped table-hover table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">Dias indisponíveis</th>
                        <!--Outras colunas-->
                    </tr>
                </thead>
                <tbody>
                    <?php while ($horarios = $result->fetch_assoc()) : ?>
                        <?php
                        $data_inicio = new DateTime($horarios['date_time_inicio']);
                        $hora_inicio = $data_inicio->format('H:i');

                        $dia = $data_inicio->format('d/m/y');

                        $data_final = new DateTime($horarios['date_time_fim']);
                        $hora_fim = $data_final->format('H:i');

                        ?>
                        <tr>
                            <td><?php echo $dia ?>  <br> <?php echo $hora_inicio ?> - <?php echo $hora_fim ?></td>

                        </tr>
                    <?php endwhile; ?>
                    <!-- Outras linhas... -->
                </tbody>

            </table>


            <button type="button" name="enviar" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Agendar
            </button>
        </div>
       
        
    </div>





    

</div>