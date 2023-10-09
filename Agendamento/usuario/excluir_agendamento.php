<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include("../conexao/config.php");
if (!isset($_SESSION)) {
    session_start();
}

$excluirAg = $_GET['id'];
$usuario_logado = $_SESSION['id'];

if (isset($excluirAg)) {
    $sqlExcAgendamento = "SELECT id_usuario FROM tb_agendamentos WHERE id_agendamentos = ?";
    $stmt = $conn->prepare($sqlExcAgendamento);
    $stmt->bind_param("i", $excluirAg);
    $stmt->execute();
    $stmt->bind_result($id_usuario_agendamento);
    $stmt->fetch();
    $stmt->close();

    if ($usuario_logado != $id_usuario_agendamento) {
        echo "<script>alert('Você não tem permissão para excluir esse agendamento!')</script>";
    } else {
        $sql_query = "DELETE FROM tb_agendamentos WHERE id_agendamentos = '$excluirAg'";
        $stmt = $conn->prepare($sql_query);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        header('location: painelUsuario.php?page=AgUsuarios');
    }
}
