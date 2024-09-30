<?php

session_start();

if(!isset($_SESSION['NOME']) || $_SESSION['NOME'] == ''){
    session_destroy();
header("location: index.php");
}

?>