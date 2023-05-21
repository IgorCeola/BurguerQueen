<?php

class Cardapio
{
    private int $idCardapio = 1;
    private string $nomeCardapio;
    private $dataInclusaoCardapio;
    private bool $temIgrediente;
    private bool $ehAtivoCardapio = true;
    
    public function __construct($nomeCardapio, $dataInclusaoCardapio,$temIgrediente) {
        $this->validarNome($nomeCardapio);
        $this->dataInclusaoCardapio = $dataInclusaoCardapio;
        $this->temIgrediente = $temIgrediente;
        Cardapio::$idCardapio++;
    }
    
    //get e set
    
    public function setNomeCardapio($nomeCardapio){
        $this->validarNome($nomeCardapio);
    }
    
    public function setTemIgrediente($temIgrediente){
        $this->temIgrediente = $temIgrediente;
    }
    
    public function setEhAtivoCardapio($ehAtivoCardapio){
        $this->ehAtivoCardapio = $ehAtivoCardapio;
    }
    
    /*public stataic function getIdCardapio(): int {
     return Conta::$idCardapio;
     }*/
    
    public function getNomeCardapio(){
        return $this->nomeCardapio;
    }
    
    public function getDataInclusaoCardapio(){
        return $this->dataInclusaoCardapio;
    }
    
    public function getTemIgrediente(){
        return $this->temIgrediente;
    }
    
    public function getEhAtivoCardapio(){
        return $this->ehAtivoCardapio;
    }
    
    //Validar dados
    
    private function validarNome(String $nomeCardapio){
        if (strlen($nomeCardapio) < 3){
            echo "Nome precisa ter 5 ou mais caracteres";
        }
    }
    
    //métodos
  
}