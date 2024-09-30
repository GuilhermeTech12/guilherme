<?php
include("conexao.php");

$cpf = $_POST["CPF"];
$nome = $_POST["NOME"];
$senha = $_POST["SENHA"];
$cpfAnterior = $_POST["cpfAnterior"];

$sql = "update usuários set CPF = ?,
                            SENHA = ?,
                            NOME = ?
        where CPF= ?";                    
        $stmt = $conn->prepare($sql);
            
        if($stmt) {
            $stmt->bind_param("ss", $cpf, $senha);
            $stmt->execute();
}
header("Location:cadastro_de_usuario.php");
?>