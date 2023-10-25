<?php
session_start();

require_once "includes/conexao.php";

$nome = $_POST["txtNome"];
$cpf = $_POST["txtCpf"];
$tel = $_POST["txtTel"];
$email = $_POST["txtEmail"];
$uf = $_POST["UF"];
$pass = $_POST["senha"];
$cPass = $_POST["confSenha"];
$pass = hash("sha512", md5($pass));
$cPass = hash("sha512", md5($cPass));

$query = "INSERT into usuario (nome_usuario, cpf_usuario, tel_usuario, email_usuario, uf_usuario, senha_usuario, confsenha_usuario) VALUES ('$nome', '$cpf', '$tel', '$email', '$uf', '$pass', '$cPass')";

$sql = mysqli_query($conn,$query);
$n = mysqli_affected_rows($conn);

if ($pass == $cPass) {
    $_SESSION['erro'] = 0;
    header("location:index.php");
} else {
    $_SESSION['erro'] = 1;
    header("location:cadastro.php");
}
