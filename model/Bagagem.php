<?php
  
  Class Bagagem{


    private $id_Bag;
    private $dimensao_Bag;
    private $peso_Bag;
    private $caract_Bag;
    private $codigo_Psg;
   
    function __construct($id_Bag,$dimensao_Bag,$peso_Bag,$caract_Bag,$codigo_Psg){
	    $this->id_Bag = $id_Bag;        
	    $this->dimensao_Bag = $dimensao_Bag;
        $this->peso_Bag = $peso_Bag;
        $this->caract_Bag = $caract_Bag;
        $this->codigo_Psg = $codigo_Psg;
    }   
    
    public function despachar_Bag(){}
    
    
    public function getId_Bag()
    {
        return $this->id_Bag;
    }

    
    public function setId_Bag($id_Bag)
    {
        $this->id_Bag = $id_Bag;

        return $this;
    }

    
    public function getDimensao_Bag()
    {
        return $this->dimensao_Bag;
    }

    
    public function setDimensao_Bag($dimensao_Bag)
    {
        $this->dimensao_Bag = $dimensao_Bag;

        return $this;
    }

    
    public function getPeso_Bag()
    {
        return $this->peso_Bag;
    }

    
    public function setPeso_Bag($peso_Bag)
    {
        $this->peso_Bag = $peso_Bag;

        return $this;
    }

    
    public function getCaract_Bag()
    {
        return $this->caract_Bag;
    }

    public function setCaract_Bag($caract_Bag)
    {
        $this->caract_Bag = $caract_Bag;

        return $this;
    }

    public function getCodigo_Psg()
    {
        return $this->codigo_Psg;
    }
 
    public function setCodigo_Psg($codigo_Psg)
    {
        $this->codigo_Psg = $codigo_Psg;

        return $this;
    }
  }


?>