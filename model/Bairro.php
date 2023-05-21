<?php

require_once 'model\Municipio.php';

class Bairro
{
    private static int $idBairro = 1;
    private string $nomeBairro;
    private int $idMunicipio;
    
    public function __construct(string $nomeBairro , int $idMunicipio) {
        $this->validarNome($nomeBairro);
        $this->validarMunicipio($idMunicipio);
        Bairro::$idBairro++;
    }
    
    //get e set
    
    public function setNomeBairro(String $nomeBairro): void {
        $this->validarNome($nomeBairro);
    }
    
    /*public stataic function getIdMunicipio(): int {
     return Conta::$idMunicipio;
     }*/
    
    public function getNomeBairro(): String {
        return $this->nomeBairro;
    }
    
    //Validar dados
    
    private function validarNome(String $nomeBairro){
        if (strlen($nomeBairro) < 3){
            echo "Nome precisa ter 5 ou mais caracteres";
        }
    }
    
    private function validarMunicipio(int $idMunicipio){
        /*if ($idMunicipio < 1 && $idEstado > 27){
         echo "Estado não existe";
         }*/
    }
}