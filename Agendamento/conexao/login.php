<?php
function conectar()
{
    include('../conexao/config.php');
    //verifica se algum campo foi enviado
    if (isset($_POST['email']) || isset($_POST['senha'])) {
        //verifica se o campodo email ou do telefone está preenchido
        if (strlen($_POST['email']) == 0) {
            echo "preencha o email";
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

                    if (!isset($_SESSION)) {
                        session_start();
                    }

                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['nome'] = $usuario['nome'];

                    header("location: painelUsuario.php");
                } else {
                    echo "Senha está incorreta";
                }
            
            } else {
                echo "falha ao logar! email incorreto";
            }
        }
    }
}
