<?php
include("valida.php");

?>



<html>
 <head>
 </head>
<body>
    

<div style="width: 800px; margin: 0 auto;">
    <div style = "min-height: 100px; width: 100%; background-color: #4CAF50;" >
    <span style="padding-left: 10px; ">Olá <?=$_SESSION['NOME'];?> </span>  
    <span style="background-color: blue; margin-right:10px;"> <a href="sair.php"><font color="black">SAIR</font></a></span>
</div>


    <div id="menu" style="width: 200px; float: left; background-color: #f4f4f4; min-height: 400px;">
        <h2>MENU</h2>
        <p><a href="cadastro_de_usuario.php">cadastro de usuario</a></p>
        <p>item 2</p>
        <p>item 3</p>
    </div>
    
    <div style="float:left; background-color: #ddd; min-height: 400px; width: 600px;" >
         <h2>Conteúdo</h2>
         <p>Cadastro de usuarios para alugar</p>
      </div>
    </div>
</div> 
 
</body>
</html>