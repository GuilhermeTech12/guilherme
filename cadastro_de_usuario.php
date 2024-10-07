<?php
include("valida.php");
?>
<html>

<head>

</head>

<body>
    <div style="width: 800px; margin: 0 auto;">
        <div style="min-height: 100px; width: 100%; background-color: #4CAF50;">
            <span style="padding-left: 10px; ">Olá <?= $_SESSION['NOME']; ?> </span>
            <span style="background-color: blue; margin-right:10px;"> <a href="sair.php">
                    <font color="black">SAIR</font>
                </a></span>
        </div>


        <div id="menu" style="width: 200px; float: left; background-color: #f4f4f4; min-height: 400px;">
            <h2>MENU</h2>
            <p><a href="cadastro_de_usuario.php">cadastro de usuario</a></p>
            <p>item 2</p>
            <p>item 3</p>
        </div>

        <div style="float:left; background-color: #ddd; min-height: 400px; width: 600px;">
            <h2> Cadartro de usuário</h2>
            <form action="cadastro.php" method="post">
                NOME: <input type="text" name="NOME" id="NOME"><br>
                CPF: <input type="text" name="CPF" id="CPF">
                SENHA: <input type="password" name="SENHA" id="SENHA">
                <input type="submit" value="cadastro">
            </form>
            <br><br>
            <hr><br><br>
            <?php
            include("conexao.php");
            $sql = "SELECT NOME FROM usuários WHERE CPF=? and SENHA=? ";
            $stmt = $conn->prepare($sql);
            
            if($stmt) {
                $stmt->bind_param("ss", $cpf, $senha);
                $stmt->execute();
                $stmt->bind_result($nome);
                $stmt->fetch();
            
                
                }
                
            
            ?>
            <table>
                <tr>
                    <td>NOME</td>
                    <td>SENHA</td>
                    <td>CPF</td>
                    <td>alterar</td>
                    <td>apagar</td>
                </tr>
                <?php
                while ($row = $resultado->fetch_assoc()) {

                ?>
                    <tr>
                        <form method="post" action="alterarUsuarios.php">
                            <input type="hidden" name="cpfAnterior" value="<?= $row['CPF']; ?>">
                            <td><input type="text" name="NOME" value="<?= $row['NOME']; ?>"></td>
                            <td><input type="text" name="CPF" value="<?= $row['CPF']; ?>"></td>
                            <td><input type="text" name="SENHA" value="<?= $row['SENHA']; ?>"></td>
                            <td><input type="submit" value="alterar"></td>
                        </form>
                        <form method="post" action="apagarUsuario.php">
                        <input type="hidden" name="CPF" value="<?= $row['CPF']; ?>">
                        <td><input type="submit" value="apagar"></td>    
                        </form>
                    </tr>
                <?php
                }
                ?>
            </table>


        </div>
    </div>
    </div>


</body>

</html>