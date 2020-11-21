<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Produtos</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
@extends('layouts.app')

@section('content')
    @if ((Route::has('home')) || (Route::has('homeError')) || (Route::has('listar_compra')) || (Route::has('listar_cliente')))
    @auth
    <div class="container">
        <div class="row justify-content-center">
            <h1>Listagem dos Produtos:</h1>
            <a href="{{ route('criar_produto') }}"><svg width="5em" height="5em" viewBox="0 0 16 16" class="bi bi-align-middle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 13a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v10zM1 8a.5.5 0 0 0 .5.5H6v-1H1.5A.5.5 0 0 0 1 8zm14 0a.5.5 0 0 1-.5.5H10v-1h4.5a.5.5 0 0 1 .5.5z"/>
            </svg></a>
            <!--<a class="btn-floating btn-large waves-effect blue darken-4" href="{{ route('criar_produto') }}"><i class="material-icons">add_circle</i></a>-->
            <table  class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Quantidade</th>
                        <th>Editar</th>
                        <th>Remover</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $produtos as $produto )
                        <tr>
                            <td>{{ $produto->id }}</td>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->descricao }}</td>
                            <td>{{ $produto->preco }}</td>
                            <td>{{ $produto->quantidade }}</td>
                            <td><a href="{{ route('alterar_produto', ['id' => $produto->id]) }}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-brush-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.117 8.117 0 0 1-3.078.132 3.658 3.658 0 0 1-.563-.135 1.382 1.382 0 0 1-.465-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.393-.197.625-.453.867-.826.094-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.2-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.175-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04z"/>
                                </svg></a></td>
                            <td><a href="{{ route('excluir_produto', ['id' => $produto->id]) }}"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-dash-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm2.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
                            </svg></a></td>
                            <!--<td><a class="btn-floating btn-small waves-effect waves-light orange" href="{{ route('alterar_produto', ['id' => $produto->id]) }}">
                                    <i class="material-icons">mode_edit</i></a></td>
                            <td><a class="btn-floating btn-small waves-effect waves-light red" href="{{ route('excluir_produto', ['id' => $produto->id]) }}">
                                <i class="material-icons">remove_circle</i></a></td>-->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @else
        <a href="{{ route('login') }}"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-check2-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
            <path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 0 0 3 14.5h10a1.5 1.5 0 0 0 1.5-1.5V8a.5.5 0 0 0-1 0v5a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V3a.5.5 0 0 1 .5-.5h8a.5.5 0 0 0 0-1H3A1.5 1.5 0 0 0 1.5 3v10z"/>
        </svg>Login</a>
        <!--<button class="waves-effect waves-light btn grey lighten-1"><i class="material-icons left">navigate_next</i><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a></button>-->
        @if (Route::has('register'))
        <a href="{{ route('register') }}"><svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-badge-ad-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm6.209 6.32c0-1.28.694-2.044 1.753-2.044.655 0 1.156.294 1.336.769h.053v-2.36h1.16V11h-1.138v-.747h-.057c-.145.474-.69.804-1.367.804-1.055 0-1.74-.764-1.74-2.043v-.695zm3.142.017c0-.699-.422-1.138-1.002-1.138-.584 0-.954.444-.954 1.239v.453c0 .8.374 1.248.972 1.248.588 0 .984-.44.984-1.2v-.602zM4.17 9.457L3.7 11H2.5l2.013-5.999H5.9L7.905 11H6.644l-.47-1.542H4.17zm1.767-.883l-.734-2.426H5.15l-.734 2.426h1.52z"/>
        </svg>Registrar</a>
        <!--<button class="waves-effect waves-light btn grey lighten-1"><i class="material-icons left">add</i><a href="{{ route('register') }}" class="text-sm text-gray-700 underline">Registrar</a></button>-->
        @endif
    
        @endif
    <br>
    <br>
    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
    @endif
    @endsection
</body>
</html>