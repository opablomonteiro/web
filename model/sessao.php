<?php

require "..\model\cliente.php";
class Sessao{

    private $cliente;


    public function fazerLogin($cpf_Cli){
        $cliente = new ClienteDAO();
        return $cliente->cadastrar($this);
    }
}
?>
