<?php
  
  require "ClienteDAO.php";
  Class Cliente{

    private $cpf_Cli;
    private $nome_Cli;
    private $dtNasc_Cli;
    private $email_Cli;
    private $telefone_Cli;
    
    
      
    public function cadastrar_Cli(){
        $cliente = new ClienteDAO();
        return $cliente->cadastrar($this);
    }
    
    public function alterar_Cli(){}
    
   
    public function getCpf_Cli()
    {
        return $this->cpf_Cli;
    }

     
    public function setCpf_Cli($cpf_Cli)
    {
        $this->cpf_Cli = $cpf_Cli;

        return $this;
    }

    
    public function getNome_Cli()
    {
        return $this->nome_Cli;
    }

    
    public function setNome_Cli($nome_Cli)
    {
        $this->nome_Cli = $nome_Cli;

        return $this;
    }

    
    public function getDtNasc_Cli()
    {
        return $this->dtNasc_Cli;
    }

   
    public function setDtNasc_Cli($dtNasc_Cli)
    {
        $this->dtNasc_Cli = $dtNasc_Cli;

        return $this;
    }

    
    public function getEmail_Cli()
    {
        return $this->email_Cli;
    }

    
    public function setEmail_Cli($email_Cli)
    {
        $this->email_Cli = $email_Cli;

        return $this;
    }

    
    public function getTelefone_Cli()
    {
        return $this->telefone_Cli;
    }

    public function setTelefone_Cli($telefone_Cli)
    {
        $this->telefone_Cli = $telefone_Cli;

        return $this;
    }
  }


?>