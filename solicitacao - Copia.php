<?php
if(isset($_POST['submit'])){

    include_once("conexao.php");

    $email = $_POST['email'];
    $responsavel = $_POST['responsavel'];
    $telefone = $_POST['telefone'];
    $orgao = $_POST['orgao'];
    $setor = $_POST['setor'];
    $problema = $_POST['problema'];
    $descproblem = $_POST['desc-problem'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera o valor selecionado
        $orgaoSelecionado = $_POST['orgao'];
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera o valor selecionado
        $setorSelecionado = $_POST['setor'];
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera o valor selecionado
        $problemaSelecionado = $_POST['problema'];
    }

    $result = mysqli_query($conexao, "INSERT INTO `chamados`.`chamados` (`email`, `responsavel`, `telefone`, `orgao`, `setor`, `problema`, `desc-problem`, `data-abertura`) VALUES ('$email', '$responsavel', '$telefone', '$orgaoSelecionado', '$setorSelecionado', '$problemaSelecionado', '$descproblem', NOW())");
    
    if (mysqli_query($conexao, $result)) {
        echo "<script>alert('Alterado com sucesso!');</script>";
    } else {
        echo "<script>alert('Alterado com sucesso!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <h2>Solicitação de Chamados para Suporte (TI)</h2>
        <div class="form">
            <form action="solicitacao.php" method="POST">
                <div class="input-email">
                    <label for="" >Email:</label>
                    <input placeholder="Digite seu e-mail" name="email" required id="email" type="email">
                </div>
                <div class="input-responsavel">
                    <label for="">Responsável:</label>
                    <input placeholder="Nome do responsável" name="responsavel" type="text" id="responsavel">
                </div>
                <div class="input-celular">
                    <label for="">Telefone/Celular:</label>
                    <input placeholder="Número de telefone/celular do responsável" name="telefone" type="tel" name="" id="telefone">
                </div>
                <div class="input-orgao">
                    <label for="">Órgão:</label>
                    <select id="orgao" name="orgao">
                        <option name="orgao" value="">Selecione</option>   
                        <option name="orgao" value="das">DAS</option>
                        <option name="orgao" value="fcas">FCAS</option>
                    </select>
                </div>
                <div class="input-setor">
                    <label for="">Setor:</label>
                    <select name="setor" id="setor">
                        <option name="setor" value="">Selecione</option>
                        <option name="setor" value="administrativo">ADMINISTRATIVO</option>
                        <option name="setor" value="almox">ALMOX</option>
                        <option name="setor" value="aprov">APROV</option>
                        <option name="setor" value="atendimento-ao-contribuinte">ATENDIMENTO AO CONTRIBUINTE</option>
                        <option name="setor" value="casa-dos-veteranos">CASA DOS VETERANOS</option>
                        <option name="setor" value="com-ti">COM. TI</option>
                        <option name="setor" value="controladoria">CONTROLADORIA</option>
                        <option name="setor" value="compras">COMPRAS</option>
                        <option name="setor" value="consignado">CONSIGNADO</option>
                        <option name="setor" value="consultorios">CONSULTÓRIOS</option>
                        <option name="setor" value="ctpm">CTPM</option>
                        <option name="setor" value="dasi">DASI</option>
                        <option name="setor" value="dir-financ">DIR. FINANC</option>
                        <option name="setor" value="digeaf">DIGEAF</option>
                        <option name="setor" value="digep">DIGEP</option>
                        <option name="setor" value="diplan">DIPLAN</option>
                        <option name="setor" value="projetos">PROJETOS</option>
                        <option name="setor" value="juridico">JURÍDICO</option>
                        <option name="setor" value="ti">TI</option>
                        <option name="setor" value="seas">SEAS</option>
                        <option name="setor" value="neti">NETI</option>
                        <option name="setor" value="nadeq">NADEQ</option>
                        <option name="setor" value="htpm">HTPM</option>
                        <option name="setor" value="patrimonio">PATRIMÔNIO</option>
                        <option name="setor" value="transp">TRANSP</option>
                        <option name="setor" value="seconte">SECONTE</option>
                        <option name="setor" value="subchefe">SUBCHEFE</option>
                        <option name="setor" value="presidencia">PRESIDÊNCIA</option>
                        <option name="setor" value="dir-admin">DIR. ADMIN</option>
                        <option name="setor" value="financeiro">FINANCEIRO</option>
                        <option name="setor" value="institucional">INSTITUCIONAL</option>
                        <option name="setor" value="obras">OBRAS</option>
                        <option name="setor" value="secretaria">SECRETARIA</option>
                        <option name="setor" value="rh">RH</option>
                        <option name="setor" value="recepcao">RECEPÇÃO</option>
                        <option name="setor" value="equoterapia">EQUOTERAPIA</option>
                        <option name="setor" value="psicologia">PSICOLOGIA</option>
                        <option name="setor" value="gti">GTI</option>
                    </select>
                </div>
                <div class="input-problema">
                    <label for="">Problema:</label>
                    <select name="problema" id="problema">    
                        <option name="problema" value="">Selecione</option>       
                        <option name="problema" value="hardware">HARDWARE</option>
                        <option name="problema" value="internet">INTERNET</option>
                        <option name="problema" value="impressao">IMPRESSÃO</option>
                        <option name="problema" value="sistema">SISTEMA</option>
                        <option name="problema" value="aplicativo">APLICATIVO</option>
                        <option name="problema" value="acesso-predial">ACESSO PREDIAL</option>
                        <option name="problema" value="pasta-arquivos-compartilhados">PASTA/ARQUIVOS COMPARTILHADOS</option>
                        <option name="problema" value="calular">CELULAR</option>
                        <option name="problema" value="rede">REDE</option>
                        <option name="problema" value="outros">OUTROS</option>
                    </select>
                </div>
                <div class="input-desc-problem">
                    <fieldset>
                        <legend>Descrição do Problema:</legend>
                        <textarea name="desc-problem" id="desc-problem" placeholder="Digite o problema da forma mais detalhada possivel"></textarea>
                    </fieldset>
                </div>
                <button class="btn"><a href="./index.php">Voltar</a></button><button class="btn" name="submit" type="submit" id="submit">Enviar</button>    
            </form>
        </div>
</body>
</html>