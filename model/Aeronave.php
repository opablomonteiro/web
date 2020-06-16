<?php
  
  Class Aeronave{


    private $prefixo_Aero;
    private $capacEco_Aero;
    private $capacPri_Aero;
   
    function __construct($prefixo_Aero,$capacEco_Aero,$capacPri_Aero){
	    $this->prefixo_Aero = $prefixo_Aero;        
	    $this->capacEco_Aero = $capacEco_Aero;
        $this->capacPri_Aero = $capacPri_Aero;
    }   

    public function getPrefixo_Aero()
    {
        return $this->prefixo_Aero;
    }

    public function setPrefixo_Aero($prefixo_Aero)
    {
        $this->prefixo_Aero = $prefixo_Aero;

        return $this;
    }

    public function getCapacEco_Aero()
    {
        return $this->capacEco_Aero;
    }

    public function setCapacEco_Aero($capacEco_Aero)
    {
        $this->capacEco_Aero = $capacEco_Aero;

        return $this;
    }

    public function getCapacPri_Aero()
    {
        return $this->capacPri_Aero;
    }

    public function setCapacPri_Aero($capacPri_Aero)
    {
        $this->capacPri_Aero = $capacPri_Aero;

        return $this;
    }
  }


?>