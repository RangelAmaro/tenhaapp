<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Google tag (gtag.js) -->
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=G-B3XRMPJ0ZK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-B3XRMPJ0ZK');
    </script>-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenha App</title>
    <meta name="description" content="Transforme seu site em um aplicativo nativo">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/font/style.css">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon-profundidade.png">
</head>

<body>
    <header>
        <img src="/assets/img/logo-1(branca).png" alt="logo tenha app">
    </header>
    <main class="main-home">
        <section class="orcamento">
            <h1>Converta seu site em <span class="c-roxo">app</span></h1>
            <form class="form-orcamento" action="processa_formulario.php" method="post">
                <label for="nome">Nome do negócio</label>
                <input type="text" id="nome" name="nome" placeholder="Nome da empresa" required>

                <label for="email">Contato</label>
                <input type="text" id="email" name="email" placeholder="Numero ou e-mail" required>

                <label for="link">Seu site</label>
                <input type="text" id="link" name="link" placeholder="Link do site" required>

                <input class="botao-orcamento" type="submit" value="Enviar">
            </form>
        </section>
        <section class="txt-foto">
            <img src="/assets/img/User-flow-amico.png" alt="Tenha app ilustração">
            <div class="explica-home">
                <h2>Oque acontece <strong>depois?</strong></h2>
                <p>Vamos entrar em contato e te enviar o nosso orçamento, e esclarecer dúvidas</p>
            </div>
        </section>

    </main>
</body>

</html>