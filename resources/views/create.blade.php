<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Lumenapp') }}</title>

        <!-- Latest compiled and minified CSS  Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3>Criar Usuario</h3><hr/>

                <form action="{{ url('/create') }}" method='POST'>
                    <div class="col-md-4 form-group">
                        <label for="nome">NOME</label>
                        <input type="text" name="nome" id="nome" class="form-control" />
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" id="cpf" class="form-control" />
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="email">E-MAIL</label>
                        <input type="text" name="email" id="email" class="form-control" />
                    </div>
                    <div class="col-md-12 form-group">
                        <a href="{{ url("/usuario") }}" class="btn btn-sm btn-default">Voltar</a>
                        <input type="hidden" name="_method" value="POST">
                        <input type="submit" class="btn btn-sm btn-primary" value="Salvar" />
                    </div>
                </form>
            </div>
        </div>
    </body>

    <!-- Latest compiled and minified JQuery 3.2.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript Bootstrap 3.3.7 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>