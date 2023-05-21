<?php

class TipoPromocao
{
    private static int $idTipoPromocao = 1;
    private string $nomeTipoPromocao;
    
    public function __construct(string $nomeTipoPromocao) {
        $this->validarNome($nomeTipoPromocao);
        Promocao::$idTipoPromocao++;
    }
    
    public static function getIdTipoPromocao()
    {
        return TipoDesconto::$idTipoPromocao;
    }
    
    public function getNomeTipoPromocao()
    {
        return $this->nomeTipoPromocao;
    }
    
    //Validar dados
    
    private function validarNome(String $nomeTipoPromocao){
        if (strlen($nomeTipoPromocao) < 3){
            echo "Nome precisa ter 5 ou mais caracteres";
        }
    }
}