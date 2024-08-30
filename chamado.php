<?php
session_start();
include("conexao.php");

$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$responsavel = mysqli_real_escape_string($conexao, trim($_POST['responsavel']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$orgao = mysqli_real_escape_string($conexao, trim($_POST['orgao']));
$setor = mysqli_real_escape_string($conexao, trim($_POST['setor']));
$problema = mysqli_real_escape_string($conexao, trim($_POST['problema']));
$descproblem = mysqli_real_escape_string($conexao, trim($_POST['desc-problem']));

$sql = "INSERT INTO chamados (`email`, `responsavel`, `telefone`, `orgao`, `setor`, `problema`, `desc-problem`, `data-abertura`) VALUES ('$email', '$responsavel', '$telefone', '$orgao', '$setor', '$problema', '$descproblem', NOW())";

if($conexao->query($sql) === true) {
    $_SESSION['status_chamado'] = true;
}
$conexao->close();
header('Location: solicitacao.php');
exit;
?>