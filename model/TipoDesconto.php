<?php

class TipoDesconto
{
    private static int $idTipoDesconto = 1;
    private string $nomeTipoDesconto;

    public function __construct(string $nomeTipoDesconto) {
        $this->validarNome($nomeTipoDesconto);
        TipoDesconto::$idTipoDesconto++;
    }
    
    public static function getIdTipoDesconto()
    {
        return TipoDesconto::$idTipoDesconto;
    }

    public function getNomeTipoDesconto()
    {
        return $this->nomeTipoDesconto;
    }

    //Validar dados
    
    private function validarNome(String $nomeTipoDesconto){
        if (strlen($nomeTipoDesconto) < 3){
            echo "Nome precisa ter 5 ou mais caracteres";
        }
    }
}