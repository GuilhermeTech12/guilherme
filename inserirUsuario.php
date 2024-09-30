<?php
include("conexao.php");

$cpf = $_POST["CPF"];
$nome = $_POST["NOME"];
$senha = $_POST["SENHA"];

$sql = "insert into usuarios (CPF,NOME,SENHA) values('$cpf','$nome','$senha')";
if(!$resultado = $conn->query($sql)){
    die("erro");
}
header("Location: cadastro_de_usuario.php");