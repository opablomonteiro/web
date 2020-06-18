<?php

 require_once '..\model\ListarPassagemDAO.php';
 require "..\model\PassagemDAO.php";
  Class Passagem{
    
    private $codigo_Psg;
    private $tipo_Psg;
    private $valor_Psg;
    private $checkin_Psg;
    private $id_Prog;
    private $id_Cli;
    private $id_Pag;
    private $lista_psg = array();


    

    public function listar_psg(){
        $passagem = new ListarPassagemDAO();
        return $passagem->listar($this);
    }

    public function cadastrar_Psg(){
        $passagem = new PassagemDAO();
        return $passagem->cadastrar($this);
    }


    public function setLista_psg($array){
        $this->lista_psg=$array;
    }

    public function getLista_psg(){
        return $this->lista_psg;
    }

    public function calcular_Valor(){}

    public function cancelar_Passagem(){}

    public function checkin(){}

    public function getCodigo_Psg()
    {
        return $this->codigo_Psg;
    }

    public function setCodigo_Psg($codigo_Psg)
    {
        $this->codigo_Psg = $codigo_Psg;

        return $this;
    }

    public function getTipo_Psg()
    {
        return $this->tipo_Psg;
    }

    public function setTipo_Psg($tipo_Psg)
    {
        $this->tipo_Psg = $tipo_Psg;

        return $this;
    }

    public function getValor_Psg()
    {
        return $this->valor_Psg;
    }

    public function setValor_Psg($valor_Psg)
    {
        $this->valor_Psg = $valor_Psg;

        return $this;
    }

    public function getCheckin_Psg()
    {
        return $this->checkin_Psg;
    }

    public function setCheckin_Psg($checkin_Psg)
    {
        $this->checkin_Psg = $checkin_Psg;

        return $this;
    }

    public function getId_Prog()
    {
        return $this->id_Prog;
    }

    public function setId_Prog(Programacao $id_Prog)
    {
        $this->id_Prog = $id_Prog;

        return $this;
    }

    public function getId_Cli()
    {
        return $this->id_Cli;
    }

    public function setId_Cli(Cliente $id_Cli)
    {
        $this->id_Cli = $id_Cli;

        return $this;
    }

    public function getId_Pag()
    {
        return $this->id_Pag;
    }

    public function setId_Pag(Pagamento $id_Pag)
    {
        $this->id_Pag = $id_Pag;

        return $this;
    }
  }
   
?>