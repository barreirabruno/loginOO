<?php

class UsuarioCadastrado
{
    private $email;
    private $senha;

    function __construct($email, $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getSenha()
    {
        return $this->senha;
    }

}