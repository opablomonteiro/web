<?php
  
  Class Reclamaçao{


    private $id_Rec;
    private $data_Rec;
    private $status_Rec;
    private $descri_Rec;
    private $codigo_Psg;
   
    function __construct($id_Rec,$data_Rec,$status_Rec,$descri_Rec,$codigo_Psg){
	$this->id_Rec = $id_Rec;        
	$this->data_Rec = $data_Rec;
        $this->status_Rec = $status_Rec;
        $this->descri_Rec = $descri_Rec;
        $this->codigo_Psg = $codigo_Psg;
    }

    public function cadastrar_Rec(){}
    public function alterar_Rec(){}
    public function arquivar_Rec(){}

    public function getId_Rec()
    {
        return $this->id_Rec;
    }

    public function setId_Rec($id_Rec)
    {
        $this->id_Rec = $id_Rec;

        return $this;
    }

    public function getData_Rec()
    {
        return $this->data_Rec;
    }

    public function setData_Rec($data_Rec)
    {
        $this->data_Rec = $data_Rec;

        return $this;
    }

    public function getStatus_Rec()
    {
        return $this->status_Rec;
    }

    public function setStatus_Rec($status_Rec)
    {
        $this->status_Rec = $status_Rec;

        return $this;
    }

    public function getDescri_Rec()
    {
        return $this->descri_Rec;
    }

    public function setDescri_Rec($descri_Rec)
    {
        $this->descri_Rec = $descri_Rec;

        return $this;
    }

    public function getCodigo_Psg()
    {
        return $this->codigo_Psg;
    }

    public function setCodigo_Psg(Passagem $codigo_Psg)
    {
        $this->codigo_Psg = $codigo_Psg;

        return $this;
    }
       
     }    
    

?>