<?php
include_once "../config/config.php";
include "../includes/auth.php";
include "../data/dados.php";
include "../includes/header.php";
include "../includes/menu.php";

if (!isset($_SESSION["contas"])) {
    $_SESSION["contas"] = $contas;
}

$contas_pagar = [];
$contas_receber = [];
$total_pagar = 0.0;
$total_receber = 0.0;

foreach ($_SESSION["contas"] as $contaDeVerificacao) {
    if ($contaDeVerificacao["tipo"] == "pagar") {
        $contas_pagar[] = $contaDeVerificacao;
    }
    if ($contaDeVerificacao["tipo"] == "receber") {
        $contas_receber[] = $contaDeVerificacao;
    }
}
/*
--- Arnaldo, isso foi uma tentativa de conseguir excluir 
o card direto na array pelo ID dele, mas sla como faz---

if(isset($_POST["id_do_card"])){
    apagarCard($_POST["id_do_card"]);
}

function apagarCard(int $id){
    unset($contas[$id]);
}
*/
?>
<head>
    <title>Dashboard | MeDeve</title>
</head>
<main class="main-dashboard">
    <section class="espaco-tabelas">
        <article class="tabela">
            <h1>Quem me deve</h1>
            <div class="campos">

                <?php
                foreach ($contas_receber as $conta) {
                    echo "<div class='card-conta receber'>
                    <div class='conta-info'>
                        <h3>" . $conta["nome"] . "</h3>
                        <p class='descricao'>" . $conta["descricao"] . "</p>
                        <p class='valor'>R$ " . $conta["valor"] . "</p>
                    </div>
                    <button class='btn-excluir'>recebido</button>
                </div>";
                    $total_receber += $conta["valor"];
                }
                ?>
                <div class="tot"> TOTAL: <?php echo "<span>R$" . $total_receber . "</span>"; ?></div>

            </div>

        </article>
        <article class="tabela">
            <h1>Quem voce ta devendo</h1>
            <div class="campos">

                <?php
                foreach ($contas_pagar as $conta) {
                    echo "<div class='card-conta pagar'>
                    <div class='conta-info'>
                        <h3>" . $conta["nome"] . "</h3>
                        <p class='descricao'>" . $conta["descricao"] . "</p>
                        <p class='valor'>R$ " . $conta["valor"] . "</p>
                    </div>
                        <button class='btn-excluir'>pago</button>
                </div>";
                    $total_pagar += $conta["valor"];
                }
                ?>
                <div class="tot"> TOTAL: <?php echo "<span>R$" . $total_pagar . "</span>"; ?></div>

            </div>

        </article>

    </section>

</main>

<?php

include "../includes/footer.php";
?>