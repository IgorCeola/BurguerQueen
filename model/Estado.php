<?php

class Estado
{
    private static int $idEstado = 1;
    private string $nomeEstado;
    
    public function __construct(string $nomeEstado) {
        $this->validarNome($nomeEstado);
        Estado::$idCardapio++;
    }
    
    //get e set
    
    public function setNomeEstado(String $nomeEstado): void {
        $this->validarNome($nomeEstado);
    }
    
    /*public stataic function getIdCEstado(): int {
     return Conta::$idCardapio;
     }*/
    
    public function getNomeEstado(): String {
        return $this->nomeEstado;
    }
    
    //Validar dados
    
    private function validarNome(String $nomeEstado){
        if (strlen($nomeEstado) < 3){
            echo "Nome precisa ter 5 ou mais caracteres";
        }
    }
}