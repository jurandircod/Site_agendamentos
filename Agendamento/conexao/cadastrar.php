<?php
function cadastrar()
{
    include('../conexao/config.php');
    if (isset($_POST["enviar"])) {

        // verificar se todos os campos estão preenchidos
        if (strlen($_POST["nome"]) > 0 && strlen($_POST["email"]) > 0 && strlen($_POST["senha"]) > 0) {

            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            //verificar se o campo email já existe
            $sql = "SELECT * FROM usuarios WHERE email ='$email'";
            $query = $conn->query($sql);

            $rowsEmails = $query->num_rows;
            if ($rowsEmails >= 1) {
                echo "Email já existente selecione outro email";
            } else {
                $login_user = $conn->prepare("INSERT INTO usuarios (nome, email, senha) VALUE (?, ?, ?)");
                $login_user->bind_param("sss", $nome, $email, $senha);
                $login_user->execute();
            }
        } else {
            echo "Preencha todos os campos";
        }
    }
}
?>