<?php
require "ConnectionFactory.php";
class ClienteDAO{
    public function cadastrar($cliente){
      try{
        $minhaConexao = ConnectionFactory::getconnection();
        //codigo para conetar e incluir no banco
        $sql = $minhaConexao->prepare("insert into web.cliente (cpf, nome, email, data_nascimento,telefone)
         values (:cpf, :nome, :email , :data_nascimento, :telefone)");
        $sql->bindParam("cpf",$cpf);
        $sql->bindParam("nome",$nome);
        $sql->bindParam("email",$email);
        $sql->bindParam("data_nascimento",$data_nascimento);
        $sql->bindParam("telefone",$telefone);
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