<?php
require_once "ConnectionFactory.php";
class LoginDAO{

public function login($nome){

        $minhaConexao = ConnectionFactory::getconnection();
        //codigo para conetar e incluir no banco
        $sql = $minhaConexao->prepare("select id_cliente,nome,telefone,email,cpf from web.cliente where nome = :nome");
        $sql->bindParam("nome",$nome);
        
         $sql->execute();

         if($sql->rowCount() > 0){
             $dado = $sql->fetch();
             session_start();
             $_SESSION['id_usuario'] = $dado['id_usuario'];
             $_SESSION['nome_cliente'] = $dado['nome'];
             $_SESSION['telefone_cliente'] = $dado['telefone'];
             $_SESSION['cpf_cliente'] = $dado['cpf'];
             $_SESSION['email_cliente'] = $dado['email'];
             return true;
         }
         else{
             return false;
         }


}
}
?>