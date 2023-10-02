<?php
@define("HOST", "localhost");
@define("USER", "root");
@define("PASSWD", "");
@define("DBname", "agendamentos");

$conn = new mysqli(HOST, USER, PASSWD, DBname); //conecta ao banco de dados.

if ($conn->connect_error) {
    echo "erro ao conectar ao banco ". $conn->error;
}

?>