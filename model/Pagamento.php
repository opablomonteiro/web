<?php
  
  Class Pagamento{


    private $id_Pag;
    private $totalParc_Pag;
    private $pagoParc_Pag;

    public function cadastrar_Pag(){
        $pagamento = new PagamentoDAO();
        return $pagamento->cadastrar($this);
    }
    
    public function getId_Pag()
    {
        return $this->id_Pag;
    }

    
    public function setId_Pag($id_Pag)
    {
        $this->id_Pag = $id_Pag;

        return $this;
    }

    
    public function getTotalParc_Pag()
    {
        return $this->totalParc_Pag;
    }

    
    public function setTotalParc_Pag($totalParc_Pag)
    {
        $this->totalParc_Pag = $totalParc_Pag;

        return $this;
    }

    
    public function getPagoParc_Pag()
    {
        return $this->pagoParc_Pag;
    }

    
    public function setPagoParc_Pag($pagoParc_Pag)
    {
        $this->pagoParc_Pag = $pagoParc_Pag;

        return $this;
    }
  }


?>