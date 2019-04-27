<?php 
    session_start();
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container" >
    <form action="CadastroController.php" method="post" class="mt-5">
        <div class="row form-inline">
                            
                <div class="form-group col-6">
                    <label for="nomeLogin">Nome:</label>
                    <input class="form-control col-12" type="text"  name="inputNome" id="nomeLogin" required>
                </div>
                <div class="form-group col-6">
                    <label for="telLogin">Telefone:</label>
                    <input class="form-control col-12" type="tel" name="inputTel" id="telLogin" pattern="[0-9]{11}" required placeholder="Ex: 8899991234">
                </div>

                <div class="form-group col-6">
                    <label for="enderecoLogin">Endereço:</label>
                    <input class="form-control col-12" type="text"  name="inputEndereco" id="enderecoLogin" required>
                </div>
                <div class="form-group col-6">
                    <label for="instituicaoLogin">Instituição:</label>
                    <input class="form-control col-12" type="text" name="inputInstituicao" id="instituicaoLogin" required>
                </div>

                <div class="form-group col-6">
                    <label for="emailLogin">E-mail:</label>
                    <input class="form-control col-12" type="email"  name="inputEmail" id="emailLogin" required>
                </div>
                <div class="form-group col-6">
                    <label for="passwordLogin">Senha:</label>
                    <input class="form-control col-12" type="password" name="inputPassword" id="passwordLogin">
                </div>
                
        </div>
                
        <div class="row col-12 mt-5">
        
            <button class="btn btn-success mx-auto col-3" type="submit">Entrar</button>
        
        
        </div>        
                <?php
                    if($_SESSION['nao_cadastrado']):
                ?>
                        <div class="mx-auto mt-3 col-6 alert text-center alert-danger" role="alert">
                            Erro ao cadastrar, e-mail já cadastrado anteriormente!
                        </div>
                <?php 
                    unset($_SESSION['nao_cadastrado']);    
                    endif;
                    
                ?> 
        
    </form>  
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>