<?php
function destroirsessao(){
if(!isset($_SESSION)){
    session_start();
}

session_destroy();
header("location: ../usuario/loginUsuario.php");
}
?>