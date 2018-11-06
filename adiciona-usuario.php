<?php
    session_start();
    require_once 'global.php';
try 
{
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $nomeCompleto = $_POST['nomeCompleto'];
    $sexo = $_POST['sexo'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $termosUso = $_POST['termosUso'];

    $usuario = new Usuario($email, $senha, $nomeCompleto, $sexo, $telefone, $celular, $termosUso);

    $usuarioDao = new UsuarioDao();

    $usuarioDao->SignUp($usuario);

    $_SESSION['nome'] = $usuario->getNomeCompleto();
    $_SESSION['email'] = $usuario->getEmail();
    
    header('Location: conta-criada.php');
} 
catch(Exception $e)
{
    echo '<pre>';
    print_r($e);
    echo '</pre>';
    exit;
}



    

    



    