<?php
include("conexao.php");

$cpf = $_POST["CPF"];
$senha = $_POST["SENHA"];

$sql = "select NOME from usuários where CPF = '$cpf' and senha = '$senha' ";
$resultado = $conn -> query ($sql);
$row = $resultado -> fetch_assoc();

if(isset($row) && $row["NOME"] != ''){
    session_start();
    $_SESSION["CPF"] = $cpf;
    $_SESSION["SENHA"] = $senha;
    $_SESSION["NOME"] = $row ["NOME"];

    header("Location: gravar.php");
} else {
    die ("Senha incorreta seu energumeno");
}
 
?>