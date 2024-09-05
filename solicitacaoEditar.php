<?php
if (!empty($_GET['idchamado'])) {
    $id = $_GET['idchamado'];

    include "conexao.php";

    // Usando prepared statements para evitar SQL Injection
    $stmt = $conexao->prepare("SELECT * FROM chamados.chamados WHERE idchamado = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Assume-se que o ID é único e pega apenas um registro
    if ($linha = $result->fetch_assoc()) {
        $id = $linha['idchamado'];
        $email = $linha['email'];
        $responsavel = $linha['responsavel'];
        $telefone = $linha['telefone'];
        $orgao = $linha['orgao'];
        $setor = $linha['setor'];
        $problema = $linha['problema'];
        $descproblem = $linha['desc-problem'];
    } else {
        echo "Chamado não encontrado.";
        exit();
    }

    $stmt->close();
    $conexao->close();
} else {
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
            <form action="script-editar.php" method="POST">
                <input type="hidden" name="idchamado" value="<?php echo htmlspecialchars($id); ?>">
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
                    <input placeholder="Número de telefone/celular do responsável" name="telefone" type="tel"
                        id="telefone" value="<?php echo htmlspecialchars($telefone); ?>">
                </div>
                <div class="input-orgao">
                    <label for="">Órgão:</label>
                    <select id="orgao" name="orgao">
                        <option value="">Selecione</option>
                        <option value="das" <?php if ($orgao == 'das')
                            echo 'selected'; ?>>DAS</option>
                        <option value="fcas" <?php if ($orgao == 'fcas')
                            echo 'selected'; ?>>FCAS</option>
                        <!-- Adicione outras opções conforme necessário -->
                    </select>
                </div>
                <div class="input-setor">
                    <label for="setor">Setor:</label>
                    <select name="setor" id="setor">
                        <option value="">Selecione</option>
                        <option value="administrativo" <?php if ($setor == 'administrativo')
                            echo 'selected'; ?>>
                            ADMINISTRATIVO</option>
                        <option value="almox" <?php if ($setor == 'almox')
                            echo 'selected'; ?>>ALMOX</option>
                        <option value="aprov" <?php if ($setor == 'aprov')
                            echo 'selected'; ?>>APROV</option>
                        <option value="atendimento-ao-contribuinte" <?php if ($setor == 'atendimento-ao-contribuinte')
                            echo 'selected'; ?>>ATENDIMENTO AO CONTRIBUINTE</option>
                        <option value="casa-dos-veteranos" <?php if ($setor == 'casa-dos-veteranos')
                            echo 'selected'; ?>>
                            CASA DOS VETERANOS</option>
                        <option value="com-ti" <?php if ($setor == 'com-ti')
                            echo 'selected'; ?>>COM. TI</option>
                        <option value="controladoria" <?php if ($setor == 'controladoria')
                            echo 'selected'; ?>>
                            CONTROLADORIA</option>
                        <option value="compras" <?php if ($setor == 'compras')
                            echo 'selected'; ?>>COMPRAS</option>
                        <option value="consignado" <?php if ($setor == 'consignado')
                            echo 'selected'; ?>>CONSIGNADO
                        </option>
                        <option value="consultorios" <?php if ($setor == 'consultorios')
                            echo 'selected'; ?>>CONSULTÓRIOS
                        </option>
                        <option value="ctpm" <?php if ($setor == 'ctpm')
                            echo 'selected'; ?>>CTPM</option>
                        <option value="dasi" <?php if ($setor == 'dasi')
                            echo 'selected'; ?>>DASI</option>
                        <option value="dir-financ" <?php if ($setor == 'dir-financ')
                            echo 'selected'; ?>>DIR. FINANC
                        </option>
                        <option value="digeaf" <?php if ($setor == 'digeaf')
                            echo 'selected'; ?>>DIGEAF</option>
                        <option value="digep" <?php if ($setor == 'digep')
                            echo 'selected'; ?>>DIGEP</option>
                        <option value="diplan" <?php if ($setor == 'diplan')
                            echo 'selected'; ?>>DIPLAN</option>
                        <option value="projetos" <?php if ($setor == 'projetos')
                            echo 'selected'; ?>>PROJETOS</option>
                        <option value="juridico" <?php if ($setor == 'juridico')
                            echo 'selected'; ?>>JURÍDICO</option>
                        <option value="ti" <?php if ($setor == 'ti')
                            echo 'selected'; ?>>TI</option>
                        <option value="seas" <?php if ($setor == 'seas')
                            echo 'selected'; ?>>SEAS</option>
                        <option value="neti" <?php if ($setor == 'neti')
                            echo 'selected'; ?>>NETI</option>
                        <option value="nadeq" <?php if ($setor == 'nadeq')
                            echo 'selected'; ?>>NADEQ</option>
                        <option value="htpm" <?php if ($setor == 'htpm')
                            echo 'selected'; ?>>HTPM</option>
                        <option value="patrimonio" <?php if ($setor == 'patrimonio')
                            echo 'selected'; ?>>PATRIMÔNIO
                        </option>
                        <option value="transp" <?php if ($setor == 'transp')
                            echo 'selected'; ?>>TRANSP</option>
                        <option value="seconte" <?php if ($setor == 'seconte')
                            echo 'selected'; ?>>SECONTE</option>
                        <option value="subchefe" <?php if ($setor == 'subchefe')
                            echo 'selected'; ?>>SUBCHEFE</option>
                        <option value="presidencia" <?php if ($setor == 'presidencia')
                            echo 'selected'; ?>>PRESIDÊNCIA
                        </option>
                        <option value="dir-admin" <?php if ($setor == 'dir-admin')
                            echo 'selected'; ?>>DIR. ADMIN</option>
                        <option value="financeiro" <?php if ($setor == 'financeiro')
                            echo 'selected'; ?>>FINANCEIRO
                        </option>
                        <option value="institucional" <?php if ($setor == 'institucional')
                            echo 'selected'; ?>>
                            INSTITUCIONAL</option>
                        <option value="obras" <?php if ($setor == 'obras')
                            echo 'selected'; ?>>OBRAS</option>
                        <option value="secretaria" <?php if ($setor == 'secretaria')
                            echo 'selected'; ?>>SECRETARIA
                        </option>
                        <option value="rh" <?php if ($setor == 'rh')
                            echo 'selected'; ?>>RH</option>
                        <option value="recepcao" <?php if ($setor == 'recepcao')
                            echo 'selected'; ?>>RECEPÇÃO</option>
                        <option value="equoterapia" <?php if ($setor == 'equoterapia')
                            echo 'selected'; ?>>EQUOTERAPIA
                        </option>
                        <option value="psicologia" <?php if ($setor == 'psicologia')
                            echo 'selected'; ?>>PSICOLOGIA
                        </option>
                        <option value="gti" <?php if ($setor == 'gti')
                            echo 'selected'; ?>>GTI</option>
                    </select>
                </div>
                <div class="input-problema">
                    <label for="problema">Problema:</label>
                    <select name="problema" id="problema">
                        <option value="">Selecione</option>
                        <option value="hardware" <?php if ($problema == 'hardware')
                            echo 'selected'; ?>>HARDWARE
                        </option>
                        <option value="internet" <?php if ($problema == 'internet')
                            echo 'selected'; ?>>INTERNET
                        </option>
                        <option value="impressao" <?php if ($problema == 'impressao')
                            echo 'selected'; ?>>IMPRESSÃO
                        </option>
                        <option value="sistema" <?php if ($problema == 'sistema')
                            echo 'selected'; ?>>SISTEMA</option>
                        <option value="aplicativo" <?php if ($problema == 'aplicativo')
                            echo 'selected'; ?>>APLICATIVO
                        </option>
                        <option value="acesso-predial" <?php if ($problema == 'acesso-predial')
                            echo 'selected'; ?>>
                            ACESSO PREDIAL</option>
                        <option value="pasta-arquivos-compartilhados" <?php if ($problema == 'pasta-arquivos-compartilhados')
                            echo 'selected'; ?>>PASTA/ARQUIVOS
                            COMPARTILHADOS</option>
                        <option value="celular" <?php if ($problema == 'celular')
                            echo 'selected'; ?>>CELULAR</option>
                        <option value="rede" <?php if ($problema == 'rede')
                            echo 'selected'; ?>>REDE</option>
                        <option value="outros" <?php if ($problema == 'outros')
                            echo 'selected'; ?>>OUTROS</option>
                    </select>
                </div>

                <div class="input-desc-problem">
                    <fieldset>
                        <legend>Descrição do Problema:</legend>
                        <textarea name="desc-problem" id="desc-problem"
                            placeholder="Digite o problema da forma mais detalhada possível"><?php echo $descproblem; ?></textarea>
                    </fieldset>
                </div>

                <button class="btn"><a href="./index.php">Voltar</a></button>
                <button class="btn" name="submit" type="submit" id="submit">Enviar</button>
            </form>
        </div>
    </div>
</body>

</html>