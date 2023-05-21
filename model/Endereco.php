<?php

require_once 'model\Bairro.php';
require_once 'model\Usuario.php';

class Endereco
{
    private static int $idEndereco = 1;
    private string $nomeEndereco;
    private string $ruaEndereco;
    private int $numeroEdenreco;
    private int $cepEndereco;
    private string $complementoEndereco = null;
    private int $idBairro;
    private int $idUsuario;
    
    public function __construct(string $nomeEndereco, string $ruaEndereco, int $numeroEdenreco, int $cepEndereco, int $idBairro, int $idUsuario) {
        $this->validarNome($nomeEndereco);
        $this->validarRua($ruaEndereco);
        $this->validarNumero($numeroEdenreco);
        $this->validarCep($cepEndereco);
        $this->validarBairro($idBairro);
        $this->validarUsuario($idUsuario);
        Endereco::$idEndereco++;
    }
    
    //get e set
    
    public function setNomeEndereco(String $nomeEndereco): void {
        $this->validarNome($nomeEndereco);
    }
    
    public function setRuaEndereco(String $ruaEndereco): void {
        $this->validarRua($ruaEndereco);
    }
    
    public function setNumeroEndereco(int $numeroEdenreco): void {
        $this->validarNumero($numeroEdenreco);
    }
    
    public function setCepEndereco(int $cepEndereco): void {
        $this->validarCep($cepEndereco);
    }
    
    /*public stataic function getIdCardapio(): int {
     return Conta::$idCardapio;
     }*/
    
    public function getNomeEndereco(): String {
        return $this->nomeEndereco;
    }
    
    public function getRuaEndereco(): String {
        return $this->ruaEndereco;
    }
    
    public function getNumeroEdenreco(): int {
        return $this->numeroEdenreco;
    }
    
    public function getCepEndereco(): int {
        return $this->cepEndereco;
    }
    
    public function getComplementoEndereco(): string {
        if ($this->complementoEndereco != null) {
            return $this->complementoEndereco;
        }
        else {
            return "sem complemento";
        }
    }
    
    //Validar dados
    
    private function validarNome(String $nomeBairro){
        if (strlen($nomeBairro) < 3){
            echo "Nome precisa ter 5 ou mais caracteres";
        }
    }
    
    private function validarRua(String $nomeRua){
        if (strlen($nomeRua) < 3){
            echo "Rua precisa ter 5 ou mais caracteres";
        }
    }
    
    private function validarNumero(int $numeroEdenreco){
        if ($numeroEdenreco < 0 && $numeroEdenreco >= 10000){
            echo "Numero só pode ter 5 dígitos";
        }
    }
    
    private function validarCepEndereco(int $cepEndereco){
        if ($cepEndereco != 8){
            echo "CEP tem que ter obrigatóriamente 8 dígitos numéricos";
        }
    }
    
    private function validarBairro(int $idBairro){
        /*if ($idMunicipio < 1 && $idEstado > 27){
         echo "Estado não existe";
         }*/
    }
    
    private function validarUsuario(int $idUsuario){
        /*if ($idMunicipio < 1 && $idEstado > 27){
         echo "Estado não existe";
         }*/
    }
}