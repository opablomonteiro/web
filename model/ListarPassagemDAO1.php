<?php

session_start();
$id = $_SESSION['id_usuario'];
require_once "ConnectionFactory.php";

class ListarPassagemDAO{

public function listar(){

        try{$minhaConexao = ConnectionFactory::getconnection();
        //codigo para conetar e incluir no banco
        $sql = $minhaConexao->prepare("select id_passagem,valor,checkin from web.passagem where id_cliente = :id");
        $sql->bindParam("id",$id);
        
         $sql->execute();

        $sql->setFetchMode(PDO::FETCH_ASSOC);
        $vet = array();
        $i=0;
        
        while ($linha = $sql->fetch(PDO::FETCH_ASSOC)) {
          $vet[$i]=array($linha['id_usuario'],$linha['valor'],$linha['checkin']);
          $i++;
        }
        
        $passagem = $vet;
        return true;
    }
    catch(PDOException $e) {
        //fazer o through e tirar esse echo
        //echo $e->getMessage();
        echo "entrou no catch".$e->getmessage();
        return false; 
      }
      $minhaConexao = null;
    }

}

?>