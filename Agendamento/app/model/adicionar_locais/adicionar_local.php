<?php
    
    include('../../config/config.php');
    $nome_local = $_POST['nome_local'];
    
    $sql = "INSERT INTO tb_locais (nome_local) VALUES (?)";
    $query = $conn->prepare($sql);
    $query->bind_param("s", $nome_local);

?>