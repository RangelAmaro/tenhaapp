<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenha App</title>
    <meta name="description" content="Transforme seu site em um aplicativo nativo">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/font/style.css">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon-profundidade.png">
</head>

<body>
    <main class="main-home">
        <header>
            <img src="/assets/img/logo-1(branca).png" alt="logo tenha app">
        </header>
        <section class="orcamento">
            <h1>Converta seu site em app</h1>
            <form action="processa_formulario.php" method="post">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required><br>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required><br>

                <label for="link">Link:</label>
                <input type="text" id="link" name="link" required><br>

                <input type="submit" value="Enviar">
            </form>
        </section>
        <div class="explica-home">
            <h2>Oque acontece <strong>depois?</strong></h2>
            <p>Vamos entrar em contato e te enviar o nosso orçamento, e esclarecer dúvidas</p>
        </div>
    </main>
</body>

</html>