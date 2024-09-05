<?php
// Incluir a conexão com o banco de dados
include "conexao.php";

// Pega o e-mail enviado pelo formulário
$email = $_POST['usuario'] ?? '';

if (!empty($email)) {
    // Se o e-mail foi enviado, filtra os chamados com o e-mail correspondente
    $sql = "SELECT * FROM chamados.chamados WHERE email = '$email'";
} else {
    // Se não houver e-mail, não faz a busca
    $sql = "SELECT * FROM chamados.chamados WHERE 1 = 0"; // Retorna nenhum resultado
}

// Executa a query no banco de dados
$dados = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acompanhar Chamados</title>
    <link rel="stylesheet" href="./css/acompChamados.css">
    <link rel="stylesheet" href="./css/global.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <div class="container">
        <h1>Chamados Abertos:</h1>

        <!-- Formulário de busca -->
        <div class="form-busca">
            <form action="acompChamados.php" method="POST">
                <input type="search" name="usuario" placeholder="Buscar Chamados" value="<?php echo htmlspecialchars($email); ?>" required>
                <button type="submit"><ion-icon name="search-outline"></ion-icon></button>
            </form>
        </div>

        <!-- Tabela de resultados -->
        <div class="wrap-scroll">
            <table>
                <thead>
                    <tr>
                        <th>Nº</th>
                        <th>E-mail</th>
                        <th>Responsável</th>
                        <th>Orgão</th>
                        <th>Setor</th>
                        <th>Problema</th>
                        <th>Descrição do Problema</th>
                        <th>Data de Abertura</th>
                        <th>Status</th>                   
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Verifica se houve retorno de dados
                    if (mysqli_num_rows($dados) > 0) {
                        // Loop pelos resultados e mostra na tabela
                        while ($linha = mysqli_fetch_assoc($dados)) {
                            echo "<tr class='" . ($linha['status'] == 'concluido' ? 'status-concluido' : 'status-aberto') . "'>";
                            echo "<td>" . $linha['idchamado'] . "</td>";
                            echo "<td>" . $linha['email'] . "</td>";
                            echo "<td>" . $linha['responsavel'] . "</td>";
                            echo "<td>" . $linha['orgao'] . "</td>";
                            echo "<td>" . $linha['setor'] . "</td>";
                            echo "<td>" . $linha['problema'] . "</td>";
                            echo "<td>" . $linha['desc-problem'] . "</td>";
                            echo "<td>" . $linha['data-abertura'] . "</td>";
                            echo "<td>" . ucfirst($linha['status']) . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='9'>Nenhum chamado encontrado.</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- Botão voltar -->
        <button class="btn-voltar" type="button" onclick="window.history.back();">Voltar</button>
    </div>
</body>
</html>
