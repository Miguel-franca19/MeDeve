    <?php
    include_once "config/config.php";
    include "data/dados.php";

    $msg = "";
    $errado = true;
    if (isset($_POST["nome_usuario"]) && isset($_POST["senha_usuario"])) {

        if (!empty($_POST["nome_usuario"]) && !empty($_POST["senha_usuario"])) {

            foreach ($usuarios as $user) {
                if ($_POST["nome_usuario"] == $user["nome"] && $_POST["senha_usuario"] == $user["senha"]) {
                    $errado = false;
                    $_SESSION["nome_usuario"] = $user["nome"];
                    $_SESSION["perfil_usuario"] = $user["perfil"];
                    $msg = "";
                    header("location: pages/dashboard.php");
                }
            }
            if ($errado == true) {
                $msg = "<p class='erro'>Usuario ou senha incorretos<p>";
            }
        } else {
            $msg = "<p class='erro'>Preencha todos os campos<p>";
        }
    }

    ?>


    <!DOCTYPE html>
    <html lang="ptbr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login | MeDeve</title>
        <link rel="stylesheet" href="assets/login.css">
    </head>

    <body>

        <section class="form-meio">
            <form method="POST">
                <h3>Area de login</h3>
                <?php echo $msg; ?>
                <div class="esp-input">
                    <label for="nome_usuario">Digite o seu nome de usuario</label>
                    <input type="text" name="nome_usuario" id="nome_usuario">
                </div>

                <div class="esp-input">
                    <label for="senha_usuario">Digite a sua senha</label>
                    <div class="esp-senha">
                        <input autocomplete="off" type="password" name="senha_usuario" id="senha_usuario">
                    <div class="imagem-senha">
                    <img id="clicado" class="imagem-senha" src="assets/img/olho-fechado.png" alt="">
                </div>
                </div>
            </div>

            <button type="submit">Entrar</button>
        </form>
    </section>

    <script src="assets/js/mostrarSenha.js"></script>
</body>

</html>