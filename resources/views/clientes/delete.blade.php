<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir um Cliente</title>
    <?php include_once"../estilo.php"?>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
    @if ((Route::has('listar_cliente')))    
    @auth
    <form action="{{ route('excluir_cliente', ['id' => $cliente->id]) }}" method="POST">
        @csrf
        <h1>Remoção de Cliente:</h1>
        <div class="input-field col s8">
            <label for="">Tem certeza que deseja excluir este Cliente?</label> <br />
            <input type="text" name="nome" value="{{ $cliente->nome }}"> <br />
        </div>

        <div class="input-field col s8">
            <br>
            <button class="btn waves-effect waves-light blue accent-3" type="submit" name="botaoRemover">Sim
                <i class="material-icons right"> check_circle </i>
            </button>

            <button class="btn waves-effect waves-light grey darken-2" type="button" name="botaoVoltar">Voltar
            <a href="{{ route('listar_cliente') }}"><i class="material-icons right"> chevron_left </i></a>
            </button>
        </div>
    </form>
    @else
        <button class="waves-effect waves-light btn grey lighten-1"><i class="material-icons left">navigate_next</i><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a></button>
        @if (Route::has('register'))
        <button class="waves-effect waves-light btn grey lighten-1"><i class="material-icons left">add</i><a href="{{ route('register') }}" class="text-sm text-gray-700 underline">Registrar</a></button>
        @endif
    
        @endif
    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
    @endif
</body>
</html>