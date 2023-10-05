<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/sider_menu.css">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="shortcut icon" href="../imagens/logoCidade.jpeg" type="image/x-icon">

    <link href="../bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>
<body>
<aside class="menu-lateral">

<div class="btn-expandir" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Barra de ferramentas">
    <i class="bi bi-list-task"></i>
</div>
<ul>
    <li class="item-menu">
        <a href="../index.php" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Teste">
            <span class="icon"><i class="bi bi-arrow-return-left"></i></span>
            <span class="txt-link">Voltar</span>
        </a>
    </li>


    <li class="item-menu">
        <a href="?page=agendar" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Início">
            <span class="icon"><i class="bi bi-menu-button-wide"></i></span>
            <span class="txt-link">Início</span>
        </a>
    </li>

    <li class="item-menu">
        <a href="?page=AgUsuarios" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Verificar Agendamentos">
            <span class="icon"><i class="bi bi-calendar-event"></i></span>
            <span class="txt-link"></span>
        </a>
    </li>
    <li class="item-menu">
        <a href="../conexao/logout.php" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Sair">
            <span class="icon"><i class="bi bi-box-arrow-left"></i></span>
            <span class="txt-link">Sair</span>
        </a>
    </li>
</ul>
</aside>
</body>
</html>