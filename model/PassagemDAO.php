<?php
require "ConnectionFactory.php";
class PassagemDAO{
    public function cadastrar($passagem){
      try{
        $minhaConexao = ConnectionFactory::getconnection();
        //codigo para conetar e incluir no banco
        $sql = $minhaConexao->prepare("insert into web.passagem (tipo_Psg, valor, checkin, id_cliente, id_programacao)
         values (:cpf_Cli, :nome_Cli, :dtNasc_Cli, :email_Cli, :telefone_Cli)");
        $sql->bindParam("tipo_Psg",$tipo_Psg);
        $sql->bindParam("valor",$valor_Psg);
        $sql->bindParam("checkin",$checkin_Psg);
        $sql->bindParam("id_cliente",$cpf_Cli);
        $sql->bindParam("id_programacao",$id_Prog);
        $tipo_Psg = $passagem->getTipo_Psg();
        $valor_Psg = $passagem->getValor_Psg();
        $checkin_Psg = $passagem->getCheckin_Psg();
        $cpf_Cli = $passagem->getCpf_Cli();
        $id_Prog = $passagem->getId_Prog();
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
    public function checkin($passagem){
      try{
        $minhaConexao = ConnectionFactory::getconnection();
        //codigo para conetar e incluir no banco
        $sql = $minhaConexao->prepare("UPDATE web.passagem SET checkin = 1 WHERE id_passagem = :id_passagem");
        $sql->bindParam("id_passagem",$codigo_Psg);
        $codigo_Psg = $passagem->getCodigo_Psg();
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