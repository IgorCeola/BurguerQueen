<?php

class FormaDePagamento
{
    private static int $idFormaDePagamento = 1;
    private string $nomeFormaDePagamento;
    private $dataInclusaoFormaDePagamento;
    private bool $ehPrazo;
    private int $parcela;
    private bool $ehAtivoFormaDePagamento = true;
    
    public function __construct(string $nomeFormaDePagamento, $dataInclusaoFormaDePagamento, bool $ehPrazo, int $parcela) {
        $this->validarNome($nomeFormaDePagamento);
        $this->dataInclusaoFormaDePagamento = $dataInclusaoFormaDePagamento;
        $this->ehPrazo = $ehPrazo;
        $this->numeroParcela($parcela);
        Cardapio::$idCardapio++;
    }
    
    //get e set
    
    public function setNomeFormaDePagamento(String $nomeFormaDePagamento): void {
        $this->validarNome($nomeFormaDePagamento);
    }
    
    public function setEhPrazo(bool $ehPrazo): void {
        $this->ehPrazo = $ehPrazo;
    }
    
    public function setParcela(int $parcela): void {
        $this->numeroParcela($parcela);
    }
    
    public function setEhAtivoFormaDePagamento(bool $ehAtivoCardapio): void {
        $this->ehAtivoCardapio = $ehAtivoCardapio;
    }
    
    /*public stataic function getIdCardapio(): int {
     return Conta::$idCardapio;
     }*/
    
    public function getNomeFormaDePagamento(): String {
        return $this->nomeFormaDePagamento;
    }
    
    public function getDataInclusaoFormaDePagamento(){
        return $this->dataInclusaoFormaDePagamento;
    }
    
    public function getEhPrazo(): bool {
        return $this->ehPrazo;
    }
    
    public function getEhParcela(): int {
        return $this->parcela;
    }
    
    public function getEhAtivoFormaDePagamento(): bool {
        return $this->ehAtivoFormaDePagamento;
    }
    
    //Validar dados
    
    private function validarNome(String $nomeFormaDePagamento){
        if (strlen($nomeFormaDePagamento) < 3){
            echo "Nome precisa ter 5 ou mais caracteres";
        }
    }
    
    private function ValidarNumeroParcela(int $parcela){
        if ($parcela < 1){
            echo "Não pode ser menor que 1, se for a vista é 1.";
        }
    }
    
    //métodos
    
   
}