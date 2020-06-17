<?php
require "ConnectionFactory.php";
class PagamentoDAO{
    public function cadastrar($pagamento){
      try{
        $minhaConexao = ConnectionFactory::getconnection();
        //codigo para conetar e incluir no banco
        $sql = $minhaConexao->prepare("insert into web.pagamento (parcelas, parcelas_pagas)
         values (:parcelas, :parcelas_pagas)");
        $sql->bindParam("parcelas",$totalParc_Pag);
        $sql->bindParam("parcelas_pagas",$pagoParc_Pag);
        $totalParc_Pag = $pagamento->getTotalParc_Pag();
        $pagoParc_Pag = $pagamento->getPagoParc_Pag();
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