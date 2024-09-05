<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="./img/Logo-Site-1024x1024.png">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/login.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div class="container">
        <div class="img-logo">
            <img src="./img/Logo-Site-1024x1024.png" alt="">
        </div>
        <form action="acompChamados.php" method="POST"> <!-- Alterado para POST -->
            <h2>Usuário</h2>
            <p>Digite o mesmo e-mail informado na abertura dos chamados que deseja acompanhar</p>
            <div class="input-box">
                <input placeholder="exemplo@email.com" name="usuario" id="usuario" type="email" required>
            </div>
            <button class="btn" type="button" onclick="window.history.back();">Voltar</button> <!-- Botão Voltar -->
            <button class="btn" type="submit" id="submit">Entrar</button> <!-- Submete o formulário -->
        </form>
    </div>
</body>
</html>
