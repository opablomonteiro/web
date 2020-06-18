<?php
require_once "ConnectionFactory.php";
class VooDAO{
    public function consultar($voo){
      try{
        $minhaConexao = ConnectionFactory::getconnection();
        //codigo para conetar e incluir no banco
        $sql = $minhaConexao->prepare("select * FROM web.voo");
        $sql->execute();
        $voos = array();
        $cont = 0;
        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            session_start();
            $voo->setNumero_Voo($dado['voo']);
            $voo->setCidOrigem_Voo($dado['cidade_origem']);
            $voo->setCidDestino_Voo($dado['cidade_destino']);
            $voo->setValor_Voo($dado['valor']);
            $voos[$cont] = $voo;
            $cont = $cont + 1;
            return $voos;
        }
        else{
            return false;
        }
        
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