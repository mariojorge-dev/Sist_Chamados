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
        <div class="tabela">
            <div class="form-busca">
                <form  action="">
                    <input type="search" placeholder="Buscar Chamados">
                    <button><ion-icon name="search-outline"></ion-icon></button>
                </form>
            </div>
            <div class="wrap-scroll">
                <table>
                    <tr>
                        <th>Nº do Chamado</th>
                        <th>E-mail</th>
                        <th>Responsável</th>
                        <th>Orgão</th>
                        <th>Setor</th>
                        <th>Problema</th>
                        <th>Descrição do Problema</th>
                        <th>Data de Abertutra</th>
                        <th>Status</th>                   
                    </tr>
                    <tr class="status-aberto">
                        <td>1</td>
                        <td>mnq@gmail.commmmm</td>
                        <td>monique</td>
                        <td>fcas</td>
                        <td>ti</td>
                        <td>hardware</td>
                        <td>problema</td>
                        <td>data</td>
                        <td></td>
                    </tr> 
                    <tr class="status-concluido">
                        <td>2</td>
                        <td>mnq@gmail.commmmm</td>
                        <td>monique</td>
                        <td>fcas</td>
                        <td>ti</td>
                        <td>hardware</td>
                        <td>problema no pc</td>
                        <td>data</td>
                        <td>aberto</td>
                    </tr>                                       
                </table>
            </div>
        </div>
        <button class="btn-voltar"><a href="./index.php">Voltar</a></button>
    </div>
</body>
</html>