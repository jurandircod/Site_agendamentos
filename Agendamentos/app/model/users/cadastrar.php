<?php
function cadastrar()
{
    include('../conexao/config.php');
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

         // verificar se todos os campos estão preenchidos
        

            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $hash_senha = password_hash($senha, PASSWORD_BCRYPT);

            // Verificar se o campo email já existe
            $sql = "SELECT * FROM usuarios WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows >= 1) {
                echo "Email já existente, selecione outro email.";
            } else {
                // Inserir o novo usuário com a senha criptografada
                $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sss", $nome, $email, $hash_senha);

                if ($stmt->execute()) {
                    echo "<div class='modal-dialog modal-dialog-centered'>
                    Cadastro realizado com sucesso
                  </div>";
                } else {
                    echo "Erro ao registrar o usuário: " . $stmt->error;
                }
            }
        

        $stmt->close();
        $conn->close();
   
}
