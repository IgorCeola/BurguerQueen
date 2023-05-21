<?php

/**
 * @author RICARDO AUGUSTO
 *
 */

class Produto
{
    private $idProduto;
    private $nomeProduto;
    private $precoProduto;
    private $descricaoProduto;
    private $fotoProduto;
    private $dataInclusaoProduto;
    private $ehAtivoProduto;
    
    
public function __construct($idProduto, $nomeProduto, $precoProduto, $descricaoProduto, $fotoProduto, $dataInclusaoProduto, $ehAtivoProduto)
{
    $this->idProduto($idProduto);
    $this->validarNome($nomeProduto);
    $this->precoProduto = $precoProduto;
    $this->descricaoProduto = $descricaoProduto;
    $this->fotoProduto = $fotoProduto;
    $this->dataInclusaoProduto = $dataInclusaoProduto;
    $this->ehAtivoProduto = $ehAtivoProduto;
    Usuario::$idUsuario ++;
}

// GET e SET
function getIdProduto()
{
    return Produto::$idProduto;
}

function getNomeProduto()
{
    return $this->nomeProduto;
}

function getPrecoProduto()
{
    return $this->precoProduto;
}

function getDescricaoProduto()
{
    return $this->descricaoProduto;
}

function getFotoProduto()
{
    return $this->fotoProduto;
}

function getDataInclusaoProduto()
{
    return $this->dataInclusaoProduto;
}

function getEhAtivoProduto()
{
    return $this->ehAtivoProduto;
}

function setNomeProduto($nomeProduto)
{
    $this->nomeProduto = $nomeProduto;
}

function setPrecoProduto($precoProduto)
{
    $this->precoProduto = $precoProduto;
}

function setDescricaoProduto($descricaoProduto)
{
    $this->descricaoProduto = $descricaoProduto;
}

function setFotoProduto($fotoProduto)
{
    $this->fotoProduto = $fotoProduto;
}

function setEhAtivoProduto($ehAtivoProduto)
{
    $this->ehAtivoProduto = $ehAtivoProduto;
}
    
    //Validar dados
    
    private function validarNome($nomeUsuario){
        if (strlen($nomeUsuario) < 3){
            echo "Nome precisa ter 3 ou mais caracteres";
        }
    }

    
    
    
  
}