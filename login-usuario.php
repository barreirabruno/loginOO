<?php
    session_start();
    require_once 'global.php';

    try 
    {
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $usuarioCadastrado = new UsuarioCadastrado($email, $senha);

        $usuarioDao = new UsuarioDao();

        $usuarioDao->signIn($usuarioCadastrado);
    }
    catch(Exception $e)
    {
        echo '<pre>';
        print_r($e);
        echo '</pre>';
        exit;
    }


