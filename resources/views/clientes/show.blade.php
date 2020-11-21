<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver um Cliente</title>
    <?php include_once"../estilo.php"?>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    @if ((Route::has('home')) || (Route::has('homeError')) || (Route::has('listar_compra')) || (Route::has('listar_produto')) || (Route::has('listar_cliente')))
    @auth
    <h1>Listagem do Cliente:</h1>
    <div class="input-field col s8">
            <label for="">Nome</label> <br />
            <input type="text" name="nome" value="{{ $cliente->nome }}"> <br />
        </div>
        <div class="input-field col s8">
            <label for="">RG</label> <br />
            <input type="number" name="rg" value="{{ $cliente->rg }}"> <br />
        </div>
        <div class="input-field col s8">
            <label for="">CPF</label> <br />
            <input type="number" name="cpf" value="{{ $cliente->cpf }}"> <br />
        </div>
        <div class="input-field col s8">
            <label for="">Email</label> <br />
            <input type="email" name="email" value="{{ $cliente->email }}"> <br />
        </div>
        <div class="input-field col s8">
            <label for="">Telefone</label> <br />
            <input type="number" name="telefone" value="{{ $cliente->telefone }}"> <br />
        </div>

    <div class="input-field col s8">
        <br>
        <button class="btn waves-effect waves-light grey darken-2" type="button" name="botaoVoltar" >Voltar
        <a href="{{ route('listar_cliente') }}"><i class="material-icons right"> chevron_left </i>
        </button>
    </div>
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