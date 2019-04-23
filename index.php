<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modelo framework Ajax</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- ÍCONES E GIFS UTEIS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="container">
        <br>
        <div class="row-12 text-center font-italic"><h3>Demostração funções Ajax - generic.js</h3></div>
        <br>
        <div class="login row">
            <div class="col-5">
                <div id="login_result"></div>
                <div id="login" class="card" style="width: 30rem;">
                    <br>
                    <h5 class="card-title text-center">Login</h5>
                    <div class="card-body">
                        <form role="form" id="login_form" enctype="multipart/form-data">
                            <div class="form-group form-group-sm">
                                <label for="">Usuário</label>
                                <input name="user" type="text" class="form-control form-control-sm" id="user" placeholder="Digite o usuário">
                            </div>
                            <div class="form-group form-group-sm">
                                <label for="">Senha</label>
                                <input name="pass" type="password" class="form-control form-control-sm" id="password" placeholder="Digite a senha">
                            </div>
                            <button class="btn btn-primary btn-sm">Login</button>
                        </form>
                        <br>
                        <div id="login_error" class="text-center" style="display: none;" role="alert"></div>
                    </div>
                </div>
            </div>

            <div class="col-1"></div>

            <div class="col-5">
                <h5 class="text-center">Criação de tabela lendo o BD</h5>
                <div id="users"></div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- AJAX -->
    <script src="0-php-framework/Ajax/xhttp.js"></script>
    <script src="2-ajax/test_functions.js"></script>
    <script src="2-ajax/generic.js"></script>
</body>
</html>