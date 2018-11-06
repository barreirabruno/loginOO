<?php

require_once 'global.php';

class UsuarioDao
{
    public function signUp(Usuario $usuario)
    {
        $pdo = Conexao::pegarConexao();
        $query = ('INSERT INTO usuarios (
            email,
            senha,
            nome,
            sexo,
            telefone,
            celular,
            termoUso) VALUES (
                :email,
                :senha,
                :nome,
                :sexo,
                :telefone,
                :celular,
                :termoUso
            )');
        $cadastrarUsuario = $pdo->prepare($query);
        $cadastrarUsuario->execute(array(
            ':email' => $usuario->getEmail(),
            ':senha' => $usuario->hashSenha(),
            ':nome' => $usuario->getNomeCompleto(),
            ':sexo' => $usuario->getSexo(),
            ':telefone' => $usuario->getTelefone(),
            ':celular' => $usuario->getCelular(),
            ':termoUso' => $usuario->getTermosUso()
        ));
        $recentlyUser = $pdo->lastInsertId();
        $usuario->setId($recentlyUser);
    }

    public function signIn(UsuarioCadastrado $usuarioCadastrado)
    {
        $pdo = Conexao::pegarConexao();
        $query = "SELECT * FROM usuarios WHERE email = :email";
        $validarUsuario = $pdo->prepare($query);
        $validarUsuario->bindValue(":email", $usuarioCadastrado->getEmail());
        $validarUsuario->execute();
        $rows = $validarUsuario->fetchAll($pdo::FETCH_ASSOC);
        $count = count($rows);    
        $row = $rows[0];
        if(password_verify($usuarioCadastrado->getSenha(), $row["senha"]))
        {
            $_SESSION['nome'] = $row["nome"];
            $_SESSION['logado'] = 'true';
            header("Location: dashboard.php");
            exit();
        } else {
            header('Location: formulario-login.php?badlogin=' . urlencode(base64_encode("Usuário ou senha inválidos")));
        }
    }
}