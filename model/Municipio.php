<?php

require_once 'Estado.php';

class Municipio
{
    private static int $idMunicipio = 1;
    private string $nomeMunicipio;
    private int $idEstado;
    
    public function __construct(string $nomeMunicipio, int $idEstado) {
        $this->validarNome($nomeMunicipio);
        $this->validarEstado($idEstado);
        Municipio::$idMunicipio++;
    }
    
    //get e set
    
    public function setNomeMunicipio(String $nomeMunicipio): void {
        $this->validarNome($nomeMunicipio);
    }
    
    /*public stataic function getIdCardapio(): int {
     return Conta::$idCardapio;
     }*/
    
    public function getNomeMunicipio(): String {
        return $this->nomeMunicipio;
    }
    
    //Validar dados
    
    private function validarNome(String $nomeMunicipio){
        if (strlen($nomeMunicipio) < 3){
            echo "Nome precisa ter 5 ou mais caracteres";
        }
    }
    
    private function validarEstado(int $idEstado){
        if ($idEstado < 1 && $idEstado > 27){
            echo "Estado não existe";
        }
    }
}