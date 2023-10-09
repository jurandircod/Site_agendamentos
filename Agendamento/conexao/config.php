<?php

@define("HOST", "localhost");
@define("USER", "root");
@define("PASSWD", "jurandir1965"); // lembrar de mudar a psswd no ubuntu
@define("DBname", "agendamentos");

$conn = new mysqli(HOST, USER, PASSWD, DBname); //conecta ao banco de dados.

if ($conn->connect_error) {
    echo "erro ao conectar ao banco ". $conn->error;
}

?>