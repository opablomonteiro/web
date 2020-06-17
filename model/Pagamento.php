<?php
  require "PagamentoDAO.php";
  Class Pagamento{


    private $id_Pag;
    private $totalParc_Pag;
    private $pagoParc_Pag;
    private $codigo_Psg;
   
    public function cadastrar_Pag(){
        $pagamento = new PassagemDAO();
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