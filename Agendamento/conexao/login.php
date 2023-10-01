<?php

class Login{
    
    public $email;
    public $senha;


    public function  verificarCampos ($email, $senha){
           
        include("./config.php");
                                
                //verifica se a senha e o email estão cadastrados no banco de dados
                $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'"; //consulta sql
                $sql_query = $conn->query($sql_code) or die("falha na execução do codigo SQL: $sql_code");// tratar erro
        
                //pesquisa quantas linhas a sql_query retornou e atribui a quantidade
                $quantidade = $sql_query->num_rows;
        
                //inicia sessão do usuario cadastradp
                if ($quantidade == 1) {
                    $usuario = $sql_query->fetch_assoc();
        
                    if(!isset($_SESSION)){
                        session_start();
                    }
                    
                    $_SESSION['id'] = $usuario['id'];
                    $_SESSION['nome'] = $usuario['nome'];
        
                    header("location: painelUsuario.php");
        
                } else {
                    echo "falha ao logar! email ou senha incorretos";
                }
            
            }
}
