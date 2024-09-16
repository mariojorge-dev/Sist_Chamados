<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN Acompanhar Chamados</title>
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
                    <button><ion-icon name="search"></ion-icon></button>
                </form>
            </div>
            <div class="wrap-scroll">
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Responsável</th>
                        <th>Contato</th>
                        <th>Orgão</th>
                        <th>Setor</th>
                        <th>Problema</th>
                        <th>Descrição do Problema</th>
                        <th>Data de Abertutra</th>
                        <th>Status</th>
                        <th>Resolução</th>                     
                    </tr>
                    <tr class="status-aberto">
                        <td>1</td>
                        <td>monique</td>
                        <td>35225241145</td>
                        <td>fcas</td>
                        <td>ti</td>
                        <td>hardware</td>
                        <td>problema</td>
                        <td>data</td>
                        <td><select name="status" style="background-color: var(--color-statusAberto)" id="status">
                            <option value="aberto" style="background-color: var(--color-statusAberto)" >Aberto</option>
                            <option value="em-progresso" style="background-color: var(--color-statusEmProgresso)">Em Progresso</option>
                            <option value="concluido" style="background-color: var(--color-statusConcluido)">Concluido</option>
                            <option value="desconsiderar" style="background-color: var(--color-statusDesconsiderar)">Desconsiderar</option>
                        </select></td>
                        <td>
                            <div>
                                <textarea name="resolucao" id="resolucao"></textarea>
                            </div>
                        </td>
                    </tr> 
                    <tr class="status-concluido">
                        <td>2</td>
                        <td>monique</td>
                        <td>35225241145</td>
                        <td>fcas</td>
                        <td>ti</td>
                        <td>hardware</td>
                        <td>problema no pc</td>
                        <td>data</td>
                        <td><select name="status" style="background-color: var(--color-statusFechado)" id="status">
                            <option name="status" value="aberto" style="background-color: var(--color-statusAberto)" >Aberto</option>
                            <option name="status" value="em-progresso" style="background-color: var(--color-statusEmProgresso)">Em Progresso</option>
                            <option name="status" value="concluido" style="background-color: var(--color-statusConcluido)">Concluido</option>
                            <option name="status" value="desconsiderar" style="background-color: var(--color-statusDesconsiderar)">Desconsiderar</option>
                        </select></td>
                        <td>
                        <div>
                                <textarea name="resolucao" id="resolucao"></textarea>
                            </div>
                        </td>
                    </tr>                                 
                </table>
            </div>
        </div>
        <button class="btn-voltar"><a href="./chamadoOpcao.php">Voltar</a></button>
    </div>
</body>
</html>