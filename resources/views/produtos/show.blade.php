<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver um Produto</title>
    <?php include_once"../estilo.php"?>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
    @if ((Route::has('home')) || (Route::has('homeError')) || (Route::has('listar_compra')) || (Route::has('listar_produto')) || (Route::has('listar_cliente')))
    @auth
    <h1>Listagem do Produto:</h1>
    <div class="input-field col s8">
        <label for="">Nome</label> <br />
        <input type="text" name="nome" value="{{ $produto->nome }}"> <br />
    </div>
    <div class="input-field col s8">
        <label for="">Descrição</label> <br />
        <input type="text" name="descricao" value="{{ $produto->descricao }}"> <br />
    </div>
    <div class="input-field col s8">
        <label for="">Preço</label> <br />
        <input type="text" name="preco" value="{{ $produto->preco }}"> <br />
    </div>
    <div class="input-field col s8">
        <label for="">Quantidade</label> <br />
        <input type="text" name="quantidade" value="{{ $produto->quantidade }}"> <br />
    </div>

    <div class="input-field col s8">
        <br>
        <button class="btn waves-effect waves-light grey darken-2" type="button" name="botaoVoltar" >Voltar
        <a href="{{ route('listar_produto') }}"><i class="material-icons right"> chevron_left </i>
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