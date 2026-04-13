<?php
include "../config/config.php";
include "../includes/auth.php";
include "../data/dados.php";
include "../includes/header.php";
include "../includes/menu.php";


if (!isset($_SESSION["contas"])) {
    $_SESSION["contas"] = $contas;
}

$id = count($_SESSION["contas"]) + 1;
$msg = "";

if (isset($_POST["novo_nome"]) && isset($_POST["nova_descricao"]) && isset($_POST["novo_valor"]) && isset($_POST["novo_tipo"])) {
    if (!empty($_POST["novo_nome"]) && !empty($_POST["nova_descricao"]) && !empty($_POST["novo_valor"]) && !empty($_POST["novo_tipo"])) {
        $_SESSION["contas"][] = [
            "id" => $id,
            "nome" => $_POST["novo_nome"],
            "descricao" => $_POST["nova_descricao"],
            "tipo" => $_POST["novo_tipo"],
            "valor" => floatval($_POST["novo_valor"])
        ];
        $msg = "<p calss='acerto'>conta cadastrada com sucesso!</p>";
    } else {
        $msg = "<p calss='erro'>Preencha todos os campos!</p>";
    }
}
?>

<head>
    <link rel="stylesheet" href="../assets/cadastro.css">
</head>
<div class="centralizar">
    <form method="post">
        <h3>cadastro de cotas</h3>
        <?php echo $msg;?>
        <div class="campo">
            <label for="novo_nome">Digite o nome a ser cadastrado</label>
            <input type="text" name="novo_nome" id="novo_nome">

        </div>
        <div class="campo">
            <label for="nova_descricao">Digite a descrição</label>
            <input type="text" name="nova_descricao" id="nova_descricao">
        </div>

        <div class="campo">
            <label for="novo_valor">Digite o valor</label>
            <input type="number" name="novo_valor" id="novo_valor" min="1">
        </div>

        <div class="campo">
            <label for="novo_tipo">Tipo de conta</label>
            <select id="novo_tipo" name="novo_tipo">
                <option value="pagar">pagar</option>
                <option value="receber">receber</option>
            </select>
        </div>
        <button type="submit">Enviar</button>
    </form>

</div>

<?php
include "../includes/footer.php";
?>