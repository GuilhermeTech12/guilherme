<?php
include("conexao.php");

$cpf = $_POST["CPF"];

$sql = "delete from usuários where CPF=? ";
$stmt = $conn->prepare($sql);

if($stmt) {
    $stmt->bind_param("s", $cpf);
    $stmt->execute();

        header("location: cadastro_de_usuario.php");
    }
?>