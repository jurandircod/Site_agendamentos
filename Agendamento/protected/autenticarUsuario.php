<?php
if(!isset($_SESSION['id'])){
    session_start();
}

if(isset($_SESSION["id"])){
    header("location: ../usuario/painelUsuario.php");
}
?>