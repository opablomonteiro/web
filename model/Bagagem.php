<?php
  
  Class Bagagem{


    private $id_Bag;
    private $dimensao_Bag;
    private $peso_Bag;
    private $caract_Bag;
    private $id_Psg;
   
    function __construct($id_Bag,$dimensao_Bag,$peso_Bag,$caract_Bag,$id_Psg){
	$this->id_Bag = $id_Bag;        
	$this->dimensao_Bag = $dimensao_Bag;
        $this->peso_Bag = $peso_Bag;
        $this->caract_Bag = $caract_Bag;
        $this->id_Psg = $id_Psg;
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

    public function getId_Psg()
    {
        return $this->id_Psg;
    }
 
    public function setId_Psg($id_Psg)
    {
        $this->id_Psg = $id_Psg;

        return $this;
    }
  }


?>