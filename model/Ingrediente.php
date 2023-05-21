<?php

class Ingrediente

{
    private static int $idIngrediente = 1;
    private string $nomeIngrediente;
    private $dataInclusaoIngrediente;
    private bool $ehAtivoIngrediente = true;
    
    public function __construct(string $nomeIngrediente, $dataInclusaoIngrediente) {
        $this->validarNome($nomeIngrediente);
        $this->dataInclusaoIngrediente = $dataInclusaoIngrediente;
        Ingrediente::$idIngrediente++;
    }
    
    
    //Get e Set
    
    public function setNomeIngrediente(String $nomeIngrediente): void {
        $this->validarNome($nomeIngrediente);
    }
    
    public function setEhAtivoIngrediente(bool $ehAtivoIngrediente): void {
        $this->ehAtivoIngrediente = ehAtivIngrediente;
    }
    
    /*public function getIdIngrediente(): int {
     return Conta::$idIngrediente;
     }*/
    
    public function getNomeIngrediente(): String {
        return $this->nomeIngrediente;
    }
    
    public function getDataInclusaoIngrediente(){
        return $this->dataInclusaoIngrediente;
    }
    
    public function getEhAtivoIngrediente(): bool {
        return $this->ehAtivoIngrediente;
    }
    
    //Validar dados
    
    private function validarNome(String $nomeIngrediente){
        if (strlen($nomeIngrediente) < 3){
            echo "Nome precisa ter 5 ou mais caracteres";
        }
    }
    
    //Metodos
   
}