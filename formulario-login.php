<!doctype html>
<html lang="pt-br">
  <head>
    <title>Login de usuário</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/login-usuario.css">
  </head>
  <body>
    <div class="container">
        <section class="logotipo">
            <h1>Logotipo || Login</h1>
        </section>
        <?php
        if ($_GET['badlogin'])
        {
            echo '<div class="alert alert-danger" role="alert">' . base64_decode(urldecode($_GET['badlogin'])) . '</div>';
        } else if ($_GET['logout'])
        {
            echo '<div class="alert alert-primary" role="alert">' . base64_decode(urldecode($_GET['logout'])) . '</div>';
        }
        ?>
        <section class="login-usuario">
                <h3>Bem vindo de volta!</h3>
                <p class="lead">
                    Faça seu login para realizar suas compras de maneira rápida e segura.
                </p>
                <form action="login-usuario.php" method="POST">
                    <div class="row">
                        <div class="form-group col-6">
                        <label for="email">Email:</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Digite seu email para efetuar login" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Use o mesmo email do cadastro, não se esqueça</small>
                        </div>
                        <div class="form-group col-6">
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite a senha" aria-describedby="helpId">
                        <small id="helpId" class="text-muted">Use a senha escolhida no cadastro</small>
                        </div>
                    </div>
                    <button class="btn btn-info btn-block">Fazer login</button>
                </form>
            </div>
        </section>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>