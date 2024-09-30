<?php
include("conexao.php");

$nome = $_POST["NOME"];
$cpf = $_POST["CPF"];
$senha = $_POST["SENHA"];

$sql = "SELECT NOME FROM usuários WHERE CPF=? and SENHA=? ";
$stmt = $conn->prepare($sql);

if($stmt) {
    $stmt->bind_param("ss", $cpf, $senha);
    $stmt->execute();
    $stmt->bind_result($nome);
    $stmt->fetch();

    if($nome != ''){
        session_start();
        $_SESSION["CPF"] = $cpf;
        $_SESSION["SENHA"] = $senha;
        $_SESSION["NOME"] = $nome;
        header("location: principal.php");
    }else{
        die("senhha incorreta");
    }
}

?>