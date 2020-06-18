<?php
  
  require_once '..\model\ReclamacaoDAO.php';
  Class Reclamacao{


    private $id_Rec;
    private $data_Rec;
    private $status_Rec;
    private $descri_Rec;
    private $id_Psg;
   
    /*function __construct($id_Rec,$data_Rec,$status_Rec,$descri_Rec,$id_Psg){
	$this->id_Rec = $id_Rec;        
	$this->data_Rec = $data_Rec;
        $this->status_Rec = $status_Rec;
        $this->descri_Rec = $descri_Rec;
        $this->id_Pid_Psg = $id_Psg;
    } */

    public function cadastrar_Rec(){
        $minha_rec = new ReclamacaoDAO();
        return $minha_rec->criar($this);
    }
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

    public function getId_Psg()
    {
        return $this->id_Psg;
    }

    public function setId_Psg(Passagem $id_Psg)
    {
        $this->id_Psg = $id_Psg;

        return $this;
    }
       
     }    
    

?>