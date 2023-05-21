<?php

class Frete
{
    private static int $idFrete = 1;
    private string $nomeFrete;
    private $dataInclusaoFrte;
    private bool $ehAtivoFrte = true;
    
    public function __construct(string $nomeFrete, string $dataInclusaoFrte) {
        $this->validarNome($nomeFrete);
        $this->dataInclusaoFrte = $dataInclusaoFrte;
        Estado::$idFrete++;
    }
    
    //GET e SET
    
    public static function getIdFrete()
    {
        return Frete::$idFrete;
    }

    public function getNomeFrete()
    {
        return $this->nomeFrete;
    }

    public function getDataInclusaoFrte()
    {
        return $this->dataInclusaoFrte;
    }

    public function getEhAtivoFrte()
    {
        return $this->ehAtivoFrte;
    }
    
    public function setNomeFrete($nomeFrete)
    {
        $this->nomeFrete = $nomeFrete;
    }
    
    public function setEhAtivoFrte($ehAtivoFrte)
    {
        $this->ehAtivoFrte = $ehAtivoFrte;
    }
    
    //Validar dados
    
    private function validarNome(String $nomeFrete){
        if (strlen($nomeFrete) < 3){
            echo "Nome precisa ter 5 ou mais caracteres";
        }
    }
    

    
    
}