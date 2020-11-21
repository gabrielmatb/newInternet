<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar uma Nova Compra</title>
    <?php include_once"../estilo.php"?>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script>
         $(document).ready(function() {
            $('select').material_select();
         });
    </script>
</head>
<body>
    @if ((Route::has('listar_compra')))
    @auth
    <form action="{{ route('registrar_compra') }}" method="POST">
        @csrf
        <h1>Cadastro de Compras:</h1>
        <div class="col s8">
            <label for="lblProduto">Informe o Produto: </label>
            <select name="idProduto">
                @foreach ( $produtos as $produto )
                    <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="col s8">
            <label for="lblProduto">Informe o Cliente: </label>
            <select name="idCliente">
                @foreach ( $clientes as $cliente )
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="input-field col s8">
            <label for="">Quantidade</label> <br />
            <input type="number" name="quantidade" min=1 max=9999999 required> <br />
        </div>

        <div class="input-field col s8">
            <br>
            <button class="btn waves-effect waves-light blue accent-3" type="submit" name="botaoInserir">Inserir
                <i class="material-icons right"> check_circle </i>
            </button>

            <button class="btn waves-effect waves-light brown" type="reset" name="botaoResetar">Resetar
                <i class="material-icons right"> clear </i>
            </button>

            <button class="btn waves-effect waves-light grey darken-2" type="button" name="botaoVoltar">Voltar
                <a href="{{ route('listar_compra') }}"><i class="material-icons right"> chevron_left </i></a>
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