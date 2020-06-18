<?php
require_once "ConnectionFactory.php";
class PassagemDAO{
    public function cadastrar($passagem){
      try{
        $minhaConexao = ConnectionFactory::getconnection();
        //codigo para conetar e incluir no banco
        $sql = $minhaConexao->prepare("insert into web.passagem (valor, checkin, id_cliente, id_programacao)
        values (:valor, :checkin, :id_cliente , :id_programacao)");
        $id_Cli = $passagem->getId_Cli();
        $sql->bindParam("valor", 2500);
        $sql->bindParam("id_programacao", 8);
        $sql->bindParam("checkin", 0);
        $sql->bindParam("id_cliente", $id_Cli);
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