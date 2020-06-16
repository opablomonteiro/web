<?php
session_start();

$acao =  $_POST["acao"];
require "..\model\cliente.php";
$cliente = new Cliente();
if ($acao=="cadastrar"){
      $cliente->setNome_Cli($_POST["nome"]);
      $cliente->setDtNasc_Cli($_POST["data"]);
      $cliente->setEmail_Cli($_POST["email"]);
      $cliente->setTelefone_Cli($_POST["telefone"]);
      $cliente->setCpf_Cli($_POST["cpf"]);
      $resposta = $cliente->cadastrar_Cli();
      if ( $resposta > 0){
        header('Location: ..\view\perfil.html'); 
    }
    else
        header('Location: ..\view\Erro.php');  
    }
?> 