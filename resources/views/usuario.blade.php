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
                <h3>Listar Usuarios</h3>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                @if(!empty($success))
                    @if($success == 'sucesso')
                        <div class="alert alert-success">
                            <strong>Sucesso:</strong> Ação executada com sucesso!
                        </div>
                    @else
                        <div class="alert alert-danger">
                            <strong>Erro:</strong> Ação solicitada falhou!
                        </div>
                    @endif
                @endif
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Email</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->nome }}</td>
                                <td>{{ $usuario->cpf }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>
                                    <a href="{{ url("/alterarUsuario/".$usuario->id) }}" class="btn btn-sm btn-default" style="margin-left: 10px;">Editar</a>
                                    <form action="{{ url('/destroy/'.$usuario->id) }}" method="POST" class="pull-left">
                                        <input type="hidden" name="_method" value="DELETE" />
                                        <input type="submit" value="Deletar" class="btn btn-sm btn-danger" />
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <a href="<?=url("/criarUsuario");?>" class="btn btn-sm btn-primary">Novo Usuario</a>
            </div>
        </div>
    </body>

    <!-- Latest compiled and minified JQuery 3.2.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript Bootstrap 3.3.7 -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</html>