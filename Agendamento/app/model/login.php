<?php
function conectar()
{
    if (!isset($_SESSION)) {
        session_start();
    }
    include('../conexao/config.php');
    //verifica se algum campo foi enviado
    if (isset($_POST['email']) || isset($_POST['senha'])) {
        //verifica se o campodo email ou do telefone está preenchido
        if (strlen($_POST['email']) == 0) {
            include('../erros/erroEmailVazio.php');
            echo "<script> $(document).ready(function() {mostrarMensagem();});</script>";
        } else if (strlen($_POST['senha']) == 0) {
            echo "preencha a senha";
        } else {

            $email = $conn->real_escape_string($_POST['email']); // segurança contra injeção sql
            $senha = $_POST['senha'];

            //verifica se a senha e o email estão cadastrados no banco de dados
            $sql_code = "SELECT * FROM usuarios WHERE email = '$email'"; //consulta sql
            $sql_query = $conn->query($sql_code) or die("falha na execução do codigo SQL:"); // tratar erro

            //pesquisa quantas linhas a sql_query retornou e atribui a quantidade
            $quantidade = $sql_query->num_rows;

            //inicia sessão do usuario cadastradp
            if ($quantidade == 1) {

                $usuario = $sql_query->fetch_assoc();

                if (password_verify($senha, $usuario['senha'])) {
                    
                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['nome'] = $usuario['nome'];
                    $_SESSION['permissoes'] = $usuario['permissoes'];

                    if ($_SESSION['permissoes'] == 1) {
                        echo '<script>window.location.href = "./painelUsuario.php";</script>';
                    } elseif ($_SESSION['permissoes'] == 2) {
                        echo '<script>window.location.href = "../painelAdministrador/painelAdministrador.php";</script>';
                    }
                } else {
                    include('../erros/erroLoginIncorreto.php');
                    echo "<script> $(document).ready(function() {mostrarMensagem();});</script>";
                }
            } else {
                include('../erros/erroLoginIncorreto.php');
                echo "<script> $(document).ready(function() {mostrarMensagem();});</script>";
            }
        }
    }
}
