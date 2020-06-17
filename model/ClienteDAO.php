<?php
require "ConnectionFactory.php";
class ClienteDAO{
    public function cadastrar($cliente){
      try{
        $minhaConexao = ConnectionFactory::getconnection();
        //codigo para conetar e incluir no banco
        $sql = $minhaConexao->prepare("insert into web.tb_cliente (cpf_Cli, nome_Cli, dtNasc_Cli, email_Cli, telefone_Cli)
         values (:cpf_Cli, :nome_Cli, :dtNasc_Cli, :email_Cli, :telefone_Cli)");
        $sql->bindParam("cpf_Cli",$cpf_Cli);
        $sql->bindParam("nome_Cli",$nome_Cli);
        $sql->bindParam("dtNasc_Cli",$dtNasc_Cli);
        $sql->bindParam("email_Cli",$email_Cli);
        $sql->bindParam("telefone_Cli",$telefone_Cli);
        $cpf = $cliente->getCpf_Cli();
        $nome = $cliente->getNome_Cli();
        $email = $cliente->getEmail_Cli();
        $data_nascimento = $cliente->getDtNasc_Cli();
        $telefone = $cliente->getTelefone_Cli();
        $sql->execute();
         
        return $sql->rowCount(); //incluido com sucesso
      }
      catch(PDOException $e) {
        //fazer o through e tirar esse echo
        //echo $e->getMessage();
        echo "entrou no catch".$e->getmessage();
        return 0; 
      }
      $minhaConexao = null;
    }
}
?>