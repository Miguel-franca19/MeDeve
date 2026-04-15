<nav>
    <?php if ($_SESSION["perfil_usuario"] == "cliente") { ?>
        <p>Área do Cliente</p>
    <?php } ?>
    <?php if ($_SESSION["perfil_usuario"] == "admin") { ?>
        <p>Área Administrativa</p>
    <?php } ?>
</nav>