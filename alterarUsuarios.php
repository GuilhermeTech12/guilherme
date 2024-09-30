<?php
include("conexao.php");

$cpf = $_POST["CPF"];
$nome = $_POST["NOME"];
$senha = $_POST["SENHA"];
$cpfAnterior = $_POST["cpfAnterior"];

$sql = "update usuários set CPF = '$cpf',
                            SENHA = '$senha',
                            NOME = '$nome'
        where CPF= '$cpfAnterior'";                    
if(!$resultado = $conn->query($sql)){
    die("erro");
}
header("Location:cadastro_de_usuario.php");
?>