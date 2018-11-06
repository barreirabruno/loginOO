<!doctype html>
<html lang="pt-br">
  <head>
    <title>Cadastro de usuário</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/cadastro-usuario.css">
  </head>
  <body>
    <div class="container">
        <section class="logotipo">
            <h1>Logotipo || Cadastro</h1>
        </section>

        <section class="cadastro-usuario">
            <h3>Identificação</h3>
            <p class="lead">
                Cadastre-se! Aproveite promoções e agilize suas compras.
            </p>
            <h5>Dados cadastrais</h5>
            <form action="adiciona-usuario.php" method="post">
                <div class="form-row">
                    <div class="form-group col">
                    <label for="email">Email:</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Digite seu melhor e-mail" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Você utilizará este email para efeturar login</small>
                    </div>
                    <div class="form-group col">
                    <label for="senha">Senha:</label>
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="Escolha uma senha" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Você utilizará esta senha no login</small>
                    </div>
                    <div class="form-group col-12">
                    <label for="senha">Nome completo:</label>
                    <input type="text" name="nomeCompleto" id="nomeCompleto" class="form-control" placeholder="Digite seu nome completo" aria-describedby="helpId">
                    </div>
                </div>
                <div class="form-row">
                    <legend class="col-form-label col-sm-2 pt-0">Sexo:</legend>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="sexo" id="0" value="Masculino"> Masculino
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="sexo" id="1" value="Feminino"> Feminino
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="sexo" id="2" value="Naodeclarar"> Não declarar
                        </label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                      <label for="telFixo">Telefone:</label>
                      <input type="text" name="telefone" id="telFixo" class="form-control" placeholder="Telefone para contato" aria-describedby="helpId">
                    </div>
                    <div class="form-group col">
                      <label for="telMovel">Celular:</label>
                      <input type="text" name="celular" id="celular" class="form-control" placeholder="Número de celular" aria-describedby="helpId">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center termos">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="termosUso" id="termosUso" value="1"> Li e aceito os termos de uso
                                <div>
                                <small><a href="#">Ler termos de uso</a></small>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <button class="btn btn-info btn-block">Cadastre-me</button>
            </form>
        </section>
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>