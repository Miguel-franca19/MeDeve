<?php
//parte para verificar se ha alguma sessao no sistema

if (!isset($_SESSION["nome_usuario"])) {
    header("location: ../login.php");
}
