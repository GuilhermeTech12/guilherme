<?php
include("conexao.php");

$nome = $_POST["NOME"];
$cpf = $_POST["CPF"];
$senha = $_POST["SENHA"];

$sql = "INSERT INTO usuários (CPF,NOME,SENHA) VALUES ('$cpf','$nome','$senha') ";
$resultado = $conn -> query ($sql);
header("Location:cadastro_de_usuario.php");
?>