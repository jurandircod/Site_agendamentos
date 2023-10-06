<?php
if(!isset($_SESSION['id']))
{
    session_start();
}


if(isset($_SESSION["id"]) && $_SESSION["permissao"] == 1)
{
    header("location: ../usuario/painelUsuario.php");
}elseif (isset($_SESSION["id"]) && $_SESSION["permissao"] == 2)
{
    header("location: ../administrador/painelAdministrador.php");
}
?>