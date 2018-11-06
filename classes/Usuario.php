<?php

require_once 'global.php';

class Usuario
{
    private $id = "";
    private $email;
    private $senha;
    private $nomeCompleto;
    private $sexo;
    private $telefone;
    private $celular;
    private $termosUso;

    function __construct($email, $senha, $nomeCompleto, $sexo, $telefone, $celular, $termosUso)
    {
        $this->email = $email;
        $this->senha = $senha;
        $this->nomeCompleto = $nomeCompleto;
        $this->sexo = $sexo;
        $this->telefone = $telefone;
        $this->celular = $celular;
        $this->termosUso = $termosUso;
    }

    public function hashSenha()
    {
       return password_hash($this->senha, PASSWORD_DEFAULT);
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function getNomeCompleto()
    {
        return $this->nomeCompleto;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getCelular()
    {
        return $this->celular;
    }

    public function getTermosUso()
    {
        return $this->termosUso;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}