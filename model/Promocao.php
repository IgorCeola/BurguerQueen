<?php

class Promocao
{
    private static int $idPromocao = 1;
    private string $nomePromocao;
    private $dataInicialPromocao;
    private $dataFinalPromocao;
    private $tipoPromocao;
    private $objetoPromocao;
    private $tipo_desconto;
    private $valor_desconto;
    private bool $ehAtivoPromocao = true;
    
    public function __construct(string $nomePromocao, string $dataInicialPromocao, string $dataFinalPromocao, string $tipoPromocao, string $objetoPromocao, string $tipo_desconto, float $valor_desconto) {
        $this->validarNome($nomePromocao);
        $this->dataInicialPromocao = $dataInicialPromocao;
        $this->dataFinalPromocao = $dataFinalPromocao;
        $this->tipoPromocao = $tipoPromocao;
        $this->objetoPromocao = $objetoPromocao;
        $this->tipo_desconto = $tipo_desconto;
        $this->valor_desconto = $valor_desconto;
        Endereco::$idEndereco++;
    }
   
   //GET e SET
    
    public static function getIdPromocao()
    {
        return Promocao::$idPromocao;
    }

    public function getNomePromocao()
    {
        return $this->nomePromocao;
    }

    public function getDataInicialPromocao()
    {
        return $this->dataInicialPromocao;
    }

    public function getDataFinalPromocao()
    {
        return $this->dataFinalPromocao;
    }

    public function getTipoPromocao()
    {
        return $this->tipoPromocao;
    }

    public function getObjetoPromocao()
    {
        return $this->objetoPromocao;
    }

    public function getTipo_desconto()
    {
        return $this->tipo_desconto;
    }

    public function getValor_desconto()
    {
        return $this->valor_desconto;
    }

    public function getEhAtivoPromocao()
    {
        return $this->ehAtivoPromocao;
    }

    public function setNomePromocao($nomePromocao)
    {
        $this->nomePromocao = $nomePromocao;
    }

    public function setEhAtivoPromocao($ehAtivoPromocao)
    {
        $this->ehAtivoPromocao = $ehAtivoPromocao;
    }
    
    //Validar dados
    
    private function validarNome(String $nomePromocap){
        if (strlen($nomePromocap) < 3){
            echo "Nome precisa ter 3 ou mais caracteres";
        }
    }
     
}