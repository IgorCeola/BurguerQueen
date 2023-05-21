<?php

/**
 * @author RICARDO AUGUSTO
 *
 */
class Usuario
{
    private static int $idUsuario = 1;
    private string $nomeUsuario;
    private string $telefoneUsuario;
    private string $emailUsuario;
    private string $senhaUsuario;
    private bool $ehCiente;
    private bool $ehFuncionario;
    private bool $ehSocio;
    

    public function __construct(string $nomeUsuario , string $telefoneUsuario, string $emailUsuario, string $senhaUsuario, bool $ehCiente, bool $ehFuncionario, bool $ehSocio) {
        $this->validarNome($nomeUsuario);
        $this->validarTelefone($telefoneUsuario);
        $this->validarSenha($senhaUsuario);
        $this->validarEmail($emailUsuario);
        $this->ehCiente = $ehCiente;
        $this->ehFuncionario = $ehFuncionario;
        $this->ehSocio = $ehSocio;
        Usuario::$idUsuario++;
    }
    
    public static function getIdUsuario()
    {
        return Usuario::$idUsuario;
    }

    public function getNomeUsuario()
    {
        return $this->nomeUsuario;
    }

    public function getTelefoneUsuario()
    {
        return $this->telefoneUsuario;
    }

    public function getEmailUsuario()
    {
        return $this->emailUsuario;
    }

    public function getSenhaUsuario()
    {
        return $this->senhaUsuario;
    }

    public function getEhCiente()
    {
        return $this->ehCiente;
    }

    public function getEhFuncionario()
    {
        return $this->ehFuncionario;
    }

    public function getEhSocio()
    {
        return $this->ehSocio;
    }

    public function setNomeUsuario($nomeUsuario)
    {
        $this->nomeUsuario = $nomeUsuario;
    }

    public function setTelefoneUsuario($telefoneUsuario)
    {
        $this->telefoneUsuario = $telefoneUsuario;
    }

    public function setEmailUsuario($emailUsuario)
    {
        $this->emailUsuario = $emailUsuario;
    }

    public function setSenhaUsuario($senhaUsuario)
    {
        $this->senhaUsuario = $senhaUsuario;
    }

    public function setEhCiente($ehCiente)
    {
        $this->ehCiente = $ehCiente;
    }

    public function setEhFuncionario($ehFuncionario)
    {
        $this->ehFuncionario = $ehFuncionario;
    }

    public function setEhSocio($ehSocio)
    {
        $this->ehSocio = $ehSocio;
    }
    
   
    //Validar dados
    
    private function validarNome(String $nomeUsuario){
        if (strlen($nomeUsuario) < 5){
            echo "Nome precisa ter 5 ou mais caracteres";
        }
    }
    
    private function validarTelefone(String $telefoneUsuario){
        if (strlen($telefoneUsuario) != 11){
            echo "Telefone precisa ter 11 números";
        }
    }
    
    private function validarSenha(String $senhaUsuario){
        if (strlen($senhaUsuario) < 8){
            echo "Senha precisa ter 8 ou mais caracteres";
        }
    }
    
    private function validarEmail(String $emailUsuario){
        if (strlen($emailUsuario) < 12){
            echo "Senha precisa ter 8 ou mais caracteres";
        }
    }

}