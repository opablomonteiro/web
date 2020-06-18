<?php

require_once "ConnectionFactory.php";
class ReclamacaoDAO{
    public function criar($rec){
      try{
        $minhaConexao = ConnectionFactory::getconnection();
        //codigo para conetar e incluir no banco
        $sql = $minhaConexao->prepare("insert into web.reclamacao (data_reclamacao, descricao, situacao, id_passagem)
         values (:data_reclamacao, :descricao, :situacao , :id_passagem)");
        $sql->bindParam("data_reclamacao",$data_reclamacao);
        $sql->bindParam("descricao",$descricao);
        $sql->bindParam("situacao",$situacao);
        $sql->bindParam("id_passagem",$id_passagem);
        $data_reclamacao = $rec->getData_Rec();
        $descricao = $rec->getDescri_Rec();
        $situacao = "Em Andamento";
        $id_passagem = $rec->getId_Psg();
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