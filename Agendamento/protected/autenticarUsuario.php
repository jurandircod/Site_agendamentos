<?php
function autenticarUser()
{
    if (!isset($_SESSION['id'])) {
        session_start();
    }

    if (isset($_SESSION['permissoes'])) {
        if (isset($_SESSION["id"]) && $_SESSION["permissoes"] == 1) {
            header("location: ../usuario/painelUsuario.php");
        } elseif (isset($_SESSION["id"]) && $_SESSION["permissoes"] == 2) {
            header("location: ../painelAdministrador/painelAdministrador.php");
        }
    }
}
