<?php

/**
 * @author RICARDO AUGUSTO
 *
 */
class FreteDetalhado
{
    private static int $idFreteDetalhado = 1;
    private float $precoFreteDetalhado;
    private $dataInclusaoFreteDetalhado;
    private bool $ehAtivoFreteDetalhado = true;
    private $bairros;
    

    public function __construct(float $precoFreteDetalhado, string $dataInclusaoFreteDetalhado) {
        $this->precoFreteDetalhado = $precoFreteDetalhado;
        $this->dataInclusaoFreteDetalhado = $dataInclusaoFreteDetalhado;
        Estado::$idFrete++;
    }
    
    public static function getIdFreteDetalhado()
    {
        return FreteDetalhado::$idFreteDetalhado;
    }

    public function getPrecoFreteDetalhado()
    {
        return $this->precoFreteDetalhado;
    }

    public function getDataInclusaoFreteDetalhado()
    {
        return $this->dataInclusaoFreteDetalhado;
    }

    public function getEhAtivoFreteDetalhado()
    {
        return $this->ehAtivoFreteDetalhado;
    }

    public function getBairros()
    {
        return $this->bairros;
    }
    
    
    public function setPrecoFreteDetalhado($precoFreteDetalhado)
    {
        $this->precoFreteDetalhado = $precoFreteDetalhado;
    }
    
    public function setEhAtivoFreteDetalhado($ehAtivoFreteDetalhado)
    {
        $this->ehAtivoFreteDetalhado = $ehAtivoFreteDetalhado;
    }
    
    public function setBairros($bairros)
    {
        $this->bairros = $bairros;
    }

   
    
    
    
}