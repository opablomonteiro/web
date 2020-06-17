<?php
 Class Programacao{
    private $id_Prog;
    private $dtOrigem_Prog;
    private $hrOrigem_Prog;
    private $dtDestino_Prog;
    private $hrDestino_Prog;
    private $id_Voo;

    function __construct($id_Prog,$dtOrigem_Prog,$hrOrigem_Prog,$dtDestino_Prog,$hrDestino_Prog,$id_Voo){
	$this->id_Prog = $id_Prog;        
	$this->dtOrigem_Prog = $dtOrigem_Prog;
        $this->hrOrigem_Prog = $hrOrigem_Prog;
        $this->dtDestino_Prog = $dtDestino_Prog;
        $this->hrDestino_Prog = $hrDestino_Prog;
        $this->id_Voo = $id_Voo;
    }

    public function getId_Prog()
    {
        return $this->id_Prog;
    }

    public function setId_Prog($id_Prog)
    {
        $this->id_Prog = $id_Prog;

        return $this;
    }

    public function getDtOrigem_Prog()
    {
        return $this->dtOrigem_Prog;
    }

    public function setDtOrigem_Prog($dtOrigem_Prog)
    {
        $this->dtOrigem_Prog = $dtOrigem_Prog;

        return $this;
    }

    public function getHrOrigem_Prog()
    {
        return $this->hrOrigem_Prog;
    }

    public function setHrOrigem_Prog($hrOrigem_Prog)
    {
        $this->hrOrigem_Prog = $hrOrigem_Prog;

        return $this;
    }

    public function getDtDestino_Prog()
    {
        return $this->dtDestino_Prog;
    }

    public function setDtDestino_Prog($dtDestino_Prog)
    {
        $this->dtDestino_Prog = $dtDestino_Prog;

        return $this;
    }

    public function getHrDestino_Prog()
    {
        return $this->hrDestino_Prog;
    }

    public function setHrDestino_Prog($hrDestino_Prog)
    {
        $this->hrDestino_Prog = $hrDestino_Prog;

        return $this;
    }

    public function getId_Voo()
    {
        return $this->id_Voo;
    }

    public function setId_Voo(Voo $id_Voo)
    {
        $this->id_Voo = $id_Voo;

        return $this;
    }
 }


?>