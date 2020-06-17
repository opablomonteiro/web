<?php
  
  Class Voo{

    private $id_Voo;
    private $cidOrigem_Voo;
    private $cidDestino_Voo;
    private $numero_Voo;
    private $valor_Voo;
    private $prefixo_Aero;
    
    function __construct($id_Voo,$cidOrigem_Voo,$cidDestino_Voo,$numero_Voo,$valor_Voo,$prefixo_Aero){
	$this->id_Voo = $id_Voo;        
	$this->cidOrigem_Voo = $cidOrigem_Voo;
        $this->cidDestino_Voo = $cidDestino_Voo;
        $this->numero_Voo = $numero_Voo;
        $this->valor_Voo = $valor_Voo;
        $this->prefixo_Aero = $prefixo_Aero;
    }
      
    public function getId_Voo()
    {
        return $this->id_Voo;
    }

    public function setId_Voo($id_Voo)
    {
        $this->id_Voo = $id_Voo;

        return $this;
    }

    public function getCidOrigem_Voo()
    {
        return $this->cidOrigem_Voo;
    }

    public function setCidOrigem_Voo($cidOrigem_Voo)
    {
        $this->cidOrigem_Voo = $cidOrigem_Voo;

        return $this;
    }

    public function getCidDestino_Voo()
    {
        return $this->cidDestino_Voo;
    }

    public function setCidDestino_Voo($cidDestino_Voo)
    {
        $this->cidDestino_Voo = $cidDestino_Voo;

        return $this;
    }

    public function getNumero_Voo()
    {
        return $this->numero_Voo;
    }

    public function setNumero_Voo($numero_Voo)
    {
        $this->numero_Voo = $numero_Voo;

        return $this;
    }

    public function getValor_Voo()
    {
        return $this->valor_Voo;
    }


    public function setValor_Voo($valor_Voo)
    {
        $this->valor_Voo = $valor_Voo;

        return $this;
    }


    public function getPrefixo_Aero()
    {
        return $this->prefixo_Aero;
    }

    public function setPrefixo_Aero(Aeronave $prefixo_Aero)
    {
        $this->prefixo_Aero = $prefixo_Aero;

        return $this;
    }
  }


?>