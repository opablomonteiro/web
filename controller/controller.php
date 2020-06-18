<?php
session_start();

$acao =  $_POST["acao"];
require "..\model\cliente.php";
require "..\model\pagamento.php";
require "..\model\loginDAO.php";
require "..\model\passagem.php";
require "..\model\Reclamacao.php";
require "..\model\LoginDAO.php";
$cliente = new Cliente();
$pagamento = new Pagamento();
$login = new loginDAO();
$passagem = new Passagem();
$reclamacao = new Reclamacao();
if ($acao=="cadastrar"){
      $cliente->setNome_Cli($_POST["nome"]);
      $cliente->setDtNasc_Cli($_POST["data"]);
      $cliente->setEmail_Cli($_POST["email"]);
      $cliente->setTelefone_Cli($_POST["telefone"]);
      $cliente->setCpf_Cli($_POST["cpf"]);
      $resposta = $cliente->cadastrar_Cli();
      if ( $resposta > 0){
        header('Location: ..\view\perfil.php'); 
    }
    else
        header('Location: ..\view\Erro.php');  
    }
else if ($acao == "login"){
      $resposta = $login->login($_POST["nome"]);

      if($resposta == true){
          
        $passagem->listar_psg();
        $_SESSION["lista"] = $passagem->getLista_psg();
        
        header('Location: ..\view\perfil.php');
      }

      else
        header('Location: ..\view\login.php'); 
}
else if ($acao == "consultar_Voo"){
  $resposta = $voo->consultar();
  $_SESSION['voos'] = $resposta;
        
}   
else if($acao == "criar_reclamacao"){
  $reclamacao->setId_Rec($_POST["codpassr"]);
  $reclamacao->setData_Rec($_POST["dataoco"]);
  $reclamacao->setDescri_Rec($_POST["descricao"]);
  $resposta = $reclamacao->cadastrar_rec();
  if ($resposta > 0)
    header('Location: ..\view\consultarReclamcao.php');
  else
    header('Location: ..\view\reclamacao.php');
}
else if($acao == "cadastrar_Psg"){
  $passagem->setId_Cli($_POST["nome"]);//alterar nome do post
  $resposta = $passagem->cadastrar_Psg();

}   
        
    
?> 