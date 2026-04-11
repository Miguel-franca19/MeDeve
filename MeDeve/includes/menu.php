<?php
include_once "../config/config.php";
date_default_timezone_set("America/Sao_Paulo");
$data = date("d/m/Y");

?>
<nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-2 mb-0 bg-black rounded nao-aguento-mais">
    <div class="container-fluid">
        <a class="navbar-brand nav-titulo" href="dashboard.php">MeDeve</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-1">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../logout.php">Logout</a>
                </li>
            </ul>
            <?php if ($_SESSION["perfil_usuario"] == "admin") { ?>
                <span class="badge bg-warning text-dark me-3">Admin</span>
            <?php } ?>

            <span class="fw-bold me-4" style="color: #000000;"><span class="fw-normal">Bem vindo,</span> <?php echo strtoupper($_SESSION["nome_usuario"]); ?></span>
            <span class="me-    3" style="color: #000000;"><?php echo $data; ?></span>
        </div>
</nav>