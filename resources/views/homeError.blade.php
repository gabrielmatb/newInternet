<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internet</title>
</head>
<body>
    @extends('layouts.app')

    @section('content')
    @if ((Route::has('criar_compra')) || (Route::has('registrar_compra')))
    @auth
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Painel de Controle') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Você está Logado!') }}
                        <br>

                        <p>{{ __('Erro ao Inserir Compra, quantidade de compra é maior que a Disponível!') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
        <button class="waves-effect waves-light btn grey lighten-1"><i class="material-icons left">navigate_next</i><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a></button>
        @if (Route::has('register'))
        <button class="waves-effect waves-light btn grey lighten-1"><i class="material-icons left">add</i><a href="{{ route('register') }}" class="text-sm text-gray-700 underline">Registrar</a></button>
        @endif
    
        @endif
    <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
    @endif
    @endsection
</body>
</html>
