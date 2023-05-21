<?php

class Privilegio
{
    private static int $idPrivilegio  = 1;
    private string $nomePrivilegio;
    private $dataInclusaoPrivilegio;
    private bool $ehAtivoPrivilegio  = true;
    
    public function __construct(string $nomePrivilegio, $dataInclusaoPrivilegio) {
        $this->validarNome($nomePrivilegio);
        $this->dataInclusaoPrivilegio = $dataInclusaoPrivilegio;
        Cardapio::$idPrivilegio++;
    }
    
    //get e set
    
    public function setNomePrivilegio(String $nomePrivilegio): void {
        $this->validarNome($nomePrivilegio);
    }
    
    public function setEhAtivoPrivilegio(bool $ehAtivoPrivilegio): void {
        $this->ehAtivoPrivilegio = $ehAtivoPrivilegio;
    }
    
    /*public stataic function getIdCardapio(): int {
     return Conta::$idCardapio;
     }*/
    
    public function getNomePrivilegio(): String {
        return $this->nomePrivilegio;
    }
    
    public function getDataInclusaoPrivilegio(){
        return $this->dataInclusaPrivilegio;
    }
    
    public function getEhAtivoPrivilegio(): bool {
        return $this->ehAtivoPrivilegio;
    }
    
    //Validar dados
    
    private function validarNome(String $nomePrivilegio){
        if (strlen($nomePrivilegio) < 3){
            echo "Nome precisa ter 5 ou mais caracteres";
        }
    }
    
    //métodos
    
  
}