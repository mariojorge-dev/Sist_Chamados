<?php
if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    include "conexao.php";

    // Usando prepared statements para evitar SQL Injection
    $stmt = $conexao->prepare("SELECT * FROM chamados.chamados WHERE idchamado = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Assume-se que o ID é único e pega apenas um registro
    if ($linha = $result->fetch_assoc()) {
        $email = $linha['email'];
        $responsavel = $linha['responsavel'];
        $telefone = $linha['telefone'];
        $orgao = $linha['orgao'];
        $setor = $linha['setor'];
        $problema = $linha['problema'];
        $descproblem = $linha['desc-problem'];
    }

    $stmt->close();
    $conexao->close();
} else {
    // Redireciona ou mostra uma mensagem de erro se não houver ID
    echo "ID não fornecido.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Chamado</title>
    <link rel="icon" href="./img/Logo-Site-1024x1024.png">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/solicitacao.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div class="container">
        <div class="img-logo">
            <img src="./img/Logo-Site-1024x1024.png" alt="">
        </div>
        <h2>Editar Chamado</h2>
        <div class="form">
            <form action="solicitacao.php" method="POST">
                <div class="input-email">
                    <label for="">Email:</label>
                    <input placeholder="Digite seu e-mail" name="email" required id="email" type="email"
                        value="<?php echo htmlspecialchars($email); ?>">
                </div>
                <div class="input-responsavel">
                    <label for="">Responsável:</label>
                    <input placeholder="Nome do responsável" name="responsavel" type="text" id="responsavel"
                        value="<?php echo htmlspecialchars($responsavel); ?>">
                </div>
                <div class="input-celular">
                    <label for="">Telefone/Celular:</label>
                    <input placeholder="Número de telefone/celular do responsável" name="telefone" type="tel" id="telefone" value="<?php echo htmlspecialchars($telefone); ?>">
                </div>
                <div class="input-orgao">
                    <label for="">Órgão:</label>
                    <select id="orgao" name="orgao">
                        <option value="">Selecione</option>
                        <option value="das" <?php if ($orgao == 'das') echo 'selected'; ?>>DAS</option>
                        <option value="fcas" <?php if ($orgao == 'fcas') echo 'selected'; ?>>FCAS</option>
                        <!-- Adicione outras opções conforme necessário -->
                    </select>
                </div>
                <div class="input-setor">
                    <label for="setor">Setor:</label>
                    <select name="setor" id="setor">
                        <option value="">Selecione</option>
                        <option value="administrativo" <?php if ($setor == 'administrativo') echo 'selected'; ?>>ADMINISTRATIVO</option>
                        <!-- Adicione outras opções conforme necessário -->
                    </select>
                </div>
                <div class="input-desc-problem">
                    <fieldset>
                        <legend>Descrição do Problema:</legend>
                        <textarea name="desc-problem" id="desc-problem" placeholder="Digite o problema da forma mais detalhada possível"><?php echo htmlspecialchars($descproblem); ?></textarea>
                    </fieldset>
                </div>
                <div class="input-problema">
                    <label for="problema">Problema:</label>
                    <select name="problema" id="problema">
                        <option value="">Selecione</option>
                        <option value="hardware" <?php if ($problema == 'hardware') echo 'selected'; ?>>HARDWARE</option>
                        <!-- Adicione outras opções conforme necessário -->
                    </select>
                </div>
                <button class="btn"><a href="./index.php">Voltar</a></button>
                <button class="btn" name="submit" type="submit" id="submit">Enviar</button>
            </form>
        </div>
    </div>
</body>
</html>
