<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php require 'partials/fonts.css'; ?>
    </style>
    <link rel="stylesheet" href="<?= BASE_CSS; ?>dashboard.css">
</head>

<body>
    <div class="areaLogin">

        <main class="conteudoLogin">
            <div class="logo">
                <img src="<?= BASE_IMAGES; ?>orbita.png" alt="">
            </div>
            <div class="areaForm">
                <form action="" method="post">
                    <h4>Olá, tudo bem? Seja bem-vindo!</h4>
                    <input type="email" name="email" placeholder="Login" required autofocus>
                    <input type="password" name="senha" placeholder="Senha" required>
                    <button>Entrar</button>
                    <a href="">Esquici minha senha</a>
                </form>
            </div>
        </main>
    </div>
    <footer class="rodape">
        <span>Todos os direitos reservados</span>
    </footer>
</body>

</html>