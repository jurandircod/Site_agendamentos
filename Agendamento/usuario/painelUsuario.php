<?php
include("../protected/protected.php");

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="../styles/sider_menu.css">

</head>

<body>
    <aside class="menu-lateral">
        <?php include("./sider_menu.php"); ?>
        <li class="item-menu">
            <a href="../conexao/logout.php">
                <span class="icon"><i class="bi bi-box-arrow-left"></i></span>
                <span class="txt-link">Sair</span>
            </a>
        </li>
        </ul>
    </aside>
</body>

</html>